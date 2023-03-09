@extends('layout.layout')
@section('title','パスワード再設定フォーム')
@section('content')
<section>
  <div class="form_default">
		<h2>パスワード再設定フォーム</h2>
		<form method="POST" action="/reset_password">
			@csrf
			<h3>
				<label for="email">メールアドレス</label>
        <span class="primary">@if($errors->has('email')){{ $errors->first('email')}}@endif</span>
			</h3>
			<p>
				<input type="text" name="email" id="email">
			</p>
			<h3>
				<label for="password">パスワード</label>
        <span class="primary">@if($errors->has('password')){{ $errors->first('password')}}@endif</span>
			</h3>
			<p>			
				<input type="password" name="password" id="password">
			</p>
			<h3>
					<label for="password_conf">パスワード確認</label>
					<span class="primary">@if($errors->has('password_conf')){{ $errors->first('password_conf')}}@endif</span>
			</h3>
			<p>
				<input type="password" name="password_conf" id="password_conf">
			</p>
			<button class="btn" type="submit">登録</button>
		</form>
  </div>
</section>
@endsection