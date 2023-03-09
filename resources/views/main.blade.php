@extends('layout.layout_login')
@section('title','メインページ')
@section('content')
<section>
  <h1>書類一覧</h1>
  <div class="create_area">
    <div class="document">
      <a href="resume_create_login"><img class="document_img" src="/img/resume.png"></a>
      <a class="document_text" href="resume_create_login">履歴書作成</a>
    </div>
    <div class="document">
      <a href="experience_create_login"><img class="document_img" src="./img/experience.png"></a>
      <a class="document_text" href="experience_create_login">職務経歴書作成</a>
    </div>
  </div>
  @if (session('notice_msg'))
    <?php
    $alert = "<script type='text/javascript'>alert('". session('notice_msg'). "');</script>";
    echo $alert;
    ?>
  @endif
  <h2 class="resume_heading">履歴書</h2>
  <div class="table_area">
    <table>
      <thead>
        <tr>
          <th>公開中</th>
          <th>タイトル</th>
          <th class="responsive_none">更新日時</th>
          <th class="responsive_none">作成日時</th>
          <th>公開するものの変更</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      @if(empty($resume_msg))
        @foreach($resumes as $resume)
        <tr>
          <td>
            @foreach($lists as $list)
              @if($list['resume_id'] == $resume['id'])
              <i class="fa-sharp fa-solid fa-circle-check"></i>
              @endif
            @endforeach          
          </td>
          <td>{{$resume->title}}</td>
          <td class="responsive_none">{{$resume->updated_at}}</td>
          <td class="responsive_none">{{$resume->created_at}}</td>
          <td><a href="list_resume_change{{ $resume->id }}" onclick="return confirm('変更しますか？')">これにする</a></td>
          <td><a href="resume_edit{{ $resume->id }}">編集</a></td>
          <td><a href="resume_delete{{ $resume->id }}" onclick="return confirm('本当に削除しますか？')">削除</a></td>
        </tr>
        @endforeach
      @endif
      </tbody>
    </table>
    <div class="main_page_link">{{ $resumes->links() }}</div>

</div>

    <h2 class="experience_heading">職務経歴書</h2>
    <div class="table_area">

      <table>
        <thead>
          <tr>
            <th>公開中</th>
            <th>タイトル</th>
            <th class="responsive_none">更新日時</th>
            <th class="responsive_none">作成日時</th>
            <th>公開するものの変更</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @if(empty($experience_msg))
          @foreach($experiences as $experience)
          <tr>
            <td>
              @foreach($lists as $list)
                @if($list['experience_id'] == $experience['id'])
                <i class="fa-sharp fa-solid fa-circle-check"></i>
                @endif
              @endforeach          
            </td>
            <td>{{$experience->title}}</td>
            <td class="responsive_none">{{$experience->updated_at}}</td>
            <td class="responsive_none">{{$experience->created_at}}</td>
            <td><a href="list_experience_change{{ $experience->id }}" onclick="return confirm('変更しますか？')">これにする</a></td>
            <td><a href="experience_edit{{ $experience->id }}">編集</a></td>
            <td><a href="experience_delete{{ $experience->id }}" onclick="return confirm('本当に削除しますか？')">削除</a></td>
          </tr>
          @endforeach
        @endif
        </tbody>
      </table>
      <div class="main_page_link">{{ $experiences->links() }}</div>
    </div>
</section>
@endsection