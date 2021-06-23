<?php
echo "CALCULADORA DE PHP \n";
echo "1 = Suma \n";
echo "2 = Resta \n";
echo "3 = Multiplicacion \n";
echo "4 = Divicion \n";
$i="s";
//Excelente ahi la llevamos
while ($i == "s") {
$operacion=readline("Que operacion desea realizar: \n");
echo "Muy bien, comenzemos \n";
$num1=readline("Digite su primero numero: \n");
$num2=readline("Digite su segundo nuemro: \n");

  if ($operacion==1) {
    $resultado=$num1+$num2;
    echo "La suma del los numeros ingresados es: ".$resultado."\n";
  }
  if ($operacion==2) {
    $resultado=$num1-$num2;
    echo "La Resta del los numeros ingresados es: ".$resultado."\n";
  }
  if ($operacion==3) {
    $resultado=$num1*$num2;
    echo "La Multiplicacion del los numeros ingresados es: ".$resultado."\n";
  }
  if ($operacion==4) {
    $resultado=$num1/$num2;
    echo "La Divicion del los numeros ingresados es: ".$resultado."\n";
  }
  $i=readline("Desa Continuar s/n \n");
}
?>
