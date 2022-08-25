<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            /* Regra CSS Interna*/
            body{
                background-color: aquamarine;
                color: black;  
            }
            #regraunica{                
                background-color: pink;
                color: blue;              
            }
            .varios{
                background-color: brown;
                color: white;
            }
        </style>
    <body>
        <h1>Aula 02 DIWEB-Nicolas Lopes</h1>
    </body>
    <!-- Regra CSS Externa -->
    <link href="estilo.css" rel="stylesheet">
    <p>
        Regra CSS Externa, linkada
        Utilizada o elemento "link".
    </p>
    <!-- Regra CSS InLine -->
    <div style="background-color: gray; color: yellow">
        Utilizando Regra CSS
    </div>
    <p id='regraunica'>Regra CSS Única</p>
    <p class="varios">Outra Regra CSS 1</p>
    <p class="varios">Outra Regra CSS 2</p>
    <p class="varios">Outra Regra CSS 3</p>
    <span class="varios">Outra Regra CSS 4</span>
    <b class="varios">Outra Regra CSS 5</b>

</head>

</html>
