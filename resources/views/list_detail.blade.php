@extends('layout.layout_login_like')
@section('title','投稿詳細')
@section('content')

@foreach($resumes as $resume) 
  @if ($user['id'] == $resume['user_id']) 
    @foreach($lists as $list) 
      @if ($resume['id'] == $list['resume_id']) 
      <?php   $list_id = $list['id'];?>
      @endif
    @endforeach
  @endif
@endforeach

@if(isset($list_id))
  @foreach($likes as $like) 
    @if ($like['user_id'] == $user_id && $like['list_id'] == $list_id) 
      <?php $like_check = 1;?>
    @endif
  @endforeach
@endif

<div>
  <h2 class="list_detail_heading">{{$user['user_name']}}さんの詳細ページ</h2>
</div>

<section class="list_detail_area">
  <div class="list_detail_user_info">
    <div>
      <p>
        最終学歴 : 
        <span class="underline">
          @foreach($educational_backgrounds as $educational_background)
            @if ($user['educational_background_id'] == $educational_background['id']) {{$educational_background['name']}} @endif
            @endforeach
        <span>
      </p>
      <p>
        前職の業種/職種 : 
        @foreach($industrys as $industry)
          @if ($user['previous_industry_id'] == $industry['id']) {{$industry['name']}} @endif
        @endforeach
        /
        @foreach($occupations as $occupation)
          @if ($user['previous_occupation_id'] == $occupation['id']) {{$occupation['name']}} @endif
        @endforeach
      </p>
    </div>
    <div>
      @if (empty($like_check) && isset($list_id)) 
        <div class="like">
          <span class="like-toggle" data-list-id="{{$list_id}}">参考になった!!</span>
          <i class="fa-regular fa-thumbs-up  like_chek{{$list_id}}"></i>
          <span class="like-counter">
              <?php $i=0;?>
              @foreach($likes as $like)
                @if ($like['list_id'] == $list_id) <?php $i++;?> @endif
              @endforeach
              {{$i}}
          </span>
        </div>
      @elseif(isset($list_id))
        <div class="like liked">
          <span class="like-toggle" data-list-id="{{$list_id}}">参考になった!!</span>
          <i class="fa-regular fa-thumbs-up  like_chek{{$list_id}}"></i>
          <span class="like-counter">
            <?php $i=0;?>
            @foreach($likes as $like)
              @if ($like['list_id'] == $list_id) <?php $i++;?> @endif
            @endforeach
            {{$i}}
          </span>
        </div>
      @endif
    </div>
  </div>

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
            @if ($resume['id'] == $list['resume_id']) {!! nl2br(e($resume['motivation'])) !!} @endif
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
            @if ($experience['id'] == $list['experience_id']) {!! nl2br(e($experience['summary'])) !!} @endif
          @endforeach
        @endif
      @endforeach
    </p>
  </div>

  <a href="list" class="btn_back_list">戻る</a>

</section>
@endsection

