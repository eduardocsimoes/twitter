<?php
ob_start();
require('./_app/Config.inc.php');
?>

<!DOCTYPE Html>
<html lang="pt-br">
    <?php
        require(REQUIRE_PATH . '/inc/head.inc.php');
    ?>   
    
    <body>
        <?php
            require(REQUIRE_PATH . '/inc/header.inc.php');
        ?>
        
        <div>
        <? echo INCLUDE_PATH; ?><br />
        <? echo REQUIRE_PATH; ?><br />
        <? echo HOME; ?><br />
        <? echo THEME; ?><br />
        </div>

        <?php
            require(REQUIRE_PATH . '/home.php');
        ?>

        <?php
            require(REQUIRE_PATH . '/modalteste.php');
        ?>        
        
        <?php
            require(REQUIRE_PATH . '/whois.php');
        ?>

        <?php
            require(REQUIRE_PATH . '/contact.php');
        ?>
        
        <?php
            require(REQUIRE_PATH . '/inc/footer.inc.php');
        ?>             
    </body>
</html>

<?php
ob_end_flush();