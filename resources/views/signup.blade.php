@extends('layout.layout')
@section('title','新規登録')
@section('content')
<section>
  <div class="form_default">
    <h2>新規登録</h2>
    <span class="primary">@if (session('err_msg')) {{ session('err_msg') }} @endif</span>
    <form method="post" action="register">
      @csrf
      <h3>
        <label for='user_name'>ユーザー名</label>
        <span class="primary">@if($errors->has('user_name')){{ $errors->first('user_name')}}@endif</span>
      </h3>
      <p>
        <input id='name' type="text" name="user_name" placeholder="ユーザー名" value=@if (session('user_name')) {{ session('user_name') }} @endif>
      </p>
      <h3>
        <label for='email'>メールアドレス</label>
        <span class="primary">@if($errors->has('email')){{ $errors->first('email')}}@endif</span>
      </h3>
      <p>
        <input id='email' type="text" name="email" placeholder="メールアドレス" value=@if (session('email')) {{ session('email') }} @endif>
      </p>
      <h3>
        <label for='password'>パスワード</label>
        <span class="primary">@if($errors->has('password')){{ $errors->first('password')}}@endif</span>
      </h3>
      <p>
        <input id='password' type="password" name="password" placeholder="パスワード">
      </p> 
      <h3>
        <label for='password_conf'>パスワード確認</label>
        <span class="primary">@if($errors->has('password_conf')){{ $errors->first('password_conf')}}@endif</span>
      </h3>
      <p>
        <input id='password_conf' type="password" name="password_conf" placeholder="パスワード確認">
      </p> 
      <h3>
        <label>最終学歴</label>
        <span class="primary">@if($errors->has('educational_background_id')){{ $errors->first('educational_background_id')}}@endif</span>
      </h3>    
      <p>
        <select name="educational_background_id"> 
          <option value="" @if (empty(session('educational_background_id'))) selected @endif>業種を選択してください</option>
          @foreach($educational_backgrounds as $educational_background)
          <option value={{ $educational_background->id }} @if (session('educational_background_id') == $educational_background['id']) selected @endif>{{ $educational_background->name }}</option>
          @endforeach
        </select>
      </p>   
      <h3><label>前職の業種/職種</label></h3>    
      <p>
        <select name="previous_industry_id">
          <option value="" selected>業種を選択してください</option>
          @foreach($industrys as $industry)
          <option value={{ $industry->id }} @if (session('previous_industry_id') == $industry['id']) selected @endif>{{ $industry->name }}</option>
          @endforeach
        </select>
        <select name="previous_occupation_id">  
          <option value="" selected>職種を選択してください</option>
          @foreach($occupations as $occupation)
          <option value={{ $occupation->id }} @if (session('previous_occupation_id') == $occupation['id']) selected @endif>{{ $occupation->name }}</option>
          @endforeach
        </select>
      </p> 
      <button class="btn" type="submit">登録</button>
    </form>
  </div>
</section>
@endsection

