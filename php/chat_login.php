<?php

  function generateRandomString($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  $con = mysql_connect('ocvwlym0zv3tcn68.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306', 'le64geqkm9ou2c0l', 'wglvg8731kw7uwy3');
  mysql_select_db('eytwagkmgmjrx2ku', $con);
  if (!$con) {
    echo mysql_error();
  }

  while (true) {
    $userId = generateRandomString(16);
    $result = mysql_query('SELECT * FROM users WHERE userId = "' . $userId . '"');
    $wFound = False;
    while($row = mysql_fetch_array($result)) {
      $wFound = True;
      break;
    }
    if (!$wFound) break;
  }
  echo $userId;

  mysql_query('INSERT INTO users(userId) VALUES ("' . $userId .'")');

?>
