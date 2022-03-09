<?php
session_start();



$num1 = 0;
$num2 = 1;
while ($num1 < $num2) {
    $num1 = rand(1, 20);
    $num2 = rand(1, 20);
}

$operacao = rand(1, 3);
if ($operacao == 1) {
    $operacao = "+";
    $resultado = $num1 + $num2;
}
if ($operacao == 2) {
    $operacao = "-";
    $resultado = $num1 - $num2;
}
if ($operacao == 3) {
    $operacao = "*";
    $resultado = $num1 * $num2;
}
$_SESSION['resultado'] = $resultado;
$_SESSION['num1'] = $num1;
$_SESSION['num2'] = $num2;
echo $_SESSION['num1'] . " " . $operacao . " " . $_SESSION['num2'] ;
?>

<form method="POST" action="resultado.php">
    <input type="number" name="resposta" id="resposta" placeholder="Digite a resposta">
    <input type="submit" value="Enviar">
</form>

<?php //echo $resultado
?>