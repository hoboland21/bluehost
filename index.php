
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Saipan Tech Application Gallery</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <link rel="stylesheet" href="/assets/bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/mcsta.css">
  <link rel="stylesheet" media="print" href="/assets/css/print.css" />


</head>
<style>
/*  div {
    border:1px solid green;
  }
*/
  </style>

<body>
  <div id="app">
    <nav class="navbar navbar-expand navbar-dark bg-dark">
      <a href="/" class="navbar-brand">
      
      <img  src="assets/img/Working Logo Icon.png" alt="ST Logo" style="width: 165px"></a>
     <ul class="navbar-nav ml-auto" >
         <li class="nav-item">
          <a href="login" class="nav-link">Login</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item">
          <a href="logout" class="nav-link">Logout</a>

        </li>
      </ul>
    </nav>
    <div class="container">
<?  


$conn = new mysqli("saipantech.com", "saipante_quasar", "pimil210", "saipante_db1");
  
if ($conn->connect_error) {
  die("ERROR: Unable to connect: " . $conn->connect_error);
} 

echo 'Connected to the database.<br>';
/*
$result = $conn->query("SELECT name FROM employee");

echo "Number of rows: $result->num_rows";

$result->close();
*/
$conn->close();



?>  

  </div>
  </div>
  <script src="/assets/js/jquery-3.3.1.min.js" ></script>
  <script src="/assets/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
 
</body>
</html>
