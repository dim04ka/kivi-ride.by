<?php

// $result = array(
//   'name' => $_POST["email"],
//   'tel' => $_POST['phone']
// );
// mail('dmitry.suhotsky@gmail.com', 'My Subject', $_POST["email"]);
// echo json_encode($result);

//mail send to test@gmail.com
if (!empty($_POST['email']) && !empty($_POST['phone']))
{
    $email = $_POST['email'];
    $tel = trim($_POST['phone']);

    $message = '  <table  width="width: 600px" cellpadding="0" cellspacing="0" border="0" style="width: 100%;font-family: Arial, Helvetica, sans-serif; font-size: 16px;padding: 20px 0px; " >


    <tr style="text-align: center">
      <td>Email: '.$email.'</td>
    </tr>
    <tr style="text-align: center">
      <td style="padding-top: 10px;">Вопрос:  '.$tel.'</td>
    </tr>
    <tr>
      <td style="padding: 10px">&nbsp;</td>
    </tr>
  </table>';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8'. "\r\n";
    if (mail("dmitry.suhotsky@gmail.com","Заявка с сайта Kivi-kide.by", $message,$headers))
    {
        $result = array(
            'name' => $_POST["email"]
        );
        echo json_encode($result);
        exit();
    } else {
        echo json_encode(array("при отправке сообщения возникли ошибки"));
        exit();
    }
}


