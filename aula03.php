<!DOCTYPE html>
<?php
    include_once './webcomplemento.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <h1>Imagem com cantos arredondados, class rounded</h1>
            <img src="imagem1.jpg" class="rounded" width="300">
            
            <h1>Imagem como um círculo, class rounded-circle</h1>
            <img src="imagem2.jpg" class="rounded-circle" width="300">
            
            <h1>Imagem para miniatura com borda, class img-thumbnail</h1>
            <img src="imagem3.jpg" class="img-thumbnail" width="300">       
            
            <h1>alinhamento de imagem, class float-left ou float-right</h1>
            <img src="imagem1.jpg" class="float-left" width="300">
            <img src="imagem2.jpg" class="float-right" width="300">                    
        </div> 
        <br><br><br><br><br><br><br><br>
        <div class="container">
            <h1>Alinhamento de imagem centralizada, class mx-auto d-block</h1>
            <img src="imagem3.jpg" class="mx-auto d-block" width="300">  
        </div>
        <div class="container">
            <div class="jumbotron">
                <h1>A class Jumbotron</h1>
                <p>
                   Indica uma caixa cinza
                   para chamar atenção com informações especiais, pode ser utilizada em formulários, tabelas ou imagens. 
                </p>
            </div>
        </div>
    </body>
</html>
