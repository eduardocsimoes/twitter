<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Stored Procedures</title>
    </head>
    <body>
        <?php
        require('./_app/Config.inc.php');
        $Conn = new Conn1;

        try {
            $Query = "SELECT * FROM ws_siteviews_agent WHERE agent_name = :name";
            $Exe = $Conn->getConn()->prepare($Query);

            $Exe->bindValue(":name", 'Chrome');
            $Exe->execute();

            $Chrome = $Exe->fetch(PDO::FETCH_ASSOC);

            $Exe->bindValue(":name", 'Firefox');
            $Exe->execute();

            $Firefox = $Exe->fetch(PDO::FETCH_ASSOC);

            //
        } catch (PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
        }

        if ($Chrome):
            //var_dump($Chrome);
            echo "{$Chrome['agent_name']} tem {$Chrome['agent_views']} visita(s)<hr>";
        endif;

        if ($Firefox):
            //var_dump($Safari);
            echo "{$Firefox['agent_name']} tem {$Firefox['agent_views']} visita(s)<hr>";
        endif;
        ?>
    </body>
</html>
