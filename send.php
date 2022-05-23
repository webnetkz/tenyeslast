<?php

if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['phone']) && !empty($_POST['phone'])) {
  $name = htmlentities($_POST['name']);
  $name = trim($name);

  $phone = htmlentities($_POST['phone']);
  $phone = trim($phone);

  if(isset($_POST['comment']) && !empty($_POST['comment'])) {
    $comment = clearVar($_POST['comment']);
  }
  if(isset($_POST['g1']) && !empty($_POST['g1'])) {
    $g1 = clearVar($_POST['g1']);
  }
  if(isset($_POST['g2']) && !empty($_POST['g2'])) {
    $g2 = clearVar($_POST['g2']);
  }
  if(isset($_POST['g3']) && !empty($_POST['g3'])) {
    $g3 = clearVar($_POST['g3']);
  }
  if(isset($_POST['g4']) && !empty($_POST['g4'])) {
    $g4 = clearVar($_POST['g4']);
  }

  echo '<script>location.href = "./index";</script>';
} else {
  echo '<script>location.href = "./index";</script>';  
}
echo '<script>location.href = "./index";</script>'; 


function clearVar($str) {
  if(isset($str) && !empty($str)) {
    $str = htmlentities($str);
    $str = trim($str);
    return $str;
  } else {
    echo '<script>location.href = "./index";</script>';
  }
}