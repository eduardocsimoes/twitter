$(document).ready(function(){    
    var menuAtivo = $('.top .active').attr('id');

    $('.top li a').click(function(){
                
        var menuClicado = $(this).attr('id');
        var menuAnterior = $('.top .active').attr('id');
        var alturaFim = 800;
        var alturaInicio = 0;
        var tempoMenu = 700;
        
        $(".top li a").removeClass("active");
        $(this).addClass("active");                                    
        
        if((menuAnterior === 'hntm1') && (menuClicado !== 'hntm1')){           
            $('.modalhome').animate({top: alturaFim},tempoMenu);            
        }        
        else if((menuAnterior === 'hntm2') && (menuClicado !== 'hntm2')){
            $('.modalteste').animate({top: alturaFim},tempoMenu);  
        }        
        else if((menuAnterior === 'hntm3') && (menuClicado !== 'hntm3')){
            $('.modalteste').animate({top: alturaFim},tempoMenu);  
        }        
        else if((menuAnterior === 'hntm4') && (menuClicado !== 'hntm4')){
            $('.modalteste').animate({top: alturaFim},tempoMenu);  
        }            
        else if((menuAnterior === 'hntm5') && (menuClicado !== 'hntm5')){
            $('.modalwhois').animate({top: alturaFim},tempoMenu);  
        }
        else if((menuAnterior === 'hntm6') && (menuClicado !== 'hntm6')){
            $('.modalcontact').animate({top: alturaFim},tempoMenu);  
        }
                
        if((menuClicado === 'hntm1') && (menuAnterior !== 'hntm1')){
            $('.modalhome').animate({top: alturaInicio},tempoMenu); 
        }        
        else if((menuClicado === 'hntm2') && (menuAnterior !== 'hntm2')){
            $('.modalteste').animate({top: alturaInicio},tempoMenu);
        }        
        else if((menuClicado === 'hntm3') && (menuAnterior !== 'hntm3')){
            $('.modalteste').animate({top: alturaInicio},tempoMenu);
        }        
        else if((menuClicado === 'hntm4') && (menuAnterior !== 'hntm4')){
            $('.modalteste').animate({top: alturaInicio},tempoMenu);
        }            
        else if((menuClicado === 'hntm5') && (menuAnterior !== 'hntm5')){
            $('.modalwhois').animate({top: alturaInicio},tempoMenu);
        }
        else if((menuClicado === 'hntm6') && (menuAnterior !== 'hntm6')){
            $('.modalcontact').animate({top: alturaInicio},tempoMenu);
        }
    });
    
    $('.img1').click(function(){                
        //$(this).css({"width": "300px", "height": "300px"});  
        //$( ".img1" ).animate({ "top": "+=50px" }, "slow" ); 
        $(this).css({"left": "550px"});  
    });
    
    $('img').mouseleave(function(){        
        $(this).css({"width": "100px", "height": "100px"});
    });           
});
