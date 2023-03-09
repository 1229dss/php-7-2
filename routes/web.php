<?php
// declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Githubログイン
use App\Http\Controllers\OAuth\CallbackFromProviderController;
use App\Http\Controllers\OAuth\RedirectToProviderController;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Auth\Events\PasswordReset;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;





Route::get('/oauth/{provider}/redirect', RedirectToProviderController::class)->name('oauth.redirect');  //Githubログイン
Route::get('/oauth/{provider}/callback', CallbackFromProviderController::class)->name('oauth.callback');  //Githubログイン

Route::get('/', 'RetsController@top');  //トップページ
Route::get('top', 'RetsController@top');  //トップページ
Route::get('login', 'RetsController@login');  //ログイン画面
Route::get('signup', 'RetsController@signup');  //新規登録画面
Route::post('register', 'RetsController@register');  //新規登録処理
Route::get('register', 'RetsController@register_get');  //新規登録処理 リダイレクト処理
Route::get('logout', 'RetsController@logout');  //ログアウト処理

Route::get('resume_create', 'RetsController@resume_create');  //  未ログイン時の履歴書作成
Route::get('resume_create_login', 'RetsController@resume_create_login'); // ログイン時の履歴書作成
Route::post('resume_register', 'RetsController@resume_register'); // 履歴書の保存
Route::get('resume_register', 'RetsController@resume_register_get'); // 履歴書の保存 リダイレクト処理
Route::post('resume_pdf', 'RetsController@resume_pdf');  //  履歴書プレビュー
Route::get('resume_edit{id}', 'RetsController@resume_edit');  // 履歴書の編集
Route::post('resume_update', 'RetsController@resume_update');  // 履歴書の更新
Route::get('resume_update', 'RetsController@resume_update_get');  //履歴書の更新 リダイレクト処理
Route::get('resume_delete{id}', 'RetsController@resume_delete');  //履歴書の削除

Route::get('experience_create', 'RetsController@experience_create');  //  未ログイン時の職務経歴書作成
Route::get('experience_create_login', 'RetsController@experience_create_login'); //ログイン時の職務経歴書作成
Route::post('experience_register', 'RetsController@experience_register'); // 職務経歴書の保存
Route::get('experience_register', 'RetsController@experience_register_get'); // 職務経歴書の保存 リダイレクト処理
Route::post('experience_pdf', 'RetsController@experience_pdf');  //  職務経歴書プレビュー
Route::get('experience_edit{id}', 'RetsController@experience_edit');  //職務経歴書の編集
Route::post('experience_update', 'RetsController@experience_update');  //職務経歴書の更新
Route::get('experience_update', 'RetsController@experience_update_get');  //職務経歴書の更新 リダイレクト処理
Route::get('experience_delete{id}', 'RetsController@experience_delete');  //職務経歴書の削除

Route::post('main', 'RetsController@main');  //メインページ
Route::get('main', 'RetsController@main_get');  //メインページ リダイレクト処理

Route::get('user', 'RetsController@user');  //アカウント情報
Route::get('user_edit', 'RetsController@user_edit');  //アカウント情報編集画面
Route::post('user_update', 'RetsController@user_update');  //アカウント情報更新
Route::get('user_update', 'RetsController@user_update_get');  //アカウント情報更新 リダイレクト処理
Route::get('user_delete', 'RetsController@user_delete');  //アカウント情報削除

Route::get('list', 'RetsController@list');  //投稿一覧
Route::post('list_search', 'RetsController@list_search');  //投稿一覧検索
Route::get('list_detail{id}', 'RetsController@list_detail');  //投稿一覧詳細
Route::get('list_resume_change{id}', 'RetsController@list_resume_change');  //投稿変更(履歴書)
Route::get('list_experience_change{id}', 'RetsController@list_experience_change');  //投稿変更(職務経歴書)
Route::post('/like', 'RetsController@like');  //いいね機能

// パスワードリセット関連
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );
    \Session::flash('notice_msg', 'メールを送信しました。');

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset_password', 'PasswordController@reset_password');

