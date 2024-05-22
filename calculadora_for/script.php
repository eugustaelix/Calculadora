
    <?php
    // Receber o Valor do Formulário
    $numero = $_POST['numero'];

    // Contador
    $contador = 1;

    for ($contador = 1; $contador <= 10; $contador++)
    {
        $result = $numero * $contador;
        echo "$numero × $contador = $result <br>";
    }
    ?>

