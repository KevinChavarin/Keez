$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY>20){
            $(".barranav").addClass("sticky");
        }
        else{
            $(".barranav").removeClass("sticky");
        }
    });

    $(".menu-toggler").click(function(){
        $(this).toggleClass("active");
        $(".navbar-menu").toggleClass("active");
    });

});