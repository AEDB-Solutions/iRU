<?php
include ('checkLogin.php');
 $meuobjeto = json_decode(file_get_contents('php://input'));


  $login = new CheckLogin();
  $criptografia = hash('sha256',$meuobjeto->password);
//  $login->Check($meuobjeto->matricula, $criptografia);
  if($login->Check($meuobjeto->matricula, $criptografia) == true)
  {
    echo true;
  }
  else
  {
    echo false;
  $login = new checkLogin();
  $login->Check($meuobjeto->matricula, $meuobjeto->password);
  if(Check() == true)
  {
    return true;
  }
  else
  {
    return false;
  }
  //$result = $login->Check($meuobjeto->matricula, $meuobjeto->password);

  //echo json_encode($result);
?>
