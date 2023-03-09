@extends('layout.layout')
@section('title','ログイン')
@section('content')
<section>
  <div class="form_default">
    <h2>ログイン</h2>
    <span class="primary">@if (session('notice_msg')) {!! nl2br(e(session('notice_msg'))) !!} @endif</span>
    <form method="post" action="main">
      @csrf
      <h3>
        <label for='email'>メールアドレス</label>
        <span class="primary">@if($errors->has('email')){{ $errors->first('email')}}@endif</span>
      </h3>
      <p>
        <input id='email' type="text" name="email" placeholder="メールアドレス" value="">
      </p>
      <h3>
        <label for='password'>パスワード</label>
        <span class="primary">@if($errors->has('password')){{ $errors->first('password')}}@endif</span>
      </h3>
      <p>
        <input id='password' type="password" name="password" placeholder="パスワード">
      </p> 
      <button class="btn" type="submit">ログイン</button>
    </form>
  </div>
  <div class="login_link_area">
    <p>
      <a class="underline" href="http://localhost/oauth/github/redirect">Githubからログイン</a>
      <small>Githubからログインは投稿一覧の閲覧のみです</small>
    </p>  
    <p><a class="underline" href="signup">新規登録はこちら</a></p>
    <p><a class="underline" href="/forgot-password">パスワードを忘れた方はこちら</a></p>
  </div>
</section>
@endsection

