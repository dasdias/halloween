<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
&& !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $data = $_POST;
    
    $response['error'] = '';
    // echo '<br>';
    // print_r($_POST);
    // echo '<br>';

      if (!$data['fio']) {
        $response['error'] = 'Поле Ваше имя обязательно для заполнения';
      }
      if (!$data['tel']) {
        $response['error'] = 'Поле Телефон обязательно для заполнения';
      }
      if (!$data['email']) {
        $response['error'] = 'Поле E-MAIL обязательно для заполнения';
      }
      if (!$data['comment']) {
        $response['error'] = 'Поле КОММЕНТАРИЙ обязательно для заполнения';
      }
      if (!$data['product_id']) {
        $response['error'] = 'Не получен продукт ID';
      }
      if (!$response['error']) {
          $pdo = Pdo_connect::getInstance();
          $sql = "INSERT INTO  `orders` SET `fio` = :fio, `tel` = :tel, `email` = :email, `comment` = :comment, `product-id` = :product_id";
          $set = $pdo->PDO->prepare($sql);
          $response['res'] = $set->execute($data);

          $message = "Произведён заказ с ID товара " . $data['product_id'];

          if ($response['res']) {
            mail('admin@examlpa', 'Новый заказ оформлен', $message, 'FROM: admin@hallowen.ru');
          }
      }

      echo json_encode($response);
}

?>