<!DOCTYPE html>
<?php
    include_once './webcomplemento.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 05</title>
    </head>
    <body>
        <div class="container">
            <h3>Bootstrap Paginação, use a class pagination em um elemento 'ul' e use a class page-item em um elemento 'li'.</h3>
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link">Anterior</a>
                </li>
                <li class="page-item">
                    <a class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link">Próxima</a>
                </li>
            </ul>
            <h3>Bootstrap Cards, cabeçalho, conteudo de corpo e rodapé, use a class 'card'</h3>
            <div class="card">
                <div class="card-header">Cabeçalho</div>
                <div class="card-body">Conteúdo do corpo</div>
                <div class="card-footer">Rodapé</div>
            </div>
            <h3>Cards om classe Contextual</h3>
            <div class="card bg-dark text-light">
                <div class="card-body">Conteúdo</div>
            </div>
            <div class="card bg-danger">
                <div class="card-body">Conteúdo</div>
            </div>
            <div class="card bg-light text-danger">
                <div class="card-body">Conteúdo</div>
            </div>
            <h3>Card bootstrap com Imagem, use a class 'card-img-top' ou 'card-img-botton'</h3>
            <div class="card" style="width: 400px">
                <img class="card-img-top" src="avatar.png">
                <div class="card-body">
                    <h4 class="card-title">Nicolas Lopes</h4>
                    <a class="btn btn-danger btn-sm">Portifólio</a>
                </div>
            </div>
            <h3>Agrupamento de Cards, use 'card-columns', 'card-deck' e 'card-group'</h3>
            <div class="card-columns">
                <div class="card bg-primary">
                    <div class="card-body">Conteúdo</div>
                </div>
                <div class="card bg-danger">
                    <div class="card-body">Conteúdo</div>
                </div>
                <div class="card bg-warning">
                    <div class="card-body">Conteúdo</div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card bg-primary">
                    <div class="card-body">Conteúdo</div>
                </div>
                <div class="card bg-danger">
                    <div class="card-body">Conteúdo</div>
                </div>
                <div class="card bg-warning">
                    <div class="card-body">Conteúdo</div>
                </div>
            </div>
            <div class="card-group">
                <div class="card bg-primary">
                    <div class="card-body">Conteúdo</div>
                </div>
                <div class="card bg-danger">
                    <div class="card-body">Conteúdo</div>
                </div>
                <div class="card bg-warning">
                    <div class="card-body">Conteúdo</div>
                </div>
            </div>
        </div>
    </body>
</html>
