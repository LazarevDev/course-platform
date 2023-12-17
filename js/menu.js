$(document).ready(function(){
    $('.headerBurger').click(function(event){
        $('.headerBurger,.headerMenu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

$(document).ready(function(){
    $('.headerLink').click(function(event){
        $('.headerBurger,.headerMenu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});


// При прокручивании добавляем цвет для header

var scrolled;
window.onscroll = function() {
    scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if(scrolled > 70){
        $(".header").css({"background": "#fff", "transition": "0.4s"})
    }
    if(70 > scrolled){
        $(".header").css({"background": "none", "transition": "0.4s"})         
    }

}