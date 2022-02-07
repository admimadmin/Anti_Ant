<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="./frontend/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./frontend/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="container">
  <div class="col">      
        <a href="../index.php">Volver al inicio</a>
    </div> 
    <div class="col">      
        <a href="logout.php">Cerrar session</a>
    </div>
    </div>

<table id="editableTable" class="table-primary">
	<thead>
		<tr>
			<th>Id</th>
			<th>Web</th>															
		</tr>
	</thead>
	<tbody>
		<?php
    
    require_once("config.php");

    $conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM domains";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      while($domain = $result->fetch_assoc()) { ?>
        <tr id="<?php echo $domain ['id']; ?>">
        <td><?php echo $domain ['id']; ?></td>
        <td><a href="<?php echo $domain ['web'];?>"> <?php echo $domain['web'];?> </a></td>        		  				   				   				  
        </tr>
      <?php }
    }else{

      echo "0 results";
    }
    
     ?>
	</tbody>
</table>

<?php
  $conn->close();
?>

</body></html>