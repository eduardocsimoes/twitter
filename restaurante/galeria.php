<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'head.php';?>            
    </head>
    
    <body>        
        <div class="container"> 
            <div class="col-md-12" id="bloco1">                
                <?php include 'header.php';?>                               
                
                <div class="row">
                    <div role="main">            
                        <?php include 'nav.php';?>  
                        <div class="galeriadefotos" id="galeriadefotos">
                            <div id="bloco2">
                            <h1>Galeria de Eventos</h1>
                            <ul class="pagination pagination-lg" id="paginator_gallery">
                                
                                <?php
                                    include('./helpers/paginator_gallery.class.php'); 
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
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>
		$(document).ready(function() {

			$(".galImg").click(function() {
				var image = $(this).attr("rel");
				$('#feature').fadeOut('slow');
				$('#feature').html('<img src="' + image + '"/>');
				$('#feature').fadeIn('slow');
			});
		});
	</script>
    </body>    
</html>                        