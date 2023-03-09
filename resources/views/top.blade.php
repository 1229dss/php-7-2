@extends('layout.layout')
@section('title','トップページ')
@section('content')
<section>
  @if (session('notice_msg'))
    <?php
    $alert = "<script type='text/javascript'>alert('". session('notice_msg'). "');</script>";
    echo $alert;
    ?>
  @endif
  <div class="document_area">
    <div class="document">
      <a href="resume_create"><img class="document_img" src="/img/resume.png"></a>
      <a class="document_text" href="resume_create">履歴書作成</a>
    </div>
    <div class="document">
      <a href="experience_create"><img class="document_img" src="./img/experience.png"></a>
      <a class="document_text" href="experience_create">職務経歴書作成</a>
    </div>
  </div>

  <div class="text_bg">
    <div class="text">
      <p>ログインすると…</p>
      <ul>
        <li>・履歴書、職務経歴書を自動保存</li>
        <li>・履歴書の志望動機欄、職務経歴書の自己PR欄は匿名で自動公開</li>
        <li>・公開する志望動機、自己PRは後から変更可能</li>
        <li>・他会員の志望動機、自己PRの閲覧が可能</li>
        <li><small>※ログインしなくても履歴書、職務経歴書の作成、PDF出力は可能です。</small></li>
      </ul>
    </div>
  </div>
</section>
@endsection

