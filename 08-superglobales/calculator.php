<?php
    // Réaliser le traitement du calcul
    // Préparer les variables
    $number1 = $_POST['number1'] ?? null;
    $number2 = $_POST['number2'] ?? null;
    $operator = $_POST['operator'] ?? null;
    // Vérifier que le formulaire est soumis
    if (!empty($_POST)) {
        // Vérification...

        // On fait le bon calcul en fonction de l'opérateur
        // Ne jamais utiliser la fonction eval()
        if ('*' == $operator) {
            $result = $number1 * $number2;
        } else if ($operator == '-') {
            $result = $number1 - $number2;
        } else if ($operator == '/') {
            $result = $number1 / $number2;
        } else {
            $result = $number1 + $number2;
        }

        echo '<h5>'.$result.'</h5>';
    }
?>

<form action="" method="post">
    <div>
        <label for="number1">Nombre 1</label>
        <input type="text" name="number1" id="number1" value="<?= $number1; ?>">
    </div>
    <div>
        <label for="number2">Nombre 2</label>
        <input type="text" name="number2" id="number2" value="<?= $number2; ?>">
    </div>
    <div>
        <label for="operator">Opération</label>
        <select name="operator" id="operator">
            <option value="+">Addition</option>
            <option value="-">Soustraction</option>
            <option value="/">Division</option>
            <option value="*">Multiplication</option>
        </select>
    </div>

    <button>Calculer</button>
</form>
