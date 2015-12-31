<!--?php <br ?--> $link = mysqli_connect('localhost','railsuser','mypassword','sample_app_development');
  if (!$link) {
    die('connect error'.mysql_error());
  } else {
    echo 'connect sucsess';
    mysqli_set_charset($link, "utf8");
    echo '文字コードは'.mysqli_character_set_name($link).'です。';
  }&gt;
