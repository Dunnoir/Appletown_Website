$(function(){
    $(".list-group-item").click(function(){
        $(".list-group-item").removeClass("active clicked");
        $(this).toggleClass("active clicked");
    })
    $(".list-group-item").mouseenter(function(){
        $(this).addClass("active");
        $(this).css("cursor","pointer");
    })
    $(".list-group-item").mouseleave(function(){
        if (!$(this).hasClass("clicked")){
            $(this).removeClass("active");
        }
    })
})