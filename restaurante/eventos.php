<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'head.php';?>
        <link rel="stylesheet" type="text/css" media="all" href="css/jquery.lightbox-0.5.css">
        <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>            
    </head>
    
    <body>        
        <div class="container"> 
            <div class="col-md-10" id="bloco1">                
                <?php include 'header.php';?>                               
                
                <div class="row">
                    <div role="main" id="main">            
                        <?php include 'nav.php';?>  
                        <div class="galeriadefotos" id="galeriadefotos">
                            <div id="bloco2">
                            <h1>Galeria de Eventos</h1>
                            <ul class="pagination pagination-sm" id="paginator_gallery">
                                
                                <?php
                                    include('./helpers/gallery.class.php'); 
                                    $pages = new Custom\Gallery();
                                    echo $pages->pagination(); 
                                ?>
                            </ul>  
                            </div>
                            <ul id="gallery">
                                <?php                                    
                                    echo $pages->display();
                                ?>
                            </ul>                                                                                  
                        </div>
                    </div>     
                </div>
                    
                <?php include 'footer.php'; ?>    
            </div>    
        </div>  
    </body>    
</html>                        