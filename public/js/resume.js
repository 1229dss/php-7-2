$(function(){
    // 追加ボタン
    // 履歴書
    // 住所追加
    $('.addition').on('click', function(){
        $('.addition_display').toggleClass('none');
        
    });
    // 学歴追加
    $('.addition1').on('click', function(){
        $('.addition_display1').toggleClass('none');
    });
    $('.addition2').on('click', function(){
        $('.addition_display2').toggleClass('none'); 
    });
    $('.addition3').on('click', function(){
        $('.addition_display3').toggleClass('none');
    });

    // 職歴追加
    $('.addition5').on('click', function(){
        $('.addition_display5').toggleClass('none');
    });
    $('.addition6').on('click', function(){
        $('.addition_display6').toggleClass('none'); 
    });
    $('.addition7').on('click', function(){
        $('.addition_display7').toggleClass('none');
    });
    $('.addition8').on('click', function(){
        $('.addition_display8').toggleClass('none');
    });

    // 免許追加
    $('.addition11').on('click', function(){
        $('.addition_display11').toggleClass('none');
    });
    $('.addition12').on('click', function(){
        $('.addition_display12').toggleClass('none');
    });
    $('.addition13').on('click', function(){
        $('.addition_display13').toggleClass('none');
    });
    $('.addition14').on('click', function(){
        $('.addition_display14').toggleClass('none');
    });
    $('.addition15').on('click', function(){
        $('.addition_display15').toggleClass('none');
    });
    
    function resume_load(){
        // 文字がある時追加の内容を表示
        // 郵便番号等
        if ($('#post_code_spare').val().length !== 0 ||
            $('#address_spare').val().length !== 0 ||
            $('#kana_address_spare').val().length !== 0 ||
            $('#tel_spare').val().length !== 0 ||
            $('#email_spare').val().length !== 0) 
        {
            $('.addition_display').removeClass('none');
        }
        // 学歴
        if ($('#educational_background_year3').val().length !== 0 ||
            $('#educational_background_month3').val().length !== 0 ||
            $('#educational_background_body3').val().length !== 0 ||
            $('#educational_background_year4').val().length !== 0 ||
            $('#educational_background_month4').val().length !== 0 ||
            $('#educational_background_body4').val().length !== 0)
        {
            $('.addition_display1').removeClass('none');
        }
        if ($('#educational_background_year5').val().length !== 0 ||
            $('#educational_background_month5').val().length !== 0 ||
            $('#educational_background_body5').val().length !== 0 ||
            $('#educational_background_year6').val().length !== 0 ||
            $('#educational_background_month6').val().length !== 0 ||
            $('#educational_background_body6').val().length !== 0) 
        {
            $('.addition_display2').removeClass('none');
        }
        if ($('#educational_background_year7').val().length !== 0 ||
            $('#educational_background_month7').val().length !== 0 ||
            $('#educational_background_body7').val().length !== 0 ||
            $('#educational_background_year8').val().length !== 0 ||
            $('#educational_background_month8').val().length !== 0 ||
            $('#educational_background_body8').val().length !== 0) 
        {
            $('.addition_display3').removeClass('none');
        }

        // 職歴
        if ($('#work_history_year3').val().length !== 0 ||
            $('#work_history_month3').val().length !== 0 ||
            $('#work_history_body3').val().length !== 0 ||
            $('#work_history_year4').val().length !== 0 ||
            $('#work_history_month4').val().length !== 0 ||
            $('#work_history_body4').val().length !== 0)
        {
            $('.addition_display5').removeClass('none');
        }
        if ($('#work_history_year5').val().length !== 0 ||
            $('#work_history_month5').val().length !== 0 ||
            $('#work_history_body5').val().length !== 0 ||
            $('#work_history_year6').val().length !== 0 ||
            $('#work_history_month6').val().length !== 0 ||
            $('#work_history_body6').val().length !== 0) 
        {
            $('.addition_display6').removeClass('none');
        }
        if ($('#work_history_year7').val().length !== 0 ||
            $('#work_history_month7').val().length !== 0 ||
            $('#work_history_body7').val().length !== 0 ||
            $('#work_history_year8').val().length !== 0 ||
            $('#work_history_month8').val().length !== 0 ||
            $('#work_history_body8').val().length !== 0)
        {
            $('.addition_display7').removeClass('none');
        }
        if ($('#work_history_year9').val().length !== 0 ||
            $('#work_history_month9').val().length !== 0 ||
            $('#work_history_body9').val().length !== 0 ||
            $('#work_history_year10').val().length !== 0 ||
            $('#work_history_month10').val().length !== 0 ||
            $('#work_history_body10').val().length !== 0)
        {
            $('.addition_display8').removeClass('none');
        }

        // 免許
        if ($('#licence_year2').val().length !== 0 ||
            $('#licence_month2').val().length !== 0 ||
            $('#licence_body2').val().length !== 0) 
        {
            $('.addition_display11').removeClass('none');
        }
        if ($('#licence_year3').val().length !== 0 ||
            $('#licence_month3').val().length !== 0 ||
            $('#licence_body3').val().length !== 0) 
        {
            $('.addition_display12').removeClass('none');
        }
        if ($('#licence_year4').val().length !== 0 ||
            $('#licence_month4').val().length !== 0 ||
            $('#licence_body4').val().length !== 0) 
        {
            $('.addition_display13').removeClass('none');
        }
        if ($('#licence_year5').val().length !== 0 ||
            $('#licence_month5').val().length !== 0 ||
            $('#licence_body5').val().length !== 0) 
        {
            $('.addition_display14').removeClass('none');
        }
        if ($('#licence_year6').val().length !== 0 ||
            $('#licence_month6').val().length !== 0 ||
            $('#licence_body6').val().length !== 0) 
        {
            $('.addition_display15').removeClass('none');
        }
    }
    window.onload = resume_load;
});



$(function () {
    $('.resume_pdf').on('click', function(){
        window.open("about:blank","preview","width=800,height=450,scrollbars=yes");
        document.input_form.target = "preview";
        document.input_form.action = "resume_pdf";
        document.input_form.submit();
        return false;
    });

    $('.resume_register').on('click', function(){
        document.input_form.target = "";
        document.input_form.action = "resume_register";
        document.input_form.submit();
        return false;
    });
    $('.resume_update').on('click', function(){
        document.input_form.target = "";
        document.input_form.action = "resume_update";
        document.input_form.submit();
        return false;
    });
});