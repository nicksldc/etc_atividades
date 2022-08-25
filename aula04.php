<!DOCTYPE html>
<?php 
    include_once './webcomplemento.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04</title>
    </head>
    <body>
        <div class="container">
            <h3>Bootstrap Alert, a class alert fornece um elemento de alerta</h3>
            <div class="alert alert-success">
                <strong>Atenção!</strong> Esse é uma lerta de sucesso.               
            </div>
            <h3>Bootstrap alert com botão de fechamento</h3>
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert">
                    &times;
                </button>
                <strong>Atenção!</strong> Esse é um alerta de atenção!
            </div>
            <h3>Bootstrap Buttons, a classe btn fornece botões nos elementos 'a', 'input' e 'button'</h3>
            <a href="#" class="btn btn-primary">Editar</a><br> 
            <br>
            <input type="submit" value="Cadastrar" class="btn btn-success"><br> 
            <br>
            <button type="reset" class="btn btn-warning">Limpar</button><br>
            
            <h3>Tamanhos de Buttons, utilize a class 'btn-lg'=grande, 'btn-md'=medio, 'btn-sm'=pequeno</h3>
            <button class="btn btn-info btn-sm">Pequeno</button>
            <button class="btn btn-info btn-md">Médio</button>
            <button class="btn btn-info btn-lg">Grande</button>
            
            <h3>Grupo de Botões, a lass 'group' agrupa uma serie de botões em uma única linha</h3>
            <div class="btn-group">
                <button class="btn btn-primary btn-sm">Home</button>
                <button class="btn btn-primary btn-sm">Cadastro</button>
                <button class="btn btn-primary btn-sm">Opções</button>
                <button class="btn btn-primary btn-sm">Fale conosco</button>
                <button class="btn btn-primary btn-sm">Sair</button>
            </div>
            <h3>Grupo de Buttons na vertical, use a class btn-group-vertical</h3>
            <div class="btn-group-vertical">
                <button class="btn btn-dark btn-lg">Home</button>
                <button class="btn btn-dark btn-lg">Cadastro</button>
                <button class="btn btn-dark btn-lg">Opções</button>
                <button class="btn btn-dark btn-lg">Fale conosco</button>
                <button class="btn btn-dark btn-lg">Sair</button>               
            </div>
            <h3>Grupo de Buttons dropdown menus</h3>
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm">Home</button>
                <button class="btn btn-secondary btn-sm">Cadastro</button>
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle='dropdown'>Usuário</button>
                <div class="dropdown-menu">    
                    <a class="dropdown-item">Cadastrar</a>
                    <a class="dropdown-item">Listar</a>
                    <a class="dropdown-item">Editar</a>
                </div>
            </div>
        </div>
    </body>
</html>
