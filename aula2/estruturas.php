<?php


$linguagemPreferida = "javascript";
//estrutura posicionsl if 

if($linguagemPreferida == "java"){
    echo "Você é um javeiro,professor Celso gostou disso!";
}else{
    echo "Você não é javeiro";
}
  echo "<br><br>";

  $opcao = 2;

// estruturas Switch (escolha)

switch($opcao){
    case 1: 
        echo "Você escolheu a opção 1"
        break;
     case 2: 
        echo "Você escolheu a opção 2"
        break;
    case 3: 
        echo "Você escolheu a opção 3 "
        break;
    default :
        echo"Você não escolheu nenhuma opção válida!"
        break; 
}
$SlarioEstagiario = 1200;

$SalarioJunior = 2200;

$SalarioPleno = 4500;

$salarioSenior = 10000;
$mediaSalarial = ($SlarioEstagiario +
                        $SalarioJunior+
                        $SalarioPleno+
                        $salarioSenior) /4;
    echo "A Média Salarial é : $mediaSalarial";
      
    //estruturas de repetições (laços,loops)
      
$cont = 0;

while($cont < 5){
    echo "o cont é: $cont";
$cont++;
}
for($cont =0; $cont < 5; $Cont++){
    echo "o cont é:$cont";
}
    