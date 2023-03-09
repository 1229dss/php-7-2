<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;  // 新規登録時のバリデーション
use App\Http\Requests\UpdateRequest;  // アカウント情報変更のバリデーション
use App\Http\Requests\Resume_createRequest;  // 履歴書作成時のバリデーション
use App\Http\Requests\Experience_createRequest;  // 職務経歴書作成時のバリデーション
use App\Models\Industry;  // industrysテーブル(業種)
use App\Models\Occupation;  // occupationsテーブル(職種)
use App\Models\Educational_background;  // educational_backgroundテーブル(学歴)
use App\Models\Register;  // usersテーブル
use App\Models\Resume;  // resumesテーブル
use App\Models\Resume_educational_background;  // resumes_educational_backgroundテーブル
use App\Models\Resume_work_history;  // resumes_work_historyテーブル
use App\Models\Resume_licence;  // resumes_licenceテーブル
use App\Models\Experience;  // experiencesテーブル
use App\Models\Experience_work_history;  // experiences_work_historyテーブル
use App\Models\Post_list;  // listsテーブル
use App\Models\Like;  // likesテーブル

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class RetsController extends Controller
{
    // top
    public function top() {
        return view('top');
    }

    // login
    public function login() {
        return view('login');
    }

    // signup
    public function signup() {
        $industrys = Industry::all();
        $occupations = Occupation::all();
        $educational_backgrounds = Educational_background::all();

        return view('signup', compact('industrys', 'occupations', 'educational_backgrounds'));
    }

    // register
    public function register(RegisterRequest $request) {
        $inputs = $request->all();

        $inputs['password'] = Hash::make($inputs['password']); 
        \DB::beginTransaction();
        try {
            Register::create($inputs);
            \Session::flash('notice_msg', 'ユーザー登録が完了しました。');
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('err_msg', 'ユーザー名またはメールアドレスは既に使用されているため別のものを記入してください。');
            return redirect('signup');
        }
        return redirect('login');
    }

    // register_get
    public function register_get() {
        session()->flush();
        \Session::flash('notice_msg', '不正なリクエストです。');
        return redirect('top');
    }

    // logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        \Session::flash('notice_msg', 'ログアウトしました。');
        return redirect('/');
    }



    // resume_create_login
    public function resume_create_login() {
        $industrys = Industry::all();
        $occupations = Occupation::all();
        $id = Auth::id();
        $find_name = Register::find($id);
        if(empty($find_name['user_name'])) {
            return redirect('list');
        }
        View::share('user_name', $find_name['user_name']);
        return view('resume_create_login', compact('id', 'industrys', 'occupations'));
    }

    // resume_create
    public function resume_create() {
        return view('resume_create');
    }
    // resume-pdf
    public function resume_pdf() {
        return view('resume_pdf');
    }

    // resume_register
    public function resume_register(Resume_createRequest $request) {

        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            Resume::create($inputs);
            $inputs['resume_id'] = Resume::max('id');
            Resume_educational_background::create($inputs);
            Resume_work_history::create($inputs);
            Resume_licence::create($inputs);

            $list = Post_list::where('user_id', $inputs['user_id'])->get();

            if(empty($list['0'])){
                $params = [
                    'user_id' => $inputs['user_id'], 
                    'resume_id' => $inputs['resume_id'], 
                ];
                Post_list::create($params);
            } elseif(empty($list['0']['resume_id'])) {
                $param = Post_list::find($list['0']['id']);
                $param->fill([
                    'user_id' => $inputs['user_id'], 
                    'resume_id' => $inputs['resume_id'], 
                ]);
                $param->save();
            }

            \Session::flash('notice_msg', '履歴書の登録が完了しました。');
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('err_msg', '失敗しました。');
            return redirect('resume_create_login');
        }

        $id = Auth::id();
        $find_name = Register::find($id);
        View::share('user_name', $find_name['user_name']);

        return redirect('main');
    }

    // resume_register_get
    public function resume_register_get() {
        session()->flush();
        \Session::flash('notice_msg', '不正なリクエストです。');
        return redirect('top');
    }

    // resume_edit
    public function resume_edit($id) {
        $user_id = Auth::id();
        $resume = Resume::find($id);

        if (empty($user_id)) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }
        if ($user_id !== $resume['user_id']) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }

        $industrys = Industry::all();
        $occupations = Occupation::all();
        $user_id = Auth::id();
        $find_name = Register::find($user_id);
        View::share('user_name', $find_name['user_name']);

        $resume_id = $resume['id'];
        $educational_background = Resume_educational_background::where('resume_id', $resume_id)->get();
        $work_history = Resume_work_history::where('resume_id', $resume_id)->get();
        $licence = Resume_licence::where('resume_id', $resume_id)->get();

        return view('resume_edit', compact('id', 'user_id', 'industrys', 'occupations', 'resume', 'educational_background', 'work_history', 'licence'));
    }

    // resume_update
    public function resume_update(Resume_createRequest $request) {
        \DB::beginTransaction();
        try{
            $resume = Resume::find($request['id']);
            $educational_background = Resume_educational_background::where('resume_id', $request['id'])->get();
            $work_history = Resume_work_history::where('resume_id', $request['id'])->get();
            $licence = Resume_licence::where('resume_id', $request['id'])->get();

            $resume->fill($request->all())->save();
            $educational_background['0']->fill($request->all())->save();
            $work_history['0']->fill($request->all())->save();
            $licence['0']->fill($request->all())->save();

            \Session::flash('notice_msg', '履歴書の更新が完了しました。');
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('notice_msg', '失敗しました。');
            return redirect('main');
        }
        $id = Auth::id();
        $find_name = Register::find($id);
        View::share('user_name', $find_name['user_name']);

        return redirect('main');
    }

    // resume_update_get
    public function resume_update_get() {
        session()->flush();
        \Session::flash('notice_msg', '不正なリクエストです。');
        return redirect('top');
    }

    // resume_delete
    public function resume_delete($id) {
        $user_id = Auth::id();
        $resume = Resume::find($id);

        if (empty($user_id)) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }
        if ($user_id !== $resume['user_id']) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }

        \DB::beginTransaction();
        try{
            $user_id = Auth::id();
            $cond = ['id' => $id, 'user_id' => $user_id];
            Resume::where($cond)->delete();

            Resume_educational_background::where('resume_id', $id)->delete();
            Resume_work_history::where('resume_id', $id)->delete();
            Resume_licence::where('resume_id', $id)->delete();
            \Session::flash('notice_msg', '履歴書を削除しました。');
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('notice_msg', '失敗しました。');
            return redirect('main');
        }
        return redirect('main');
    }

    // experience_create
    public function experience_create() {
        return view('experience_create');
    }

    // experience-pdf
    public function experience_pdf() {
        return view('experience_pdf');
    }

    // experience_create_login
    public function experience_create_login() {
        $industrys = Industry::all();
        $occupations = Occupation::all();
        $id = Auth::id();
        $find_name = Register::find($id);
        if(empty($find_name['user_name'])) {
            return redirect('list');
        }
        View::share('user_name', $find_name['user_name']);
        return view('experience_create_login', compact('id', 'industrys', 'occupations'));
    }

    // experience_register
    public function experience_register(Experience_createRequest $request) {
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            Experience::create($inputs);
            $inputs['experience_id'] = Experience::max('id');
            Experience_work_history::create($inputs);

            $list = Post_list::where('user_id', $inputs['user_id'])->get();

            if(empty($list['0'])){
                $params = [
                    'user_id' => $inputs['user_id'], 
                    'experience_id' => $inputs['experience_id'], 
                ];
                Post_list::create($params);
            } elseif(empty($list['0']['experience_id'])) {
                $param = Post_list::find($list['0']['id']);
                $param->fill([
                    'user_id' => $inputs['user_id'], 
                    'experience_id' => $inputs['experience_id'], 
                ]);
                $param->save();
            }

            \Session::flash('notice_msg', '職務経歴書の登録が完了しました。');
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('err_msg', '失敗しました。');
            return redirect('experience_create_login');
        }

        $id = Auth::id();
        $find_name = Register::find($id);
        View::share('user_name', $find_name['user_name']);

        return redirect('main');
    }

    // experience_register_get
    public function experience_register_get() {
        session()->flush();
        \Session::flash('notice_msg', '不正なリクエストです。');
        return redirect('top');
    }

    // experience_edit
    public function experience_edit($id) {
        $user_id = Auth::id();
        $experience = Experience::find($id);

        if (empty($user_id)) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }
        if ($user_id !== $experience['user_id']) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }

        $industrys = Industry::all();
        $occupations = Occupation::all();
        $user_id = Auth::id();
        $find_name = Register::find($user_id);
        View::share('user_name', $find_name['user_name']);

        $experience_id = $experience['id'];
        $work_history = Experience_work_history::where('experience_id', $experience_id)->get();

        return view('experience_edit', compact('id', 'user_id', 'industrys', 'occupations', 'experience', 'work_history'));
    }

    // experience_update
    public function experience_update(Experience_createRequest $request) {
        \DB::beginTransaction();
        try{
            $experience = Experience::find($request['id']);
            $work_history = Experience_work_history::where('experience_id', $request['id'])->get();

            $experience->fill($request->all())->save();
            $work_history['0']->fill($request->all())->save();

            \Session::flash('notice_msg', '職務経歴書の更新が完了しました。');
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('notice_msg', '失敗しました。');
            return redirect('main');
        }
        $id = Auth::id();
        $find_name = Register::find($id);
        View::share('user_name', $find_name['user_name']);

        return redirect('main');
    }

    // experience_update_get
    public function experience_update_get() {
        session()->flush();
        \Session::flash('notice_msg', '不正なリクエストです。');
        return redirect('top');
    }

    // experience_delete
    public function experience_delete($id) {
        $user_id = Auth::id();
        $experience = Experience::find($id);

        if (empty($user_id)) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }
        if ($user_id !== $experience['user_id']) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }

        \DB::beginTransaction();
        try{
            $user_id = Auth::id();
            $cond = ['id' => $id, 'user_id' => $user_id];

            Experience::where($cond)->delete();
            Experience_work_history::where('experience_id', $id)->delete();

            \Session::flash('notice_msg', '職務経歴書を削除しました。');
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('notice_msg', '失敗しました。');
            return redirect('main');
        }
        return redirect('main');
    }
        
    // main
    public function main(Request $request) {
        $check = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($check)) {
            $id = Auth::id();
            $find_name = Register::find($id);
            View::share('user_name', $find_name['user_name']);

            $resumes = Resume::where('user_id', $id)->paginate(5);
            $experiences = Experience::where('user_id', $id)->paginate(5);
            $lists = Post_list::all();

            if(empty($resumes['0']['id'])) {
                $resume_msg = 'データがありません。';
                View::share('resume_msg', $resume_msg);
            }
            if(empty($experiences['0']['id'])) {
                $experience_msg = 'データがありません。';
                View::share('experience_msg', $experience_msg);
            }
            return view('main', compact('id', 'resumes', 'experiences','lists'));
        } else {
            \Session::flash('notice_msg', "ログインに失敗しました。\nメールアドレスとパスワードを確認してください。");
            return redirect('login');
        }
    }

    // main_get
    public function main_get() {
        $id = Auth::id();
        if(isset($id)) {
            $find_name = Register::find($id);
            if(empty($find_name['user_name'])) {
                return redirect('list');
            }
            View::share('user_name', $find_name['user_name']);
            // dd($find_name);

            $resumes = Resume::where('user_id', $id)->paginate(5);
            $experiences = Experience::where('user_id', $id)->paginate(5);
            $lists = Post_list::all();

            if(empty($resumes['0']['id'])) {
                $resume_msg = 'データがありません。';
                View::share('resume_msg', $resume_msg);
            }
            if(empty($experiences['0']['id'])) {
                $experience_msg = 'データがありません。';
                View::share('experience_msg', $experience_msg);
            }
            return view('main', compact('id', 'resumes', 'experiences', 'lists'));
        } else {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }
    }

    // list
    public function list() {
        $id = Auth::id();
        if (empty($id)) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }

        $industrys = Industry::all();
        $occupations = Occupation::all();
        $educational_backgrounds = Educational_background::all();
        $users = Register::paginate(5);
        $resumes = Resume::all();
        $experiences = Experience::all();
        $lists = Post_list::all();
        $likes = Like::all();
        
        $find_name = Register::find($id);
        View::share('user_name', $find_name['user_name']);
        return view('list', compact('users', 'industrys', 'occupations', 'educational_backgrounds', 'lists', 'resumes', 'experiences','likes'));
    
    }

    // list_search 検索
    public function list_search(Request $request) {
        $inputs = $request->all();

        // 何も記入せずに検索をしたときのリダイレクト
        if(!isset($inputs['educational_background_id']) &&
            !isset($inputs['previous_industry_id']) &&
            !isset($inputs['previous_occupation_id'])) { 
        return redirect('list');
        }

        // 学歴のみ
        if(isset($inputs['educational_background_id'])) { //学歴
            $user_seach = [
                'educational_background_id' => $inputs['educational_background_id']
            ];
        }

        // 業種のみ
        if(isset($inputs['previous_industry_id'])) {  //業種
            $user_seach = [
                'previous_industry_id' => $inputs['previous_industry_id']
            ];
        }

         // 職種のみ
        if(isset($inputs['previous_occupation_id'])) {  //職種
            $user_seach = [
                'previous_occupation_id' => $inputs['previous_occupation_id']
            ];
        } 

        if(isset($inputs['educational_background_id'])) { //学歴
            if(isset($inputs['previous_industry_id'])) {  //業種
                // 学歴と業種
                $user_seach = [
                    'educational_background_id' => $inputs['educational_background_id'], 
                    'previous_industry_id' => $inputs['previous_industry_id']
                ];
            }
            if(isset($inputs['previous_occupation_id'])) {  //職種
                // 学歴と職種
                $user_seach = [
                    'educational_background_id' => $inputs['educational_background_id'], 
                    'previous_occupation_id' => $inputs['previous_occupation_id']
                ];
            }
        }
        // 業種と職種
        if(isset($inputs['previous_industry_id']) &&     //業種
            isset($inputs['previous_occupation_id'])) {  //職種

            $user_seach = [
                'previous_industry_id' => $inputs['previous_industry_id'], 
                'previous_occupation_id' => $inputs['previous_occupation_id']
            ];
        }

        // 全て        
        if(isset($inputs['educational_background_id'])) { //学歴
            if(isset($inputs['previous_industry_id'])) {  //業種
                if(isset($inputs['previous_occupation_id'])) {  //職種
                    $user_seach = [
                        'educational_background_id' => $inputs['educational_background_id'], 
                        'previous_industry_id' => $inputs['previous_industry_id'], 
                        'previous_occupation_id' => $inputs['previous_occupation_id']
                    ];
                }
            }
        }

        $industrys = Industry::all();
        $occupations = Occupation::all();
        $educational_backgrounds = Educational_background::all();
        $users = Register::where($user_seach)->paginate(5);
        $resumes = Resume::all();
        $experiences = Experience::all();
        $lists = Post_list::all();
        $likes = Like::all();

        \Session::flash('educational_background_id', $inputs['educational_background_id']);
        \Session::flash('previous_industry_id', $inputs['previous_industry_id']);
        \Session::flash('previous_occupation_id', $inputs['previous_occupation_id']);

        $id = Auth::id();
        $find_name = Register::find($id);
        View::share('user_name', $find_name['user_name']);
        return view('list', compact('users', 'industrys', 'occupations', 'educational_backgrounds', 'lists', 'resumes', 'experiences', 'likes'));
    }


    // list_detail
    public function list_detail($id) {
        $user_id = Auth::id();

        if (empty($user_id)) {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }

        $industrys = Industry::all();
        $occupations = Occupation::all();
        $educational_backgrounds = Educational_background::all();
        $user = Register::find($id);
        $resumes = Resume::all();
        $experiences = Experience::all();
        $lists = Post_list::all();
        $likes = Like::all();

        $find_name = Register::find($user_id);
        View::share('user_name', $find_name['user_name']);
        return view('list_detail', compact('id', 'user', 'industrys', 'occupations', 'educational_backgrounds', 'lists', 'resumes', 'experiences', 'likes', 'user_id'));
    }

    public function like(Request $request) {
        $user_id = Auth::user()->id; //1.ログインユーザーのid取得
        $list_id = $request->list_id; //2.投稿idの取得
        $already_liked = Like::where('user_id', $user_id)->where('list_id', $list_id)->first(); //3.
   
        if (!$already_liked) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
            $like = new Like; //4.Likeクラスのインスタンスを作成
            $like->list_id = $list_id; //Likeインスタンスにlist_id,user_idをセット
            $like->user_id = $user_id;
            $like->save();
        } else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
            Like::where('list_id', $list_id)->where('user_id', $user_id)->delete();
        }
        //5.この投稿の最新の総いいね数を取得
        $list_likes_count = Like::where('list_id', $list_id)->count();
        // dd($list_id);
        $params = [
            'list_likes_count' => $list_likes_count,
            'list_id' => $list_id,
        ];

        return response()->json($params); //6.JSONデータをjQueryに返す
    }


    // list_resume_change
    public function list_resume_change($id) {
        try {
            $user_id = Auth::id();
            $list = Post_list::where('user_id', $user_id)->get();
            $param = Post_list::find($list['0']['id']);
            $resume = Resume::find($id);

            if($resume['user_id'] !== $user_id) {
                \Session::flash('notice_msg', '不正なリクエストです。');
                return redirect('main');
            }

            $param->resume_id = $id;
            $param->save();       

        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('err_msg', '失敗しました。');
            return redirect('main');
        }

        return redirect('main');
    }

    // list_experience_change
    public function list_experience_change($id) {
        try {
            $user_id = Auth::id();
            $list = Post_list::where('user_id', $user_id)->get();
            $param = Post_list::find($list['0']['id']);
            $experience = Experience::find($id);

            if($experience['user_id'] !== $user_id) {
                \Session::flash('notice_msg', '不正なリクエストです。');
                return redirect('main');
            }

            $param->experience_id = $id;
            $param->save();       

        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('err_msg', '失敗しました。');
            return redirect('main');
        }

        return redirect('main');
    }
    
    // user
    public function user() {
        $industrys = Industry::all();
        $occupations = Occupation::all();
        $educational_backgrounds = Educational_background::all();
        $id = Auth::id();
 
        if(isset($id)) {
            $find_name = Register::find($id);
            if(empty($find_name['user_name'])) {
                return redirect('list');
            }
            View::share('user_name', $find_name['user_name']);
            return view('user', compact('find_name', 'industrys', 'occupations', 'educational_backgrounds'));
        } else {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }
    }

    // user_edit
    public function user_edit() {
        $industrys = Industry::all();
        $occupations = Occupation::all();
        $educational_backgrounds = Educational_background::all();

        $id = Auth::id();
        if(isset($id)) {
            $user = Register::find($id);
            View::share('user_name', $user['user_name']);
            return view('user_edit', compact('user', 'industrys', 'occupations', 'educational_backgrounds'));
        } else {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        }     
    }

    // user_update
    public function user_update(UpdateRequest $request) {
        $check = ([
            'email' => $request['email'],
            'password' => $request['password'],
        ]);

        if (Auth::attempt($check)) {
            \DB::beginTransaction();
            try {
                $id = Auth::id();
                $request['new_password'] = Hash::make($request['new_password']); 
                $user = Register::find($id);

                $user->fill([
                    'user_name' => $request['user_name'],
                    'email' => $request['new_email'],
                    'password' => $request['new_password'],
                    'educational_background_id' => $request['educational_background_id'],
                    'previous_industry_id' => $request['previous_industry_id'],
                    'previous_occupation_id' => $request['previous_occupation_id'],
                ]);
                $user->save();
                \Session::flash('notice_msg', 'アカウント情報を変更しました。');
                \DB::commit();
                return redirect('user');
            } catch(\Throwable $e) {
                \DB::rollback();    
                \Session::flash('err_msg', 'ユーザー名またはメールアドレスは既に使用されているため別のものを記入してください。');
                return redirect('user_edit');
            } 
        } else {
            \Session::flash('err_msg', '現在のメールアドレス、パスワードは正しいものを記入してください。');
            return redirect('user_edit');
        }
    }

    // user_update_get
    public function user_update_get() {
            session()->flush();
            \Session::flash('notice_msg', '不正なリクエストです。');
            return redirect('top');
        
    }

    // user_delete
    public function user_delete() {
        \DB::beginTransaction();
        try{
            $id = Auth::id();

            Register::destroy($id);
            Resume::where('user_id', $id)->delete();
            Resume_educational_background::where('user_id', $id)->delete();
            Resume_work_history::where('user_id', $id)->delete();
            Resume_licence::where('user_id', $id)->delete();
            Experience::where('user_id', $id)->delete();
            Experience_work_history::where('user_id', $id)->delete();
            Post_list::where('user_id', $id)->delete(); //list

            \Session::flash('notice_msg', 'アカウントを削除しました。');
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            \Session::flash('notice_msg', '失敗しました。');
            return redirect('user');
        }
        return redirect('top');
    }
}    
