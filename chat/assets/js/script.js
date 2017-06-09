function abrirChat(){
    window.open("http://localhost:8080/chat/chat","chatWindow","width='400',height='200'");
}

function iniciarSuporte(){
    setTimeout(getChamado, 1000);
}

function getChamado(){
    $.ajax({
       url: 'http://localhost:8080/chat/ajax/getChamado',
       dataType: 'json',
       success: function(json){
           
           resetChamados();
           
           if(json.chamados.length > 0){
               for(var i in json.chamados){
                   if(json.chamados[i].status == '1'){
                        $('#areadechamados').append("<tr class='chamado' data-id='"+json.chamados[i].id+"'><td>"+json.chamados[i].data_inicio+"</td><td>"+json.chamados[i].nome+"</td><td><button class='disabled'>Em Atendimento</button></td></tr>");    
                   }else{
                        $('#areadechamados').append("<tr class='chamado' data-id='"+json.chamados[i].id+"'><td>"+json.chamados[i].data_inicio+"</td><td>"+json.chamados[i].nome+"</td><td><button onclick='abrirChamado(this)'>Abrir Chamado</button></td></tr>");
                    }
               }
           }
           
           setTimeout(getChamado, 2000);
       },
       error: function(){
           setTimeout(getChamado, 2000);
       }
    });
}

function resetChamados(){
    $('.chamado').remove();
}

function abrirChamado(obj){
    var id = $(obj).closest('.chamado').attr('data-id');
    window.open('http://localhost:8080/chat/chat?id='+id, 'chatWindow', 'width=400,height=400');
}

function keyUpChat(obj, event){
    if(event.keyCode == 13){
        var msg = obj.value;
        obj.value = '';
        
        var dt = new Date();
        var hr = dt.getHours()+':'+dt.getMinutes();
        var nome = $('.inputarea').attr('data-nome');
        
        $('.chatarea').append('<div class="msgitem">'+hr+' <strong>'+nome+'</strong>:    '+msg+'</div>');
        
        $.ajax({
           url: 'http://localhost:8080/chat/ajax/sendMessage',
           type: 'POST',
           data: {msg:msg}
        });
    }
}
