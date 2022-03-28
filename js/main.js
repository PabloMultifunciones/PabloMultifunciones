AOS.init();
$(document).ready(() => {
    if($(document).width() < 974){
        $('#banner-imagen').css("display", "none");
        $('#banner-secundario-3').css("display", "none");
    }else{
        $('#contactame').css("margin-top","8vw");
    }

    $(window).resize(function() {
        if($(document).width() <= 974){
            $('#banner-imagen').css("display", "none");
            $('#banner-secundario-3').css("display", "none");
            $('#contactame').css("margin-top", "0vw");
        }else if($(document).width() > 974){
            $('#banner-imagen').css("display", "block");
            $('#banner-secundario-3').css("display", "block");
            $('#contactame').css("margin-top", "8vw");
        }
    });

    $('#button-enviar').click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
            }
        }); 


        var form = $(this).parents("#formulario");
        var check = checkCampos(form);
        if(check){
            $.ajax({
                url : 'send',
            
                data : { nombre : $('#input-nombre').val() , email : $('#input-email').val() , asunto: $('#input-asunto').val()},
            
                type : 'POST',
            
                dataType : 'json',
            
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
        
            });

            $('#formulario').css('display','none');
            $('#contactame').css('background-color', '#F2F2F2');
            $('#message').css("display","block");
        }
    });


    function checkCampos(obj) {
        var camposRellenados = true;
        obj.find("input").each(function() {
        var $this = $(this);
            if( $this.val().length <= 0 ) {
                camposRellenados = false;
                return false;
            }
        });
        if(camposRellenados == false) {
            return false;
        }
        else {
            return true;
        }
    }
});