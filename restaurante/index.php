<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'head.php';?>
    </head>
    <body>        
        <div class="container"> 
            <div class="col-md-10" id="bloco1">                
                <?php include 'header.php';?>

                <div class="row" id="main">
                    <?php include 'nav.php';?>
                    
                    <section id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol style="list-style-type:square" class="carousel-indicators" id="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <figure class="active item">
                                <img id="img1" src="img/Principal/Self1.jpg" alt="imagem 1" width="635" height="530">
                            </figure>
                            <figure class="item">
                                <img id="img2" src="img/Principal/Self2.jpg" alt="imagem 2" width="635" height="530">
                            </figure>                            
                            <figure class="item">
                                <img id="img3" src="img/Principal/Self3.jpg" alt="imagem 3" width="635" height="530">
                            </figure>
                            <figure class="item">
                                <img id="img4" src="img/Principal/Self4.png" alt="imagem 4" width="635" height="530">
                            </figure>                            
                        </div>  
                    </section>

                    <div class="transbox">
                        <div id="transbox-hora">
                            <h4>Funcionamento</h4>
                            <p>Almoço</p>
                            <p>Dias: Segunda à Sexta-Feira</p>
                            <p>(*Exceto Feriados)</p>
                            <p>Horario: 11:00hs às 14:30hs</p>
                        </div>
                        <div id="transbox-end">
                            <h4>Vila Velha</h4>
                            <p>Rua Buenos Aires, 1021</p>
                            <p>Araçás</p>
                            <p>Espírito Santo</p>
                            <p>Cep: 29103-010</p>
                        </div>
                        <div id="transbox-icons">
                            <div id="maps">
                                <img src="img/Auxiliares/Google-Maps1.ico" alt="Como Chegar?" title="Como Chegar?">
                            </div>                                
                            <div id="facebook">
                                <img src="img/Auxiliares/Facebook3.png" alt="Curta a Nossa Página no Face" title="Curta a Nossa Página no Face">
                            </div>
                            <div id="apae">
                                <img src="img/Auxiliares/apae1.jpg" alt="Conheça a APAE" title="Conheça a APAE">
                            </div>                                               
                        </div>
                    </div>
                </div>  
            
                <?php include 'footer.php'; ?>              
            </div>    
        </div>  

        <script type="text/javascript">
            $('.carousel').carousel({
                interval: 5000;
            })
        </script>
    </body>    
</html>

