

$(document).ready(function() {

    $('.sign_up').click(function(){

        $('#signModal').modal('hide');

        $('#myModal').modal('hide');

        $('#myModaluser').modal('show');

    });

    $('.sign_in').click(function(){

        $('#myModal').modal('hide');

        $('#myModaluser').modal('hide');

        $('#signModal').modal('show')

    });



    $("#owl-demo").owlCarousel({
//                autoPlay : 10000,
        navigation : true, // Show next and prev buttons
        slideSpeed : 900,
        paginationSpeed : 900,
        singleItem:true

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

    $("#owl-demo1").owlCarousel({
//                autoPlay : 10000,
        navigation : true, // Show next and prev buttons
        slideSpeed : 900,
        paginationSpeed : 900,
        singleItem:true

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });


    menuToggle();

    $(window).resize(function(){
        menuToggle();
    });

    if($(window).width() <= 768){
        $('.has-dropdown').toggleClass('menu_show');

    }else{

    }


    function menuToggle(){
        if($(window).width() <= 768){
            $('.has-dropdown').addClass('menu_show');

        }else{
            $('.has-dropdown').removeClass('menu_show');

        }
    }

    $(document).on('click','.has-dropdown.menu_show',function(){
        $(this).find('ul').slideToggle();
    })







});