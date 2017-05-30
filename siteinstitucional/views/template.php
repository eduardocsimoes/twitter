<html>
    <head>
        <title>Site Institucional</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css" />
    </head>
    
    <body>
        <div class='topo'>
            <div class="topo1"></div>
            <div class="banner"></div>
	</div>

        <div class='menu'>
            <ul>
                <a href="/"><li>HOME</li></a>
                <a href="/portifolio"><li>PORTIFOLIO</li></a>
                <a href="/sobre"><li>SOBRE</li></a>
                <a href="/servico"><li>SERVIÇO</li></a>
                <a href="/contato"><li>CONTATO</li></a>
            </ul>
	</div>        
		
        <div class='conteiner'>
            <?php $this->loadViewInTemplate($viewName, $viewData) ?>
	</div>		
        
        <div class='rodape'>
		
	</div>    
    </body>
</html>

