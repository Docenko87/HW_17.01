<?php
if(isset($_COOKIE['page1_visits'])) {
    $visits = $_COOKIE['page1_visits'] + 1;
} else {
    $visits = 1;
}

setcookie('page1_visits', $visits, time() + 86400);

?>
<?php
if(isset($_COOKIE['page2_visits'])) {
    $visits_page2 = $_COOKIE['page2_visits'] + 1;
} else {
    $visits_page2 = 1;
}
setcookie('page2_visits', $visits_page2, time() + 86400);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница 2</title>
</head>
<body>
    <h1>Страница 2</h1>
    <p>Вы посетили эту страницу <?php echo $visits; ?> раз(а).</p>
    <p><a href="index.php">На главную</a></p>
</body>
</html>