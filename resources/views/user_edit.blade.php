@extends('layout.layout_login')
@section('title','アカウント情報編集')
@section('content')
<h2>アカウント情報編集</h2>
<section>
  <div class="form_default">
    <span class="primary">@if (session('err_msg')) {{ session('err_msg') }} @endif</span>
    <form method="post" action="user_update">
      @csrf
      <h3>
        <label for='user_name'>ユーザー名</label>
        <span class="primary">@if($errors->has('user_name')){{ $errors->first('user_name')}}@endif</span>
      </h3>
      <p>
        <input id='user_name' type="text" name="user_name" placeholder="ユーザー名" value="@if(session('check')){{session('user_name')}}@else{{$user->user_name}}@endif">
      </p>      
      <h3>
        <label for='email'>現在のメールアドレス</label>
        <span class="primary">@if($errors->has('email')){{ $errors->first('email')}}@endif</span>
      </h3>
      <p>
        <input id='email' type="text" name="email" placeholder="メールアドレス" value="@if(session('check')){{session('email')}}@else{{$user->email}}@endif">
      </p>
      <h3>
        <label for='new_email'>新しいメールアドレス</label>
        <span class="primary">@if($errors->has('new_email')){{ $errors->first('new_email')}}@endif</span>
      </h3>
      <p>
        <input id='new_email' type="text" name="new_email" placeholder="メールアドレス" value="@if(session('new_email')){{session('new_email')}}@endif">
      </p>

      <h3>
        <label for='password'>現在のパスワード</label>
        <span class="primary">@if($errors->has('password')){{ $errors->first('password')}}@endif</span>
      </h3>
      <p>
        <input id='password' type="password" name="password" placeholder="パスワード">
      </p> 
      <h3>
        <label for='new_password'>新しいパスワード</label>
        <span class="primary">@if($errors->has('new_password')){{ $errors->first('new_password')}}@endif</span>
      </h3>
      <p>
        <input id='new_password' type="password" name="new_password" placeholder="パスワード">
      </p> 
      
      <h3>
        <label>最終学歴</label>
        <span class="primary">@if($errors->has('educational_background_id')){{ $errors->first('educational_background_id')}}@endif</span>
      </h3>    
      <p>
        <select name="educational_background_id">  
          <option value="" selected>業種を選択してください</option>
            @foreach($educational_backgrounds as $educational_background)
            <option value={{ $educational_background->id }} 
              @if(session('check') && session('educational_background_id') == $educational_background['id']) selected
                @elseif(session('educational_background_id') && session('educational_background_id') == $educational_background['id']) selected
                @elseif (!session('check') && $user['educational_background_id'] == $educational_background['id']) selected
              @endif>
              {{ $educational_background->name }}
            </option>
            @endforeach
          </select>
      </p>
      <h3>
        <label>前職の業種/職種</label>
      </h3>    
      <p>
        <select name="previous_industry_id">  
          <option value="" selected>業種を選択してください</option>
            @foreach($industrys as $industry)
            <option value={{ $industry->id }} 
              @if(session('check') && session('previous_industry_id') == $industry['id']) selected
                @elseif(session('previous_industry_id') && session('previous_industry_id') == $industry['id']) selected
                @elseif (!session('check') && $user['previous_industry_id'] == $industry['id']) selected
              @endif>
              {{ $industry->name }}
            </option>
            @endforeach
        </select>
        <select name="previous_occupation_id">  
          <option value="" selected>職種を選択してください</option>
          @foreach($occupations as $occupation)
          <option value={{ $occupation->id }} 
            @if(session('check') && session('previous_occupation_id') == $occupation['id']) selected
              @elseif(session('previous_occupation_id') && session('previous_occupation_id') == $occupation['id']) selected
              @elseif (!session('check') && $user['previous_occupation_id'] == $occupation['id']) selected
              @endif>
            {{ $occupation->name }}
          </option>
          @endforeach
        </select>
      </p>
      <div class="btn_area">
        <a class="btn_back" href="user">戻る</a>
        <button class="btn" type="submit">完了</button>
      </div>
    </form>
  </div>
</section>
@endsection

