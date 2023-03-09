@extends('layout.layout')
@section('title','職務経歴書作成')
@section('content')
<script src="/js/experience.js" type="text/javascript"></script>

<h2 class="create_heading">職務経歴書作成</h2>
<section>
  <div class="entry_field">
    <form method="post" action="experience_pdf" target="_blank">
      @csrf
        <h3>
          <label for='date'>日付</label>
        </h3>
        <p>
          <input id='date' type="text" name="date" placeholder="○○年○○月○○日" value="@if(session('date')){{session('date')}}@endif">
        </p>
        <h3>
          <label for='name'>氏名</label>
        </h3>
        <p>
          <input class="primary_name" id='name' type="text" name="name" placeholder="氏名" value="@if(session('name')){{session('name')}}@endif">
        </p>
        <h3>
          <label for='career'>経歴要約</label>
        </h3>
        <p>
          <textarea id='career' type="text" name="career" placeholder="100～150字程度で分かりやすくまとめる">@if(session('career')){{session('career')}}@endif</textarea>
        </p> 
        <h3>
          <label for='work_history_company1'>職務経歴</label>
        </h3>
        <div class="addition_display_area">
          <div class="required_display_area">
            <p class="subtitle">
              <label for='work_history_company1'>会社名<input class="subtitle_input1" id='work_history_company1' type="text" name="work_history_company1" placeholder="〇〇〇株式会社" value="@if(session('work_history_company1')){{session('work_history_company1')}}@endif"></label>
              <label for='work_history_period1'>期間<input class="subtitle_input2" id='work_history_period1' type="text" name="work_history_period1" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_period1')){{session('work_history_period1')}}@endif"></label>
            </p>
            <p class="subtitle"><label for='work_history_content1'>事業内容<input class="subtitle_input3" id='work_history_content1' type="text" name="work_history_content1" placeholder="製造業" value="@if(session('work_history_content1')){{session('work_history_content1')}}@endif"></label></p>
            <p class="subtitle">
              <label for='work_history_capital1'>資本金<input class="subtitle_input3" id='work_history_capital1' type="text" name="work_history_capital1" value="@if(session('work_history_capital1')){{session('work_history_capital1')}}@endif">円</label>
              <label for='work_history_employees1'>従業員数<input class="subtitle_input3" id='work_history_employees1' type="text" name="work_history_employees1" value="@if(session('work_history_employees1')){{session('work_history_employees1')}}@endif">名</label>
            </p>
            <p class="subtitle">
              <label for='work_history_business1'>プロジェクト名/業務名<input class="subtitle_input1" id='work_history_business1' type="text" name="work_history_business1" placeholder="プロジェクト名/業務名" value="@if(session('work_history_business1')){{session('work_history_business1')}}@endif"></label>
              <label for='work_history_business_period1'>期間<input class="subtitle_input2" id='work_history_business_period1' type="text" name="work_history_business_period1" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_business_period1')){{session('work_history_business_period1')}}@endif"></label>
            </p>
            <p><textarea class="subtitle_input4" type="text" name="work_history_body1" placeholder="プロジェクト内容/業務内容">@if(session('work_history_body1')){{session('work_history_body1')}}@endif</textarea></p>
            <i class="fa-solid fa-square-plus addition16">追加</i>
          </div>
          <div class='addition_display16 none'>
            <div class="addition_display_bg">
              <p class="subtitle">
                <label for='work_history_company2'>会社名</label><input class="subtitle_input1" id='work_history_company2' type="text" name="work_history_company2" placeholder="〇〇〇株式会社" value="@if(session('work_history_company2')){{session('work_history_company2')}}@endif"></label>
                <label for='work_history_period2'>期間<input class="subtitle_input2" id='work_history_period2' type="text" name="work_history_period2" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_period2')){{session('work_history_period2')}}@endif"></label>
              </p>
              <p class="subtitle"><label for='work_history_content2'>事業内容<input class="subtitle_input3" id='work_history_content2' type="text" name="work_history_content2" placeholder="製造業" value="@if(session('work_history_content2')){{session('work_history_content2')}}@endif"></label></p>
              <p class="subtitle">
                <label for='work_history_capital2'>資本金<input class="subtitle_input3" id='work_history_capital2' type="text" name="work_history_capital2" value="@if(session('work_history_capital2')){{session('work_history_capital2')}}@endif">円</label>
                <label for='work_history_employees2'>従業員数<input class="subtitle_input3" id='work_history_employees2' type="text" name="work_history_employees2" value="@if(session('work_history_employees2')){{session('work_history_employees2')}}@endif">名</label>
              </p>
              <p class="subtitle">
                <label for='work_history_business2'>プロジェクト名/業務名<input class="subtitle_input1" id='work_history_business2' type="text" name="work_history_business2" placeholder="プロジェクト名/業務名" value="@if(session('work_history_business2')){{session('work_history_business2')}}@endif"></label>
                <label for='work_history_business_period2'>期間<input class="subtitle_input2" id='work_history_business_period2' type="text" name="work_history_business_period2" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_business_period2')){{session('work_history_business_period2')}}@endif"></label>
              </p>
              <p><textarea class="subtitle_input4" id='work_history_body2' type="text" name="work_history_body2" placeholder="プロジェクト内容/業務内容">@if(session('work_history_body2')){{session('work_history_body2')}}@endif</textarea></p>
            </div>
            <i class="fa-solid fa-square-plus addition17">追加</i>
          </div>
          <div class='addition_display17 none'>
            <p class="subtitle">
              <label for='work_history_company3'>会社名</label><input class="subtitle_input1" id='work_history_company3' type="text" name="work_history_company3" placeholder="〇〇〇株式会社" value="@if(session('work_history_company3')){{session('work_history_company3')}}@endif"></label>
              <label for='work_history_period3'>期間<input class="subtitle_input2" id='work_history_period3' type="text" name="work_history_period3" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_period3')){{session('work_history_period3')}}@endif"></label>
            </p>
            <p class="subtitle"><label for='work_history_content3'>事業内容<input class="subtitle_input3" id='work_history_content3' type="text" name="work_history_content3" placeholder="製造業" value="@if(session('work_history_content3')){{session('work_history_content3')}}@endif"></label></p>
            <p class="subtitle">
              <label for='work_history_capital3'>資本金<input class="subtitle_input3" id='work_history_capital3' type="text" name="work_history_capital3" value="@if(session('work_history_capital3')){{session('work_history_capital3')}}@endif">円</label>
              <label for='work_history_employees3'>従業員数<input class="subtitle_input3" id='work_history_employees3' type="text" name="work_history_employees3" value="@if(session('work_history_employees3')){{session('work_history_employees3')}}@endif">名</label>
            </p>
            <p class="subtitle">
              <label for='work_history_business3'>プロジェクト名/業務名<input class="subtitle_input1" id='work_history_business3' type="text" name="work_history_business3" placeholder="プロジェクト名/業務名" value="@if(session('work_history_business3')){{session('work_history_business3')}}@endif"></label>
              <label for='work_history_business_period3'>期間<input class="subtitle_input2" id='work_history_business_period3' type="text" name="work_history_business_period3" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_business_period3')){{session('work_history_business_period3')}}@endif"></label>
              </p>
              <p><textarea class="subtitle_input4" id='work_history_body3' type="text" name="work_history_body3" placeholder="プロジェクト内容/業務内容">@if(session('work_history_body3')){{session('work_history_body3')}}@endif</textarea></p>
            <i class="fa-solid fa-square-plus addition18">追加</i>
          </div>
          <div class='addition_display18 none'>
            <div class="addition_display_bg">
              <p class="subtitle">
                <label for='work_history_company4'>会社名</label><input class="subtitle_input1" id='work_history_company4' type="text" name="work_history_company4" placeholder="〇〇〇株式会社" value="@if(session('work_history_company4')){{session('work_history_company4')}}@endif"></label>
                <label for='work_history_period4'>期間<input class="subtitle_input2" id='work_history_period4' type="text" name="work_history_period4" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_period4')){{session('work_history_period4')}}@endif"></label>
              </p>
              <p class="subtitle"><label for='work_history_content4'>事業内容<input class="subtitle_input3" id='work_history_content4' type="text" name="work_history_content4" placeholder="製造業" value="@if(session('work_history_content4')){{session('work_history_content4')}}@endif"></label></p>
              <p class="subtitle">
                <label for='work_history_capital4'>資本金<input class="subtitle_input3" id='work_history_capital4' type="text" name="work_history_capital4" value="@if(session('work_history_capital4')){{session('work_history_capital4')}}@endif">円</label>
                <label for='work_history_employees4'>従業員数<input class="subtitle_input3" id='work_history_employees4' type="text" name="work_history_employees4" value="@if(session('work_history_employees4')){{session('work_history_employees4')}}@endif">名</label>
              </p>
              <p class="subtitle">
                <label for='work_history_business4'>プロジェクト名/業務名<input class="subtitle_input1" id='work_history_business4' type="text" name="work_history_business4" placeholder="プロジェクト名/業務名" value="@if(session('work_history_business4')){{session('work_history_business4')}}@endif"></label>
                <label for='work_history_business_period4'>期間<input class="subtitle_input2" id='work_history_business_period4' type="text" name="work_history_business_period4" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_business_period4')){{session('work_history_business_period4')}}@endif"></label>
              </p>
              <p><textarea class="subtitle_input4" id='work_history_body4' type="text" name="work_history_body4" placeholder="プロジェクト内容/業務内容">@if(session('work_history_body4')){{session('work_history_body4')}}@endif</textarea></p>
            </div>
            <i class="fa-solid fa-square-plus addition19">追加</i>
          </div>
          <div class='addition_display19 none'>
            <p class="subtitle">
              <label for='work_history_company5'>会社名</label><input class="subtitle_input1" id='work_history_company5' type="text" name="work_history_company5" placeholder="〇〇〇株式会社" value="@if(session('work_history_company5')){{session('work_history_company5')}}@endif"></label>
              <label for='work_history_period5'>期間<input class="subtitle_input2" id='work_history_period5' type="text" name="work_history_period5" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_period5')){{session('work_history_period5')}}@endif"></label>
            </p>
            <p class="subtitle"><label for='work_history_content5'>事業内容<input class="subtitle_input3" id='work_history_content5' type="text" name="work_history_content5" placeholder="製造業" value="@if(session('work_history_content5')){{session('work_history_content5')}}@endif"></label></p>
            <p class="subtitle">
              <label for='work_history_capital5'>資本金<input class="subtitle_input3" id='work_history_capital5' type="text" name="work_history_capital5" value="@if(session('work_history_capital5')){{session('work_history_capital5')}}@endif">円</label>
              <label for='work_history_employees5'>従業員数<input class="subtitle_input3" id='work_history_employees5' type="text" name="work_history_employees5" value="@if(session('work_history_employees5')){{session('work_history_employees5')}}@endif">名</label>
            </p>
            <p class="subtitle">
              <label for='work_history_business5'>プロジェクト名/業務名<input class="subtitle_input1" id='work_history_business5' type="text" name="work_history_business5" placeholder="プロジェクト名/業務名" value="@if(session('work_history_business5')){{session('work_history_business5')}}@endif"></label>
              <label for='work_history_business_period5'>期間<input class="subtitle_input2" id='work_history_business_period5' type="text" name="work_history_business_period5" placeholder="〇〇年〇〇月～〇〇年〇〇月" value="@if(session('work_history_business_period5')){{session('work_history_business_period5')}}@endif"></label>
              </p>
              <p><textarea class="subtitle_input4" id='work_history_body5' type="text" name="work_history_body5" placeholder="プロジェクト内容/業務内容">@if(session('work_history_body5')){{session('work_history_body5')}}@endif</textarea></p>
          </div>
        </div>

        <h3>
          <label for='skill'>スキル・知識</label>
        </h3>
        <div class="placeholder_wrapper">
          <p>
            <textarea id='skill' type="text" name="skill"></textarea>
          </p>
          <div id="placeholder" class="skill_placeholder">
            <p>■PCスキル</p>
            <p>・Word 文書作成</p>
            <p>・Excel 表作成</p>
          </div>
        </div>
        <h3>
          <label for='licence'>免許・資格</label>
        </h3>
        <div class="placeholder_wrapper">
          <p>
            <textarea id='licence' type="text" name="licence"></textarea>
          </p>
          <div id="placeholder" class="licence_placeholder">
            <p>・普通自動車第一種免許(2023年 1月)</p>
            <p>・日商簿記2級(2022年 2月)</p>
          </div>
        </div>
        <h3>
          <label for='summary'>自己PR</label>
        </h3>
        <p>
          <textarea id='summary' type="text" name="summary" placeholder="300字程度(250～350字)"></textarea>
        </p>
        <div class="btn_area">
          <a class="btn_back" href="top">戻る</a>
          <input class="btn" type="submit" value="プレビュー">
      </div>
    </form>
  </div>

</section>
@endsection
