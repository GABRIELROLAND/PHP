<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula3</title>
    </head>
    <body>
   <?php
   //10% de Desconto em um produto//
   $preco=$_GET["a"];//Entrando com dado pela URl:?a=10//
   echo"O preço do produto custa $preco";
   $preco=$preco-($preco*10/100);
   echo"<br>O preço do produto com desconto É:$preco";
   //Operadores de incremento:pre-incremento e pos-incremento//
   // Mostrar o ano anterior ao ano atual//
   $atual=$_GET["aa"];
   echo"<br>O ano atual é:$atual";
   echo"<br>O ano atual é:".--$atual;//ano anterior//
   echo"<br>O ano atual é:".++$atual;//proximo ano// 
   //operador ternario-variavel=condição?Verdadeiro:falso
   $n1=$_GET["a"];
   $n2=$_GET["b"];
   $maior=$n1>=$n2?$n1:$n2;
   echo"<br>O maior valor é:".$maior;
   //operadores Relacionais
   //Operador igual ==
   $a=3;   
   $b=3;
   $result=($a===$b)?"sim":"não";
   echo"<br>O valor é igual?".$result;
   //operador Diferente !=
   $a=3;   
   $b=3;
   $result=($a!=$b)?"sim":"não";
   echo"<br>O valor é igual?".$result;
    //operador de identica diferente !==
   $a=3;   
   $b=3;
   $result=($a!==$b)?"sim":"não";
   echo"<br>O valor é igual?".$result;
   //operadores Logicos- and && ,or || , not !
   /*Mostrar a idade , e se estiver entre 18 e 65 anos mostrar voto
    obrigatorio caso contrario facultativo*/
   $idade=$_GET["v"];
   echo"<br>Sua idade é:$idade";
   

    ?>
</body>
</html>
     