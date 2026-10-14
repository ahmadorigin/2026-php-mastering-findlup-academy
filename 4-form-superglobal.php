<?php
if (isset($_GET['q'])) {
    $keyword = htmlspecialchars($_GET['q']);
    echo 'Kamu mencari: ' . $keyword;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Form Superglobal</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="q" placeholder="Cari...">
        <button type="submit">Cari</button>
    </form>

</body>

</html>