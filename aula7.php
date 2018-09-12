<?php
//De forma simples,separando por virgula
$lista=array("pao","ovo","queijo","carne");
print_r($lista);
echo"<hr>";
//2 forma de se declarar array
$lista=array();
$lista[0]="pao";
$lista[1]="ovo";
$lista[2]="queijo";
$lista[3]="carne";
print_r($lista);
echo"<hr>";

$carro=array();

$carro['cor']="Vermelha";
$carro['modelo']="Ferrai 458 Italia";
$carro['fabricante']="Ferrari";

print_r($carro);
//indicas textuais de forma simples
echo'<br>A cor do carro é:'.$carro['cor'];
echo'<br>O modelo do carro é:'.$carro['modelo'];
echo'<br>O fabricante do carro é:'.$carro['fabricante'];
echo'<hr>';

// Localizando elementos no array
$lista=array("pao","ovo","queijo","carne");
print_r($lista);
echo'<hr>';
echo'<br>O segundo elemento da lista é:'.$lista[1];
echo'<hr>';

$carro=array();

$carro['cor']=array("Vermelha","Branco","Azul");
$carro['modelo']="Ferrai 458 Italia";
$carro['fabricante']="Ferrari";
echo'<br>A 3 cor do carro é:'.$carro['cor'][2];
//criar vetor dinamicamente range
echo'<br>';
$c=range(5,20,2);//pos inicial =5 , pos final = 20 ,soma de 2 em 2 !
print_r($c);
echo'<hr>';
//vetor personalizado
echo'<br>';
$v=array(1=>"a",3=>"b",6=>"c",8=>"d");
print_r($v);
$v[]="e";
echo'<hr>';

//apagar indice - unset

echo'<br>';
$v=array(1=>"a",3=>"b",6=>"c",8=>"d");
unset($v[6]);
print_r($v);
echo'<hr>';
?>
