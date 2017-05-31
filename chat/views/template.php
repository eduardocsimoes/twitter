<html>
    <head>
        <title>CHAT</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css" />
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
    </head>
    
    <body>
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
    </body>
</html>

