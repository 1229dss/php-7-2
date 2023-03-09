@extends('layout.layout')
@section('title','パスワード再設定メール送信フォーム')
@section('content')
<section>
  <div class="form_default">
    <h2>パスワード再設定メール送信フォーム</h2>
    <span class="primary">@if (session('notice_msg')) {{(session('notice_msg'))}} @endif</span>
    <form method="POST" action="/forgot-password">
      @csrf
      <h3>
        <label for="email">メールアドレス</label>
        <span class="primary">@if($errors->has('email')){{ $errors->first('email')}}@endif</span>
      </h3>
      <p>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
      </p>
      <div class="btn_area">
        <a class="btn_back responsive_btn" href="login">戻る</a>
        <button class="btn responsive_btn" type="submit">メールを送信</button>
      </div>
    </form>
    </div>
</section>
@endsection