$(function(){
    // プレースホルダーの改行
    // 職務経歴書
    // スキル・知識
    $('#skill').on('keyup change', function(){
        if ($('#skill').val() === '') {
            $(".skill_placeholder").removeClass('none');
        } else {
            $(".skill_placeholder").addClass('none');
        }
    });
    // 免許・資格
    $('#licence').on('keyup change', function(){
        if ($('#licence').val() === '') {
            $(".licence_placeholder").removeClass('none');
        } else {
            $(".licence_placeholder").addClass('none');
        }
    });

    // 追加ボタン
    // 職務経歴書
    // 職歴追加
    $('.addition16').on('click', function(){
        $('.addition_display16').toggleClass('none');
    });
    $('.addition17').on('click', function(){
        $('.addition_display17').toggleClass('none');
    });
    $('.addition18').on('click', function(){
        $('.addition_display18').toggleClass('none');
    });
    $('.addition19').on('click', function(){
        $('.addition_display19').toggleClass('none');
    });

    function experience_load(){
        // 再読み込み時のプレースホルダーの表示設定
        // 職務経歴書
        // スキル・知識
        if ($('#skill').val().length !== 0) {
            $(".skill_placeholder").addClass('none');
        }
        // 免許・資格
        if ($('#licence').val().length !== 0) {
            $(".licence_placeholder").addClass('none');
        }

        // 職歴
        if ($('#work_history_company2').val().length !== 0 ||
            $('#work_history_period2').val().length !== 0 ||
            $('#work_history_content2').val().length !== 0 ||
            $('#work_history_capital2').val().length !== 0 ||
            $('#work_history_employees2').val().length !== 0 ||
            $('#work_history_business2').val().length !== 0 ||
            $('#work_history_business_period2').val().length !== 0 ||
            $('#work_history_body2').val().length !== 0) 
        {
            $('.addition_display16').removeClass('none');
        }
        if ($('#work_history_company3').val().length !== 0 ||
            $('#work_history_period3').val().length !== 0 ||
            $('#work_history_content3').val().length !== 0 ||
            $('#work_history_capital3').val().length !== 0 ||
            $('#work_history_employees3').val().length !== 0 ||
            $('#work_history_business3').val().length !== 0 ||
            $('#work_history_business_period3').val().length !== 0 ||
            $('#work_history_body3').val().length !== 0)
        {
            $('.addition_display17').removeClass('none');
        }
        if ($('#work_history_company4').val().length !== 0 ||
            $('#work_history_period4').val().length !== 0 ||
            $('#work_history_content4').val().length !== 0 ||
            $('#work_history_capital4').val().length !== 0 ||
            $('#work_history_employees4').val().length !== 0 ||
            $('#work_history_business4').val().length !== 0 ||
            $('#work_history_business_period4').val().length !== 0 ||
            $('#work_history_body4').val().length !== 0) 
        {
            $('.addition_display18').removeClass('none');
        }
        if ($('#work_history_company5').val().length !== 0 ||
            $('#work_history_period5').val().length !== 0 ||
            $('#work_history_content5').val().length !== 0 ||
            $('#work_history_capital5').val().length !== 0 ||
            $('#work_history_employees5').val().length !== 0 ||
            $('#work_history_business5').val().length !== 0 ||
            $('#work_history_business_period5').val().length !== 0 ||
            $('#work_history_body5').val().length !== 0) 
        {
            $('.addition_display19').removeClass('none');
        }

    }
    window.onload = experience_load;

});


$(function () {
    $('.experience_pdf').on('click', function(){
        window.open("about:blank","preview","width=800,height=450,scrollbars=yes");
        document.input_form.target = "preview";
        document.input_form.action = "experience_pdf";
        document.input_form.submit();
        return false;
    });

    $('.experience_register').on('click', function(){
        document.input_form.target = "";
        document.input_form.action = "experience_register";
        document.input_form.submit();
        return false;
    });
    $('.experience_update').on('click', function(){
        document.input_form.target = "";
        document.input_form.action = "experience_update";
        document.input_form.submit();
        return false;
    });
});