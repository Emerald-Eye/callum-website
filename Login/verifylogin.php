<?php

  $usrname = $passwd = "";

  $usrname = $_POST["uname"];
  $passwd = $_POST["psw"];

  if ($usrname == "callumwong") {
    if ($passwd == "abc") {
      header('/'.$newURL);
    }
  }

?>
