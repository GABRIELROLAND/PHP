<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula3</title>
    </head>
    <body>
   <?php
   //Raiz quadrada - sqrt
   $valor = $_GET["v"];
   echo "O valor enviado foi $valor";
   $rq = sqrt($valor);
   echo "<br>A raiz quadrada é: $rq";
   
   //Arredondamento de valor - round
   $r = round($valor);
   echo "<br>O valor arredondado é: $r";
   
   //Mostra o valor inteiro da variavel - intval
   $val = intval($valor);
   echo "<br>O valor inteiro da variável é: $val";
   
   //Transforma o numero negativo em positivo - abs
   $abs = abs("$valor");
   echo "<br>O valor valor positivo da variável é: $abs";

      
   /* Exercícios:
    * 1)Mostrar a situação do aluno de acordo com a sua média:
    * aprovado ou reprovado, sendo a média >=7.
    * 
    * 2)Permitir que o usuário escolha entre somar ou multiplicar,
    * passando os valores pelo método GET.
    * 
    * 3)Dadas 3 variáveis com os seguintes valores ($n1=2, $n2=5, $n3=8),
    * faça um programa PHP que:
    *   a) Determine a soma dos 3 números;
    *   b) Determine a raiz quadrada dos 3 números.
    * 
    * 4)Sabendo que Amália tem 17 anos e Joaquim 18, faça um programa PHP
    * que verifique a idade dos 2 amigos e exiba o nome do mais velho na tela.
    * 
    */
     
   //EXERCÍCIO 1
   
   $av1 = $_GET["av1"];
   $av2 = $_GET["av2"];
   
   if(($av1+$av2)/2 >=7)
       echo "<br>O aluno está aprovado!";
   else
       echo "<br>O aluno está reprovado!",
      
   //EXERCÍCIO 2
           
   $operador = $_GET["op"];
   $num1 = $_GET["num1"];
   $num2 = $_GET["num2"];
   echo $operador;
   if($operador == 1)
       echo "<br>$num1 + $num2 = ".$num1+$num2;
   else if ($operador == 2)
       echo "<br>$num1 x $num2 = ".$num1*$num2;
   else
       echo "<br>Escolha uma operação válida! (1 para soma ou 2 para multiplicação)";
   
   //EXERCÍCIO 3
   
   $n1 = 2;
   $n2 = 5;
   $n3 = 8;
           
   echo "<br>A soma dos 3 números é: ($n1+$n2+$n3)";
   echo "<br>A raiz quadrada do primeiro número é: ".(sqrt($n1));
   echo "<br>A raiz quadrada do segundo número é: ".(sqrt($n2));
   echo "<br>A raiz quadrada do terceiro número é: ".(sqrt($n3));
   
   //EXERCÍCIO 4
   
   $amalia = $_GET["amalia"];
   $joaquim = $_GET["joaquim"];
   
   if($amalia>$joaquim)
       echo "<br>Amalia é mais velha que Joaquim!";
   else if ($amalia<$joaquim)
       echo "<br>Joaquim é mais velho que Amalia!";
   else
       echo "<br>Os dois têm a mesma idade!";
   
?>
    </body>
</html>