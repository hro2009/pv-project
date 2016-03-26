
$(function(){

    $('#username_unique').blur(function(){
        var username=$(this).val();

        $('.glyphicon').removeClass('glyphicon-remove ');
        $('.glyphicon').removeClass('glyphicon-ok ');



        if(username != ""){
            $.post('username_unique',{username:username},function(response){

                if(response == true){
                    $('.glyphicon').removeClass('glyphicon-remove ');
                    $('.glyphicon').addClass('glyphicon-ok');


                    $('#send_sumbmit').prop('disabled',false);
                }else{
                    $('.glyphicon').removeClass('glyphicon-ok');
                    $('.glyphicon').addClass('glyphicon-remove');


                    $('#send_sumbmit').prop('disabled',true );
                }

            },'json').done(function(){

            })
        }
    });


});
