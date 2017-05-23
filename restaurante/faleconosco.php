<?php
    $msg = '';
    if(isset($_REQUEST['msg'])){
        $msg = $_REQUEST['msg'];
    }      
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'head.php';?>
    </head>
    
    <body>        
        <div class="container"> 
            <div class="col-md-10" id="bloco1">                
                <?php include 'header.php';?>                               
                
                <div class="row">
                    <div role="main" id="main">            
                        <?php include 'nav.php';?>                    
                        <div class="faleconoscomain" id="faleconoscomain">
                            <h2 class="text-center"><strong>Fale Conosco:</strong></h2>
                            <div class="formulariofaleconosco" id="formulariofaleconosco">                                
                                <form action="formulario.php" action="get" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="inputNome">Nome</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control input" id="inputNome" name="inputNome" placeholder="Primeiro Nome" required="required">
                                        </div><span id="campoobrigatorio">(*) campo obrigatório</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="inputsobrenome">Sobrenome</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input" id="inputSobrenome" name="inputSobrenome" placeholder="Sobrenome" required="required">
                                        </div><span id="campoobrigatorio">(*) campo obrigatório</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control input" id="inputEmail" name="inputEmail" placeholder="E-mail" required="required">
                                        </div><span id="campoobrigatorio">(*) campo obrigatório</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="selecaoAssunto">Assunto</label>
                                        <div class="col-md-6">
                                            <select class="form-control input" row="5" id="selecaoform" name="selecaoform">
                                                <option value="Críticas e Sugestões">Críticas e Sugestões</option>
                                                <option value="Restaurante">Restaurante</option>
                                                <option value="Cerimonial">Cerimonial</option>
                                                <option value="Trabalhe Conosco">Trabalhe Conosco</option>
                                                <option value="Outros Assuntos">Outros Assuntos</option>
                                            </select>                                           
                                        </div><span> 
                                    </div>                                  
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="textarea">Descrição</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control input" row="10" id="textarea" name="textarea" placeholder="Escreva aqui." required="required"></textarea>
                                        </div><span id="campoobrigatorio">(*) campo obrigatório</span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn" id="btnformulario">Enviar Formulário</button>
                                        <?php if($msg=='enviada'){
                                                echo '<div class="alert alert-success" id="alerta1" >';
                                                echo '  <strong>Mensagem enviada com sucesso!</strong>';
                                                echo '</div>';                                            
                                              }                                                                                          
                                        ?>                                            
                                    </div>
                                </form>
                            </div>                 
                        </div>    
                    </div>     
                </div>
                    
                <?php include 'footer.php'; ?>    
            </div>    
        </div>  
    </body>    
</html>  