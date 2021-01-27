<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Estou trabalhando em algo legal, em breve irei subir ;)-->
    <div class="container">
    <h2>Qual tipo de relatório você deseja?</h2>
    <button type="button" class="btn btn-primary btn-block"  onclick="window.location.href = '../controllers/excel.php'">Gerar Excel</button>
    <button type="button" class="btn btn-default btn-block"  onclick="window.location.href = '../controllers/createPDF.php'">Gerar PDF</button>

</body>
</html>

