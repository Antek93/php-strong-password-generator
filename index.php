<?php
include __DIR__ . '/formule.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <h1>Password generator</h1>
    <div>
        <form action="" method="GET">
            <select label="Quanti caratteri?" name="range" id="">
                <option selected value="00">0</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="70">70</option>
            </select>
            <button type="submit">
                Genera password
            </button>
        </form>
    </div>
</body>

</html>