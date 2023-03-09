$(function () {
    // let likeListId; //変数を宣言（なんでここで？）
    $('.like-toggle').on('click', function () { //onはイベントハンドラー
      let $this = $(this); //this=イベントの発火した要素＝iタグを代入
      likeListId = $this.data('list-id'); //iタグに仕込んだdata-list-idの値を取得

      $.ajax({
        headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
        url: '/like', //通信先アドレスで、このURLをあとでルートで設定します
        // type: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
        method: 'POST',
        dataType:'json',
        data: { //サーバーに送信するデータ
          'list_id': likeListId //いいねされた投稿のidを送る
        },
      })

      //通信成功した時の処理
      .done(function (data) {
        $('.like').toggleClass('liked'); //likedクラスのON/OFF切り替え。
        $classname = "like_chek" .concat(data.list_id);
        $('.'+$classname).next('.like-counter').html(data.list_likes_count);
      })
        //通信失敗した時の処理
        .fail(function () {
            console.log('fail'); 
        });
    });
});

$(function () {
  $(".menu").click(function() {
    $('.nav-02').toggleClass('nav-02-active');
  });
});