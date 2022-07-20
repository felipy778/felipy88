# felipy88 
<?php
  if (isset($_POST['enquete_cores'])){
    setcookie('enquete_cores',$_POST['enquete_cores']);
  }

  if (!isset($_COOKIE['enquete_cores'])){
      echo "Você já votou. Não pode votar novamente";
  }else{
      include 'enquete.html';
  }

?>
