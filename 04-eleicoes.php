<!DOCTYPE html>
<html lang="pt">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $ano = $_GET["an"];
        $idade = 2023 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.<br/>";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
        echo "E dessa forma seu voto e $tipo";
    ?>
</div>
</body>
</html>
 