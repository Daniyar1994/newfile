$(document).ready(function (){

    $("#portfolio-show-all").click(function(e) {
        e.preventDefault();
        $((this)).addClass("hide-btn");
        $(".site-create-blocks__hiden-block").addClass("show-block");
    })
    $('.burger').click(function() {
        if(!$('.burger').hasClass('cross'))
            $('.burger').addClass('cross');
        else
            $('.burger').removeClass('cross');
    });
    $(".burger").click(function() {
        $(".header .header__site-navigation").toggleClass("show-burger-menu");
    })

    // $('.review__img img').on('click', function(e) {
    //     let src = e.currentTarget.getAttribute('src');
    //     $(".reviews .full-screen-doc .full-screen-dec-img").html("");
    //     $(".reviews .full-screen-doc .full-screen-dec-img").html("<img src='"+src+"'>");
    //     $(".reviews .full-screen-doc").addClass("show-block");
    // });
    // $(".reviews .full-screen-doc .close-icon").click(function() {
    //     $(".reviews .full-screen-doc").removeClass("show-block");
    // })
    // $("#number, #client-phone, #site-contacts-backcall-phon").mask("+9-(999)-999-99-99");

    // let code = document.querySelector('#code1');
    // document.querySelector('.submit-btn').onclick = function(){
    //     code.value = 'NOSPAM';
    // };

    // let code2 = document.querySelector('#code2');
    // document.querySelector('.submit-btn2').onclick = function(){
    //     code2.value = 'NOSPAM';
    // };
});