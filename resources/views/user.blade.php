@extends('layout.layout_login')
@section('title','アカウント情報')
@section('content')
<h2>アカウント情報</h2>
@if (session('notice_msg'))
  <?php
  $alert = "<script type='text/javascript'>alert('". session('notice_msg'). "');</script>";
  echo $alert;
  ?>
@endif

<section>
  <div class="form_default">
    <h3>ユーザー名</h3>
    <p>{{$find_name['user_name']}}</p>
    <h3>メールアドレス</h3>
    <p>{{$find_name['email']}}</p>
    <h3>最終学歴</h3>
    <p>      
      @foreach($educational_backgrounds as $educational_background)
      @if ($find_name['educational_background_id'] == $educational_background['id']) {{$educational_background['name']}} @endif
      @endforeach
    </p>
    <h3>前職の業種/職種</h3>
    <p>
      @foreach($industrys as $industry)
      @if ($find_name['previous_industry_id'] == $industry['id']) {{$industry['name']}} @endif
      @endforeach
      /
      @foreach($occupations as $occupation)
      @if ($find_name['previous_occupation_id'] == $occupation['id']) {{$occupation['name']}} @endif
      @endforeach
    </p>
    <p>
      

    </p>
    <div class="btn_area">
        <a class="btn_back" href="main">戻る</a>
        <a class="btn" href="user_edit">編集</a>
        <a class="btn" href="user_delete" onclick="return confirm('本当に削除しますか？\r\n作成したデータは全て削除されます。')">削除</a>
    </div>
</div>
</section>
@endsection