<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
</body>
</html>
<?php // "<?php" -- marca o início do comando php
//Comentário de uma linha
/*Várias linhas*/

echo "Hello Word"; // "echo" -- serve para imprimir informações, como o print no phyton
echo "<br>Vinícius"; 
// O comando "<br>" colocado dentro das aspas é usado para quebra de linha, para pular a linha
// O comando "\n" é colocado no lugar do "<br>" e serve para a mesma função, porem nessa versão que estamos usando não funciona
//Pode ser colocado a contrução do HTML acima do PHP para correção de formatação, como os acentos

$nome = "Benatti"; // "$" -- está indicando que "nome é uma variável
echo "<br>Meu nome é: " . $nome; // para contatenar (juntar) usamos o "."

$num1 = 10;
$num2 = 15;
$soma = $num1 + $num2;
echo "<br>O resultado da soma é: " . $soma;
//Qunado form adicionado nas variáveis numeros não são coçlocadas aspas, ja strings sim 

//Estrutura de decisão (if/else)
/*Se o auluno tiver a nota abaixo de 4 o aluno esta reprovado, se o aluno tiver a nota entre 4 e 6, se a nota for >= a 6 o aluno esta aprovado*/
$nota1 = 9;
$nota2 = 10;
$media = ($nota1 + $nota2)/2;
echo "<br>A média é: ".$media;
if ($media < 4){
	echo "<br>Reprovado!!!";
}
else if ($media < 6){
	echo "<br>Recuperação!!!";
}
else{
	echo "<br>Aprovado!!!";
}

//estrutura de repetição
$i = 0;
while ($i <= 10){
	echo "<br>".$i * 10; /*com aspas duplas não é necessário concatenar, pois mostra o valor da veriável, porém se for aspas simples irá escrever como um string não variável, irá imprimir $i*/
	$i = $i + 1;
}

for ($c = 0; $c <= 50; $c = $c + 2) { 
	echo "<br>$c";
}

// "?<" -- marca o fim do comando php(foi colocado < poi o simbolo menor não ia) 
?>