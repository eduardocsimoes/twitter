<html>
    <head>
        <title>Titulo do Site</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css" />
    </head>
    
    <body>
        <h1>Topo do Site</h1>
        
        <?php $this->loadViewInTemplate($viewName, $viewData) ?>
        
        <h6>Rodape do Site</h6>
    </body>
</html>

