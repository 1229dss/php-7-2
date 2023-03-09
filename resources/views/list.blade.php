@extends('layout.layout_login_like')
@section('title','投稿一覧')
@section('content')
<section>
  <h1>投稿一覧</h1></br>
  <h2 class="list_heading">キーワード検索</h2>

  <div class="search_area">
    <form method="post" action="list_search">
      @csrf
      <div class="search">
        <div>
          <h3><label>最終学歴</label></h3>    
          <p>
            <select name="educational_background_id"> 
              <option value="" selected>業種を選択してください</option>
              @foreach($educational_backgrounds as $educational_background)
              <option value="{{ $educational_background->id }}" @if (session('educational_background_id') == $educational_background['id']) selected @endif>{{ $educational_background->name }}</option>
              @endforeach
            </select>
          </p>  
        </div> 
        <div>
          <h3><label>前職の業種/職種</label></h3>    
          <p>
            <select name="previous_industry_id">
              <option value="" selected>業種を選択してください</option>
              @foreach($industrys as $industry)
              <option value="{{ $industry->id }}" @if (session('previous_industry_id') == $industry['id']) selected @endif>{{ $industry->name }}</option>
              @endforeach
            </select>
            <select name="previous_occupation_id">  
              <option value="" selected>職種を選択してください</option>
              @foreach($occupations as $occupation)
              <option value="{{ $occupation->id }}" @if (session('previous_occupation_id') == $occupation['id']) selected @endif>{{ $occupation->name }}</option>
              @endforeach
            </select>
          </p> 
        </div>
      </div>
      <button class="search_btn" type="submit">検索</button>
    </form>
  </div>
  
  <h2 class="list_heading">ユーザー投稿一覧</h2>
  
  @foreach($users as $user)
  <div class="user_info_area">
      <h3  class="user_info_user_name">ユーザー名：{{$user['user_name']}}</h3>
      @foreach($resumes as $resume) 
        @if ($user['id'] == $resume['user_id'])
          @foreach($lists as $list) 
            @if ($resume['id'] == $list['resume_id'])
              <?php $list_id = $list['id'];?>
              <div class="responsive_add">
                <span class="like-toggle list_like " data-list-id="{{$list_id}}">参考になった!!
                  <i class="fa-regular fa-thumbs-up like_chek{{$list_id}}"></i>
                  <span class="like-counter">
                      <?php $i=0;?>
                      @foreach($likes as $like)
                        @if ($like['list_id'] == $list_id) <?php $i++;?> @endif
                      @endforeach
                      {{$i}}
                  </span>
                </span>
              </div>
            @endif
          @endforeach
        @endif
      @endforeach
      <div class="user_info">
          <p>
            <small>
              最終学歴 : 
              <span class="underline">
                @foreach($educational_backgrounds as $educational_background)
                    @if ($user['educational_background_id'] == $educational_background['id']) {{$educational_background['name']}} @endif
                  @endforeach
              <span>
            </small>
          </p>
          <p class="user_info_previous">
            <small>
              前職の業種/職種 : 
              <span class="underline">
                @foreach($industrys as $industry)
                  @if ($user['previous_industry_id'] == $industry['id']) {{$industry['name']}} @endif
                @endforeach
                /
                @foreach($occupations as $occupation)
                  @if ($user['previous_occupation_id'] == $occupation['id']) {{$occupation['name']}} @endif
                @endforeach
              <span>
            </small>
          </p>
      </div>
      @foreach($resumes as $resume) 
        @if ($user['id'] == $resume['user_id'])
          @foreach($lists as $list) 
            @if ($resume['id'] == $list['resume_id'])
              <?php $list_id = $list['id'];?>
              <div class="like_area">
                <span class="like-toggle list_like" data-list-id="{{$list_id}}">参考になった!!
                  <i class="fa-regular fa-thumbs-up like_chek{{$list_id}}"></i>
                  <span class="like-counter">
                      <?php $i=0;?>
                      @foreach($likes as $like)
                        @if ($like['list_id'] == $list_id) <?php $i++;?> @endif
                      @endforeach
                      {{$i}}
                  </span>
                </span>
              </div>
            @endif
          @endforeach
        @endif
      @endforeach

    <div class="user_info_secondary">
      <div class="user_info_motivation">
        <div class="user_info_motivation_heading">
          <p class="font-weight">志望動機</p>
          <p class="user_info_desirable">
            <small>
              希望の業種/職種 : 
              <span class="underline">
                @foreach($resumes as $resume)
                  @if ($user['id'] == $resume['user_id'])
                    @foreach($lists as $list)
                      @if ($resume['id'] == $list['resume_id'])
                        @foreach($industrys as $industry)
                          @if ($resume['desirable_industry_id'] == $industry['id']){{$industry['name']}} @endif  
                        @endforeach
                      @endif  
                    @endforeach
                  @endif  
                @endforeach
                /
                @foreach($resumes as $resume)
                  @if ($user['id'] == $resume['user_id'])
                    @foreach($lists as $list)
                      @if ($resume['id'] == $list['resume_id'])
                        @foreach($occupations as $occupation)
                          @if ($resume['desirable_occupation_id'] == $occupation['id']){{$occupation['name']}} @endif  
                        @endforeach
                      @endif  
                    @endforeach
                  @endif  
                @endforeach
              </span>
            </small>
          </p>
        </div>
        <p class="user_info_motivation_content">
          @foreach($resumes as $resume)
            @if ($user['id'] == $resume['user_id'])
              @foreach($lists as $list)
                @if ($resume['id'] == $list['resume_id']) {{Str::limit($resume['motivation'],200)}} @endif
              @endforeach
            @endif
          @endforeach
        </p>
      </div>
      <div class="user_info_summary">
        <div class="user_info_summary_heading">
          <p class="font-weight">自己PR</p>
          <p class="user_info_desirable">
            <small>
              希望の業種/職種 : 
              <span class="underline">
                @foreach($experiences as $experience)
                  @if ($user['id'] == $experience['user_id']) 
                    @foreach($lists as $list)
                      @if ($experience['id'] == $list['experience_id'])
                        @foreach($industrys as $industry)
                          @if ($experience['desirable_industry_id'] == $industry['id']){{$industry['name']}} @endif  
                        @endforeach
                      @endif  
                    @endforeach
                  @endif  
                @endforeach
                /
                @foreach($experiences as $experience)
                  @if ($user['id'] == $experience['user_id']) 
                    @foreach($lists as $list)
                      @if ($experience['id'] == $list['experience_id'])
                        @foreach($occupations as $occupation)
                          @if ($experience['desirable_occupation_id'] == $occupation['id']){{$occupation['name']}} @endif  
                        @endforeach
                      @endif  
                    @endforeach
                  @endif  
                @endforeach
              </span>
            </small>
          </p>
        </div>
        <p class="user_info_summary_content">
          @foreach($experiences as $experience)
            @if ($user['id'] == $experience['user_id'])
              @foreach($lists as $list)
                @if ($experience['id'] == $list['experience_id']) {{Str::limit($experience['summary'],200)}} @endif
              @endforeach
            @endif
          @endforeach
        </p>
      </div>
    </div>
    <div class="list_detail_btn"><a href="list_detail{{ $user['id'] }}">詳細はこちら</a></div>

  </div>
  @endforeach
  <div class="list_page_link">{{ $users->links() }}</div>

</section>
@endsection

