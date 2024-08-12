<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitadores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Facilitadores SaveInCloud</h1>
    </header>
    <section>        
        <form action="statusapi/statusapi.html" method="get">
            <input type="submit" value="Atualizar status API">            
        </form>
        <form action="moverip/mover.html" method="get">
            <input type="submit" value="Transferencia de IP Público">
        </form>
        <form action="emailhospedagem/email.html" method="get">
            <input type="submit" value="Mensagem de email">
        </form>
    </section>
</body>
</html>