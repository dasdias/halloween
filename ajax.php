<?php
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
    //   if (!$response['error']) {
          
    //   }

      echo json_encode($response);
}

?>