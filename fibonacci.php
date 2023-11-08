<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contaier">
        <div class="text-center">
            <h1>sequencia de fibonacci</h1>
        </div>
        <form action="" method="get">
            <span class="input-group-text" id="inputGroup-sizing-lg" >ate qual numero?</span>
            <input type="text" class="form-control" name="valor" ></input>
            <div class="colauto">
                <div>
                    <button type="submit" class="btn"></button>
                </div>
            </div>

        </form>
    </div>
    
</body>

<?php
$valor = $_GET['valor'] ?? null;

$ultimo = 1;
$penultimo = 0;

if(isset ($_GET['valor'])){
    echo '0 <br>' ;
    echo '1 <br>' ;
}

for($i = 1; $i <= $valor; $i++){
    $atual = $ultimo + $penultimo;
    echo $atual. '<br>';

    $penultimo = $ultimo;
    $ultimo = $atual;


};
?>

</html>