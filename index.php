<?php

$mounth = date('m');
$day = date('j');
$year = '2019';

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

if ($mounth == 10 && $day > 21) {
    $pdo = Pdo_connect::getInstance();
    $result = $pdo->PDO->query('SELECT * FROM `goods`');
    $goods = $result->fetchAll(PDO::FETCH_ASSOC);

    // $goods = array();

    // while ($line = $result->fetchAll()) {
    //     $goods = $line;
    // }
    // echo '<br>';
    // print_r($goods);
    // echo '<br>';
    include ('./online_store.php');
} else {

    $HightYear = new High_year();
    echo $HightYear->highYear($year);

    $Halloween = new Halloween();
    $day_to_halloween = $Halloween->day_to_halloween();
    include ('./timer.php');
}

?>