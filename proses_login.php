<?
  session_start();

  $server = "localhost";
  $username = "telkom";
  $password = "telkom";
  $db_name = "reparasi_utr";
  
  $db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
  mysql_select_db($db_name) or DIE("Database name not available !!");
  
  $login = mysql_query("select * from tbuser where (Username = '" . $_POST['username'] . "') and (Password = '" . md5($_POST['password']) . "')",$db);
  $rowcount = mysql_num_rows($login);
  if ($rowcount == 1) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: utama.php");
  }
  else
  {
    header("Location: gagal.php");
  }
?>
