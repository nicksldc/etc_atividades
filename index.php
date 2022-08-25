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
    </head>
    <body>
        <br>
        <h1>Aula 01 LVII</h1>
        
        <!-- Sintaxe do PHP -->
        <?php
            echo "Bem vindo ao mundo do PHP. <br>";
            //Traz informações do PHP atual
            //como suas biblitoecas e extensões          
//            Quando usar aspas Simples ou Duplas
            echo "Nome: <input type='text'>";
            echo '<p style="color: red; font-size:30px">Comandos PHP</p>';
            // PHP include e require
            include './head.php';
            include './footer.php';
            //Variáveis PHP
            $ano_corrente;
            //Tipos de Dados
            //string
            echo "Eu sou uma string";
            //inteiro
            $x=585;
            var_dump($x) ."<br>";
            //boolean
            $b=10;
            if($b < 5) {
                echo "Verdadeiro";
            } else {
                echo "Falso";
            }
            // Matriz 
            $Rock = array("AC/DC", "METALLICA","NIRVANA");
            var_dump($Rock);
            foreach($Rock as $R) {
                echo 'Minhas bandas de Rock' . $R. "<br>";
            }
            //Operadores PHP
            // Operadores Aritméticos
            $s=15;
            $t=25;
            echo $s + $t. "<br>";
            // Operador de Atribuição Sinal '='
            $y=100;
            echo $y. "<br>";
            // Operadores de Comparação ==, !=, >, >=, <, <=;
            $e=100;
            $f=50;
            var_dump($e>$f);
            echo  "<br>";
            // Operadores de Incremento e Decremento
            // Incremento ++
            $c=10;
            echo ++$c. "<br>";
            // Decremento --
            $C=101;
            echo --$C.  "<br>";
            //Operadores Lógicos'and %%', 'or ||'
            //AND
            $u=100;
            $w=50;
            if($u==100 && $w==50) {
                echo"afirmações verdadeiras";
                echo "<br>";
            }
            // OR
            $u=100;
            $w=50;
            if($u==100 || $w==50) {
                echo"afirmações verdadeiras <br>";
            }
            // Operador de String e Concatenação
            $texto="Bem vindo";
            $texto2="<b>ao mundo do PHP</b>";
            echo $texto ." ". $texto2;
        ?>
    </body>
</html>
