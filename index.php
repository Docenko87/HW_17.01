<?php
$visits_page1 = isset($_COOKIE['page1_visits']) ? $_COOKIE['page1_visits'] : 0;
$visits_page2 = isset($_COOKIE['page2_visits']) ? $_COOKIE['page2_visits'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <h1>Index Page</h1>
    <ul>
        <li><a href="1.php">Страница 1</a> (Посещений: <?php echo $visits_page1; ?>)</li>
        <li><a href="2.php">Страница 2</a> (Посещений: <?php echo $visits_page2; ?>)</li>
    </ul>
</body>
</html>