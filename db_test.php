<!--?php <br ?--> $link = mysqli_connect('localhost','railsuser','mypassword','sample_app_development');
  if (!$link) {
    die('connect error123!!!!!!!'.mysql_error());
  } else {
    echo 'connect sucsess123!!!!!!!';
  }&gt;
