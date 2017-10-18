<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <Title> Trê Números</Title>
    </head>

    <body>
    <p>Exercício: Ler três Números inteiros, a partir de um formulário, e imprimir na tela qual o maior e menor valor fornecido.</p>
    <hr><br/><br/><br/>    
    </body>

<form action="tresnumeros.php" method="get">
    <style>
        div#tresnumeros{
            text-align: center;
            width: 190px;
            background-color: aquamarine;
            box-shadow: 0px 0px 10px grey;
            padding: 10px;
        }
    </style>
    
    <div id="tresnumeros">
        <h1>Qual é o maior e qual é o menor</h1>
            <h3>Primeiro número:
                <input name="num1" type="int"/></h3>
            <h3>Segundo número:
                <input name="num2" type="int"/></h3>
            <h3>Terceiro número:
                <input name="num3" type="int"/></h3>
            <input type="submit" value="Ok"/>
    
    <?php
            $a = @$_REQUEST["num1"];
            $b = @$_REQUEST["num2"];
            $c = @$_REQUEST["num3"];
            print "<br>";
            print "O maior númeoro é: ";
            print max ($a, $b, $c)."<br>";
            print "O menor número é: ";
            print min ($a, $b, $c);
    ?> 
    </div>