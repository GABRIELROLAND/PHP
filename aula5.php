<?php
$peso=$_POST['peso'];
$altura=$_POST['altura'];
$imc=$peso/($altura*$altura);
echo"O peso Digitado foi: ".$peso."<br>";
echo"A altura Digitada foi: ".$altura."<br>";
echo"O seu IMC é: ".round($imc);
if($imc=='18.5'){
    echo'Só osso!<br>';
}
if($imc>=18.5 && $imc<25.0){
    echo '<br>'.'Saudavel';
}
if($imc>=25.0 && $imc<30.0){
    echo'<br>'.'Sobrepeso';
}
if($imc>=30.0 && $imc<35.0){
    echo'<br>'.'Obesidade Grau 1';
}
if($imc>=35.0 && $imc<40.0){
    echo'<br>'.'Obesidade grau 2';
}
else if($imc>40.0){
    echo'<br>'.'Obesidade morbida grau 3<br>';
}
?>

