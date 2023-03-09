@extends('layout.layout_login_create')
@section('title','履歴書作成')
@section('content')
<script src="/js/resume.js" type="text/javascript"></script>

<h2 class="create_heading">履歴書作成</h2>
@if($errors->has('name')){{ session('err_msg') }}@elseif (session('err_msg')) {{ session('err_msg') }}@endif
<section>
  <div class="entry_field">
    <form method="post" action="resume_register" name="input_form" id="input_form">
      @csrf
      <input type="hidden" name="user_id" value={{$id}}>
      <h3>
        <label for='title'>タイトル</label>
        <span class="primary">@if($errors->has('title')){{$errors->first('title')}}@endif</span>
      </h3>
      <p>
        <input id='title' type="text" name="title" placeholder="一覧で表示する名前" value="@if(session('title')){{session('title')}}@endif">
      </p>
      <h3>
        <label for='date'>日付</label>
        <span class="primary">@if($errors->has('date')){{ $errors->first('date')}}@endif</span>
      </h3>
      <p>
        <input id='date' type="text" name="date" placeholder="○○年○○月○○日現在" value="@if(session('date')){{session('date')}}@endif">
      </p>
      <h3>
        <label for='name'>氏名</label>
        <span class="primary">@if($errors->has('name')){{ $errors->first('name')}}@endif</span>
      </h3>
      <p>
        <input class="primary_name" id='name' type="text" name="name" placeholder="氏名" value="@if(session('name')){{session('name')}}@endif">
      </p>
      <h3>
        <label for='kana_name'>フリガナ(氏名)</label>
        <span class="primary">@if($errors->has('kana_name')){{ $errors->first('kana_name')}}@endif</span>
      </h3>
      <p>
        <input id='kana_name' type="text" name="kana_name" placeholder="フリガナ(氏名)" value="@if(session('kana_name')){{session('kana_name')}}@endif">
      </p> 
      <h3>
        <label for='birth'>生年月日</label>
        <span class="primary">@if($errors->has('birth')){{ $errors->first('birth')}}@endif</span>
      </h3>
      <p>
        <input id='birth' type="date" name="birth" value="@if(session('birth')){{session('birth')}}@endif">
      </p>
      <h3>性別</h3>
      <p>
        <label><input id='sex' type="radio" name="sex" value="0" @if(session('sex')==0) checked @endif>男</label>
        <label><input id='sex' type="radio" name="sex" value="1" @if(session('sex')==1) checked @endif>女</label>
        <label><input id='sex' type="radio" name="sex" value="" @if(session('sex')=='') checked @endif>未記載</label>        
      </p>
      <h3>
        <label for='post_code'>郵便番号</label>
        <span class="primary">@if($errors->has('post_code')){{ $errors->first('post_code')}}@endif</span>
      </h3>
      <p>
        <input id='post_code' type="text" name="post_code" placeholder="000-0000" value="@if(session('post_code')){{session('post_code')}}@endif">
      </p>
      <h3>
        <label for='address'>現住所</label>
        <span class="primary">@if($errors->has('address')){{ $errors->first('address')}}@endif</span>
      </h3>
      <p>
        <input id='address' type="text" name="address" placeholder="現住所" value="@if(session('address')){{session('address')}}@endif">
      </p>
      <h3>
        <label for='kana_address'>フリガナ(現住所)</label>
        <span class="primary">@if($errors->has('kana_address')){{ $errors->first('kana_address')}}@endif</span>
      </h3>
      <p>
        <input id='kana_address' type="text" name="kana_address" placeholder="フリガナ(現住所)" value="@if(session('kana_address')){{session('kana_address')}}@endif">
      </p>
      <h3>
        <label for='tel'>電話番号</label>
        <span class="primary">@if($errors->has('tel')){{ $errors->first('tel')}}@endif</span>
      </h3>
      <p>
        <input id='tel' type="text" name="tel" placeholder="000-0000-0000" value="@if(session('tel')){{session('tel')}}@endif">
      </p>
      <h3>
        <label for='email'>メールアドレス</label>
        <span class="primary">@if($errors->has('email')){{ $errors->first('email')}}@endif</span>
      </h3>
      <p>
        <input class="email" id='email' type="text" name="email" placeholder="メールアドレス" value="@if(session('email')){{session('email')}}@endif">
      </p>
      <i class="fa-solid fa-square-plus addition">現住所以外に連絡を希望する場合のみクリックして記入</i>

      <div class='addition_display none'>
      <!-- この欄は現住所以外に連絡を希望する場合のみ記入 -->
      <!-- 必要なときのみ表示 -->
        <div class="addition_display_spare_area">
          <h3 class="spare">
            <label for='post_code_spare'>郵便番号</label>
            <span class="primary">@if($errors->has('post_code_spare')){{ $errors->first('post_code_spare')}}@endif</span>
          </h3>
          <p>
            <input id='post_code_spare' type="text" name="post_code_spare" placeholder="000-0000" value="@if(session('post_code_spare')){{session('post_code_spare')}}@endif">
          </p>
          <h3>
            <label for='address_spare'>現住所</label>
            <span class="primary">@if($errors->has('address_spare')){{ $errors->first('address_spare')}}@endif</span>
          </h3>
          <p>
            <input id='address_spare' type="text" name="address_spare" placeholder="現住所" value="@if(session('address_spare')){{session('address_spare')}}@endif">
          </p>
          <h3>
            <label for='kana_address_spare'>フリガナ(現住所)</label>
            <span class="primary">@if($errors->has('kana_address_spare')){{ $errors->first('kana_address_spare')}}@endif</span>
          </h3>
          <p>
            <input id='kana_address_spare' type="text" name="kana_address_spare" placeholder="フリガナ(現住所)" value="@if(session('kana_address_spare')){{session('kana_address_spare')}}@endif">
          </p>
          <h3>
            <label for='tel_spare'>電話番号</label>
            <span class="primary">@if($errors->has('tel_spare')){{ $errors->first('tel_spare')}}@endif</span>
          </h3>
          <p>
            <input id='tel_spare' type="text_spare" name="tel_spare" placeholder="000-0000-0000" value="@if(session('tel_spare')){{session('tel_spare')}}@endif">
          </p>
          <h3>
            <label for='email_spare'>メールアドレス</label>
            <span class="primary">@if($errors->has('email_spare')){{ $errors->first('email_spare')}}@endif</span>
          </h3>
          <p>
            <input id='email_spare' type="text" name="email_spare" placeholder="メールアドレス" value="@if(session('email_spare')){{session('email_spare')}}@endif">
          </p>
        </div>
          <!-- この欄は現住所以外に連絡を希望する場合のみ記入 -->
      </div>
      <h3>
        <label for='educational_background_year1'>学歴</label>
        <span class="primary">
          @if($errors->has('educational_background_year1')){{ $errors->first('educational_background_year1')}}
            @elseif($errors->has('educational_background_month1')){{ $errors->first('educational_background_month1')}}
            @elseif($errors->has('educational_background_body1')){{ $errors->first('educational_background_body1')}}
            @elseif($errors->has('educational_background_year2')){{ $errors->first('educational_background_year2')}}
            @elseif($errors->has('educational_background_month2')){{ $errors->first('educational_background_month2')}}
            @elseif($errors->has('educational_background_body2')){{ $errors->first('educational_background_body2')}}
            @elseif($errors->has('educational_background_year3')){{ $errors->first('educational_background_year3')}}
            @elseif($errors->has('educational_background_month3')){{ $errors->first('educational_background_month3')}}
            @elseif($errors->has('educational_background_body3')){{ $errors->first('educational_background_body3')}}
            @elseif($errors->has('educational_background_year4')){{ $errors->first('educational_background_year4')}}
            @elseif($errors->has('educational_background_month4')){{ $errors->first('educational_background_month4')}}
            @elseif($errors->has('educational_background_body4')){{ $errors->first('educational_background_body4')}}
            @elseif($errors->has('educational_background_year5')){{ $errors->first('educational_background_year5')}}
            @elseif($errors->has('educational_background_month5')){{ $errors->first('educational_background_month5')}}
            @elseif($errors->has('educational_background_body5')){{ $errors->first('educational_background_body5')}}
            @elseif($errors->has('educational_background_year6')){{ $errors->first('educational_background_year6')}}
            @elseif($errors->has('educational_background_month6')){{ $errors->first('educational_background_month6')}}
            @elseif($errors->has('educational_background_body6')){{ $errors->first('educational_background_body6')}}
            @elseif($errors->has('educational_background_year7')){{ $errors->first('educational_background_year7')}}
            @elseif($errors->has('educational_background_month7')){{ $errors->first('educational_background_month7')}}
            @elseif($errors->has('educational_background_body7')){{ $errors->first('educational_background_body7')}}
            @elseif($errors->has('educational_background_year8')){{ $errors->first('educational_background_year8')}}
            @elseif($errors->has('educational_background_month8')){{ $errors->first('educational_background_month8')}}
            @elseif($errors->has('educational_background_body8')){{ $errors->first('educational_background_body8')}}
          @endif
        </span>
      </h3>
      <div class="addition_display_area">
        <div class="required_display_area">
          <p>
            <label><input class="educational_background_date" id='educational_background_year1' type="text" name="educational_background_year1" placeholder="2022" value="@if(session('educational_background_year1')){{session('educational_background_year1')}}@endif">年</label>
            <label><input class="educational_background_date" type="text" name="educational_background_month1" placeholder="4" value="@if(session('educational_background_month1')){{session('educational_background_month1')}}@endif">月</label>
            <label><input class="educational_background" type="text" name="educational_background_body1" placeholder="○○学校 入学/卒業" value="@if(session('educational_background_body1')){{session('educational_background_body1')}}@endif"></label>
          </p>
          <p>
            <label><input class="educational_background_date" type="text" name="educational_background_year2" placeholder="2022" value="@if(session('educational_background_year2')){{session('educational_background_year2')}}@endif">年</label>
            <label><input class="educational_background_date" type="text" name="educational_background_month2" placeholder="4" value="@if(session('educational_background_month2')){{session('educational_background_month2')}}@endif">月</label>
            <label><input class="educational_background" type="text" name="educational_background_body2" placeholder="○○学校 入学/卒業" value="@if(session('educational_background_body2')){{session('educational_background_body2')}}@endif"></label>
          </p>
          <i class="fa-solid fa-square-plus addition1">追加</i>
        </div>
        <div class='addition_display1 none'>
          <div class="addition_display_bg">
            <p>
              <label><input class="educational_background_date" id='educational_background_year3' type="text" name="educational_background_year3" placeholder="2022" value="@if(session('educational_background_year3')){{session('educational_background_year3')}}@endif">年</label>
              <label><input class="educational_background_date" id='educational_background_month3' type="text" name="educational_background_month3" placeholder="4" value="@if(session('educational_background_month3')){{session('educational_background_month3')}}@endif">月</label>
              <label><input class="educational_background" id='educational_background_body3' type="text" name="educational_background_body3" placeholder="○○学校 入学/卒業" value="@if(session('educational_background_body3')){{session('educational_background_body3')}}@endif"></label>
            </p>
            <p>
              <label><input class="educational_background_date" id='educational_background_year4' type="text" name="educational_background_year4" placeholder="2022" value="@if(session('educational_background_year4')){{session('educational_background_year4')}}@endif">年</label>
              <label><input class="educational_background_date" id='educational_background_month4' type="text" name="educational_background_month4" placeholder="4" value="@if(session('educational_background_month4')){{session('educational_background_month4')}}@endif">月</label>
              <label><input class="educational_background" id='educational_background_body4' type="text" name="educational_background_body4" placeholder="○○学校 入学/卒業" value="@if(session('educational_background_body4')){{session('educational_background_body4')}}@endif"></label>
            </p>
          </div>
          <i class="fa-solid fa-square-plus addition2">追加</i>
        </div>
        <div class='addition_display2 none'>
          <p>
            <label><input class="educational_background_date" id='educational_background_year5' type="text" name="educational_background_year5" placeholder="2022" value="@if(session('educational_background_year5')){{session('educational_background_year5')}}@endif">年</label>
            <label><input class="educational_background_date" id='educational_background_month5' type="text" name="educational_background_month5" placeholder="4" value="@if(session('educational_background_month5')){{session('educational_background_month5')}}@endif">月</label>
            <label><input class="educational_background" id='educational_background_body5' type="text" name="educational_background_body5" placeholder="○○学校 入学/卒業" value="@if(session('educational_background_body5')){{session('educational_background_body5')}}@endif"></label>
          </p>
          <p>
            <label><input class="educational_background_date" id='educational_background_year6' type="text" name="educational_background_year6" placeholder="2022" value="@if(session('educational_background_year6')){{session('educational_background_year6')}}@endif">年</label>
            <label><input class="educational_background_date" id='educational_background_month6' type="text" name="educational_background_month6" placeholder="4" value="@if(session('educational_background_month6')){{session('educational_background_month6')}}@endif">月</label>
            <label><input class="educational_background" id='educational_background_body6' type="text" name="educational_background_body6" placeholder="○○学校 入学/卒業" value="@if(session('educational_background_body6')){{session('educational_background_body6')}}@endif"></label>
          </p>
          <i class="fa-solid fa-square-plus addition3">追加</i>
        </div>
        <div class='addition_display3 none'>
          <div class="addition_display_bg">
            <p>
              <label><input class="educational_background_date" id='educational_background_year7' type="text" name="educational_background_year7" placeholder="2022" value="@if(session('educational_background_year7')){{session('educational_background_year7')}}@endif">年</label>
              <label><input class="educational_background_date" id='educational_background_month7' type="text" name="educational_background_month7" placeholder="4" value="@if(session('educational_background_month7')){{session('educational_background_month7')}}@endif">月</label>
              <label><input class="educational_background" id='educational_background_body7' type="text" name="educational_background_body7" placeholder="○○学校 入学/卒業" value="@if(session('educational_background_body7')){{session('educational_background_body7')}}@endif"></label>
            </p>
            <p>
              <label><input class="educational_background_date" id='educational_background_year8' type="text" name="educational_background_year8" placeholder="2022" value="@if(session('educational_background_year8')){{session('educational_background_year8')}}@endif">年</label>
              <label><input class="educational_background_date" id='educational_background_month8' type="text" name="educational_background_month8" placeholder="4" value="@if(session('educational_background_month8')){{session('educational_background_month8')}}@endif">月</label>
              <label><input class="educational_background" id='educational_background_body8' type="text" name="educational_background_body8" placeholder="○○学校 入学/卒業" value="@if(session('educational_background_body8')){{session('educational_background_body8')}}@endif"></label>
            </p>
          </div>
        </div>
      </div>

      <h3>
        <label for='work_history_year1'>職歴</label>
        <span class="primary">
          @if($errors->has('work_history_year1')){{ $errors->first('work_history_year1')}}
            @elseif($errors->has('work_history_month1')){{ $errors->first('work_history_month1')}}
            @elseif($errors->has('work_history_body1')){{ $errors->first('work_history_body1')}}
            @elseif($errors->has('work_history_year2')){{ $errors->first('work_history_year2')}}
            @elseif($errors->has('work_history_month2')){{ $errors->first('work_history_month2')}}
            @elseif($errors->has('work_history_body2')){{ $errors->first('work_history_body2')}}
            @elseif($errors->has('work_history_year3')){{ $errors->first('work_history_year3')}}
            @elseif($errors->has('work_history_month3')){{ $errors->first('work_history_month3')}}
            @elseif($errors->has('work_history_body3')){{ $errors->first('work_history_body3')}}
            @elseif($errors->has('work_history_year4')){{ $errors->first('work_history_year4')}}
            @elseif($errors->has('work_history_month4')){{ $errors->first('work_history_month4')}}
            @elseif($errors->has('work_history_body4')){{ $errors->first('work_history_body4')}}
            @elseif($errors->has('work_history_year5')){{ $errors->first('work_history_year5')}}
            @elseif($errors->has('work_history_month5')){{ $errors->first('work_history_month5')}}
            @elseif($errors->has('work_history_body5')){{ $errors->first('work_history_body5')}}
            @elseif($errors->has('work_history_year6')){{ $errors->first('work_history_year6')}}
            @elseif($errors->has('work_history_month6')){{ $errors->first('work_history_month6')}}
            @elseif($errors->has('work_history_body6')){{ $errors->first('work_history_body6')}}
            @elseif($errors->has('work_history_year7')){{ $errors->first('work_history_year7')}}
            @elseif($errors->has('work_history_month7')){{ $errors->first('work_history_month7')}}
            @elseif($errors->has('work_history_body7')){{ $errors->first('work_history_body7')}}
            @elseif($errors->has('work_history_year8')){{ $errors->first('work_history_year8')}}
            @elseif($errors->has('work_history_month8')){{ $errors->first('work_history_month8')}}
            @elseif($errors->has('work_history_body8')){{ $errors->first('work_history_body8')}}
            @elseif($errors->has('work_history_year9')){{ $errors->first('work_history_year9')}}
            @elseif($errors->has('work_history_month9')){{ $errors->first('work_history_month9')}}
            @elseif($errors->has('work_history_body9')){{ $errors->first('work_history_body9')}}
            @elseif($errors->has('work_history_year10')){{ $errors->first('work_history_year10')}}
            @elseif($errors->has('work_history_month10')){{ $errors->first('work_history_month10')}}
            @elseif($errors->has('work_history_body10')){{ $errors->first('work_history_body10')}}
          @endif
        </span>
      </h3>
      <div class="addition_display_area">
        <div class="required_display_area">
          <p>
            <label><input class="work_history_date" id='work_history_year1' type="text" name="work_history_year1" placeholder="2022" value="@if(session('work_history_year1')){{session('work_history_year1')}}@endif">年</label>
            <label><input class="work_history_date" type="text" name="work_history_month1" placeholder="4" value="@if(session('work_history_month1')){{session('work_history_month1')}}@endif">月</label>
            <label><input class="work_history" type="text" name="work_history_body1" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body1')){{session('work_history_body1')}}@endif"></label>
          </p>
          <p>
            <label><input class="work_history_date" type="text" name="work_history_year2" placeholder="2022" value="@if(session('work_history_year2')){{session('work_history_year2')}}@endif">年</label>
            <label><input class="work_history_date" type="text" name="work_history_month2" placeholder="4" value="@if(session('work_history_month2')){{session('work_history_month2')}}@endif">月</label>
            <label><input class="work_history" type="text" name="work_history_body2" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body2')){{session('work_history_body2')}}@endif"></label>
          </p>
          <i class="fa-solid fa-square-plus addition5">追加</i>
        </div>
        <div class='addition_display5 none'>
          <div class="addition_display_bg">
            <p>
              <label><input class="work_history_date" id='work_history_year3' type="text" name="work_history_year3" placeholder="2022" value="@if(session('work_history_year3')){{session('work_history_year3')}}@endif">年</label>
              <label><input class="work_history_date" id='work_history_month3' type="text" name="work_history_month3" placeholder="4" value="@if(session('work_history_month3')){{session('work_history_month3')}}@endif">月</label>
              <label><input class="work_history" id='work_history_body3' type="text" name="work_history_body3" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body3')){{session('work_history_body3')}}@endif"></label>
            </p>
            <p>
              <label><input class="work_history_date" id='work_history_year4' type="text" name="work_history_year4" placeholder="2022" value="@if(session('work_history_year4')){{session('work_history_year4')}}@endif">年</label>
              <label><input class="work_history_date" id='work_history_month4' type="text" name="work_history_month4" placeholder="4" value="@if(session('work_history_month4')){{session('work_history_month4')}}@endif">月</label>
              <label><input class="work_history" id='work_history_body4' type="text" name="work_history_body4" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body4')){{session('work_history_body4')}}@endif"></label>
            </p>
          </div>
          <i class="fa-solid fa-square-plus addition6">追加</i>
        </div>
        <div class='addition_display6 none'>
          <p>
            <label><input class="work_history_date" id='work_history_year5' type="text" name="work_history_year5" placeholder="2022" value="@if(session('work_history_year5')){{session('work_history_year5')}}@endif">年</label>
            <label><input class="work_history_date" id='work_history_month5' type="text" name="work_history_month5" placeholder="4" value="@if(session('work_history_month5')){{session('work_history_month5')}}@endif">月</label>
            <label><input class="work_history" id='work_history_body5' type="text" name="work_history_body5" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body5')){{session('work_history_body5')}}@endif"></label>
          </p>
          <p>
            <label><input class="work_history_date" id='work_history_year6' type="text" name="work_history_year6" placeholder="2022" value="@if(session('work_history_year6')){{session('work_history_year6')}}@endif">年</label>
            <label><input class="work_history_date" id='work_history_month6' type="text" name="work_history_month6" placeholder="4" value="@if(session('work_history_month6')){{session('work_history_month6')}}@endif">月</label>
            <label><input class="work_history" id='work_history_body6' type="text" name="work_history_body6" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body6')){{session('work_history_body6')}}@endif"></label>
          </p>
          <i class="fa-solid fa-square-plus addition7">追加</i>
        </div>
        <div class='addition_display7 none'>
          <div class="addition_display_bg">
            <p>
              <label><input class="work_history_date" id='work_history_year7' type="text" name="work_history_year7" placeholder="2022" value="@if(session('work_history_year7')){{session('work_history_year7')}}@endif">年</label>
              <label><input class="work_history_date" id='work_history_month7' type="text" name="work_history_month7" placeholder="4" value="@if(session('work_history_month7')){{session('work_history_month7')}}@endif">月</label>
              <label><input class="work_history" id='work_history_body7' type="text" name="work_history_body7" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body7')){{session('work_history_body7')}}@endif"></label>
            </p>
            <p>
              <label><input class="work_history_date" id='work_history_year8' type="text" name="work_history_year8" placeholder="2022" value="@if(session('work_history_year8')){{session('work_history_year8')}}@endif">年</label>
              <label><input class="work_history_date" id='work_history_month8' type="text" name="work_history_month8" placeholder="4" value="@if(session('work_history_month8')){{session('work_history_month8')}}@endif">月</label>
              <label><input class="work_history" id='work_history_body8' type="text" name="work_history_body8" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body8')){{session('work_history_body8')}}@endif"></label>
            </p>
          </div>
          <i class="fa-solid fa-square-plus addition8">追加</i>
        </div>
        <div class='addition_display8 none'>
          <p>
            <label><input class="work_history_date" id='work_history_year9' type="text" name="work_history_year9" placeholder="2022" value="@if(session('work_history_year9')){{session('work_history_year9')}}@endif">年</label>
            <label><input class="work_history_date" id='work_history_month9' type="text" name="work_history_month9" placeholder="4" value="@if (session('work_history_month9')){{session('work_history_month9')}}@endif">月</label>
            <label><input class="work_history" id='work_history_body9' type="text" name="work_history_body9" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body9')){{session('work_history_body9')}}@endif"></label>
          </p>
          <p>
            <label><input class="work_history_date" id='work_history_year10' type="text" name="work_history_year10" placeholder="2022" value="@if(session('work_history_year10')){{session('work_history_year10')}}@endif">年</label>
            <label><input class="work_history_date" id='work_history_month10' type="text" name="work_history_month10" placeholder="4" value="@if(session('work_history_month10')){{session('work_history_month10')}}@endif">月</label>
            <label><input class="work_history" id='work_history_body10' type="text" name="work_history_body10" placeholder="○○株式会社 入社/一身上の都合により退社" value="@if(session('work_history_body10')){{session('work_history_body10')}}@endif"></label>
          </p>
        </div>

      <h3>
        <label for='licence_year1'>免許・資格</label>
        <span class="primary">
          @if($errors->has('licence_year1')){{ $errors->first('licence_year1')}}
            @elseif($errors->has('licence_month1')){{ $errors->first('licence_month1')}}
            @elseif($errors->has('licence_body1')){{ $errors->first('licence_body1')}}
            @elseif($errors->has('licence_year2')){{ $errors->first('licence_year2')}}
            @elseif($errors->has('licence_month2')){{ $errors->first('licence_month2')}}
            @elseif($errors->has('licence_body2')){{ $errors->first('licence_body2')}}
            @elseif($errors->has('licence_year3')){{ $errors->first('licence_year3')}}
            @elseif($errors->has('licence_month3')){{ $errors->first('licence_month3')}}
            @elseif($errors->has('licence_body3')){{ $errors->first('licence_body3')}}
            @elseif($errors->has('licence_year4')){{ $errors->first('licence_year4')}}
            @elseif($errors->has('licence_month4')){{ $errors->first('licence_month4')}}
            @elseif($errors->has('licence_body4')){{ $errors->first('licence_body4')}}
            @elseif($errors->has('licence_year5')){{ $errors->first('licence_year5')}}
            @elseif($errors->has('licence_month5')){{ $errors->first('licence_month5')}}
            @elseif($errors->has('licence_body5')){{ $errors->first('licence_body5')}}
            @elseif($errors->has('licence_year6')){{ $errors->first('licence_year6')}}
            @elseif($errors->has('licence_month6')){{ $errors->first('licence_month6')}}
            @elseif($errors->has('licence_body6')){{ $errors->first('licence_body6')}}
          @endif
        </span>
      </h3>
      <div class="addition_display_area">
        <div class="required_display_area">
          <p>
            <label><input class="licence_date" id='licence_year1' type="text" name="licence_year1" placeholder="2022" value="@if(session('licence_year1')){{session('licence_year1')}}@endif">年</label>
            <label><input class="licence_date" type="text" name="licence_month1" placeholder="4" value="@if(session('licence_month1')){{session('licence_month1')}}@endif">月</label>
            <label><input class="licence" type="text" name="licence_body1" placeholder="普通自動車第一種免許 取得" value="@if(session('licence_body1')){{session('licence_body1')}}@endif"></label>
          </p>
          <i class="fa-solid fa-square-plus addition11">追加</i>
        </div>
        <div class='addition_display11 none'>
          <div class="addition_display_bg">
            <p>
              <label><input class="licence_date" id='licence_year2' type="text" name="licence_year2" placeholder="2022" value="@if(session('licence_year2')){{session('licence_year2')}}@endif">年</label>
              <label><input class="licence_date" id='licence_month2' type="text" name="licence_month2" placeholder="4" value="@if(session('licence_month2')){{session('licence_month2')}}@endif">月</label>
              <label><input class="licence" id='licence_body2' type="text" name="licence_body2" placeholder="普通自動車第一種免許 取得" value="@if(session('licence_body2')){{session('licence_body2')}}@endif"></label>
            </p>
          </div>
          <i class="fa-solid fa-square-plus addition12">追加</i>
        </div>
        <div class='addition_display12 none'>
          <p>
            <label><input class="licence_date" id='licence_year3' type="text" name="licence_year3" placeholder="2022" value="@if(session('licence_year3')){{session('licence_year3')}}@endif">年</label>
            <label><input class="licence_date" id='licence_month3' type="text" name="licence_month3" placeholder="4" value="@if(session('licence_month3')){{session('licence_month3')}}@endif">月</label>
            <label><input class="licence" id='licence_body3' type="text" name="licence_body3" placeholder="普通自動車第一種免許 取得" value="@if(session('licence_body3')){{session('licence_body3')}}@endif"></label>
          </p>
          <i class="fa-solid fa-square-plus addition13">追加</i>
        </div>
        <div class='addition_display13 none'>
          <div class="addition_display_bg">
            <p>
              <label><input class="licence_date" id='licence_year4' type="text" name="licence_year4" placeholder="2022" value="@if(session('licence_year4')){{session('licence_year4')}}@endif">年</label>
              <label><input class="licence_date" id='licence_month4' type="text" name="licence_month4" placeholder="4" value="@if(session('licence_month4')){{session('licence_month4')}}@endif">月</label>
              <label><input class="licence" id='licence_body4' type="text" name="licence_body4" placeholder="普通自動車第一種免許 取得" value="@if(session('licence_body4')){{session('licence_body4')}}@endif"></label>
            </p>
          </div>
          <i class="fa-solid fa-square-plus addition14">追加</i>
        </div>
        <div class='addition_display14 none'>
          <p>
            <label><input class="licence_date" id='licence_year5' type="text" name="licence_year5" placeholder="2022" value="@if(session('licence_year5')){{session('licence_year5')}}@endif">年</label>
            <label><input class="licence_date" id='licence_month5' type="text" name="licence_month5" placeholder="4" value="@if(session('licence_month5')){{session('licence_month5')}}@endif">月</label>
            <label><input class="licence" id='licence_body5' type="text" name="licence_body5" placeholder="普通自動車第一種免許 取得" value="@if(session('licence_body5')){{session('licence_body5')}}@endif"></label>
          </p>
          <i class="fa-solid fa-square-plus addition15">追加</i>
        </div>
        <div class='addition_display15 none'>
          <div class="addition_display_bg">
            <p>
              <label><input class="licence_date" id='licence_year6' type="text" name="licence_year6" placeholder="2022" value="@if(session('licence_year6')){{session('licence_year6')}}@endif">年</label>
              <label><input class="licence_date" id='licence_month6' type="text" name="licence_month6" placeholder="4" value="@if(session('licence_month6')){{session('licence_month6')}}@endif">月</label>
              <label><input class="licence" id='licence_body6' type="text" name="licence_body6" placeholder="普通自動車第一種免許 取得" value="@if(session('licence_body6')){{session('licence_body6')}}@endif"></label>
            </p>
          </div>
        </div>
      </div>
      
      <h3>
        <label for='motivation'>志望動機</label>
        <span class="primary">@if($errors->has('motivation')){{ $errors->first('motivation')}}@endif</span>
      </h3>
      <p>
        <textarea id='motivation' type="text" name="motivation" placeholder="200～300文字が理想">@if(session('motivation')){{session('motivation')}}@endif</textarea>
      </p>
      <h3>
        <label for='remarks'>本人希望記入欄</label>
        <span class="primary">@if($errors->has('remarks')){{ $errors->first('remarks')}}@endif</span>
      </h3>
      <p>
        <textarea id='remarks' type="text" name="remarks" placeholder="本人希望記入欄">@if(session('remarks')){{session('remarks')}}@endif</textarea>
      </p>
      <h3>
        <label>希望の業種/職種</label>
        <span class="primary">
          @if($errors->has('desirable_industry_id')){{ $errors->first('desirable_industry_id')}}
          @elseif($errors->has('desirable_occupation_id')){{ $errors->first('desirable_occupation_id')}}
          @endif
        </span>
      </h3>    
      <p>
        <select name="desirable_industry_id">  
          <option value="" selected>業種を選択してください</option>
            @foreach($industrys as $industry)
            <option value={{ $industry->id }} @if (session('desirable_industry_id') == $industry['id']) selected @endif>{{ $industry->name }}</option>
            @endforeach
          </select>
          <select name="desirable_occupation_id">  
            <option value="" selected>職種を選択してください</option>
            @foreach($occupations as $occupation)
            <option value={{ $occupation->id }} @if (session('desirable_occupation_id') == $occupation['id']) selected @endif>{{ $occupation->name }}</option>
            @endforeach
        </select>
      </p> 
      <div class="btn_area">
        <a class="btn_back" href="main">戻る</a>
        <input class="btn resume_register" type="submit" value="登録">
        <input class="btn resume_pdf" type="submit" value="プレビュー">
      </div>
    </form>
  </div>
  </section>
@endsection

