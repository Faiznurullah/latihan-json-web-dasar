<?php

 $get_data = file_get_contents('data/donuts.json');
 $decode_data = json_decode($get_data, true);
 $decode_data = $decode_data['menu'];
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Muli|Sniglet" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		body {
			font-family: 'Muli', sans-serif;
		}

	</style>
  <title>JCO web</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container">
	  <a class="navbar-brand" href="#"><img src="logo.png" width="40"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <span class="navbar-text">
	      JCO <strong>Indonesia</strong>
	    </span>
	  </div>
		</div>
	</nav>

	<div class="container">

		<div class="row mt-5">
			<div class="col">
				<h3>J.CO <u>Product</u></h3>
			</div>
		</div>

		<div class="row">
		<?php 
    foreach($decode_data as $menu) :
      ?>
			<div class="col-sm-3 mt-2">
				<div class="card">
				  <div class="card-header">
				    <?= $menu['nama']; ?>
				  </div>
				  <div class="card-body m-2">
				    <img src="images/<?= $menu['gambar']; ?>" alt="  <?= $menu['nama']; ?>" width="200">
				    <p><strong class="badge badge-warning"><h5> <?= $menu['kategori']; ?></h5></strong></p>
				    <p class="card-text"> <?= $menu['deskripsi']; ?></p>
				  </div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		

	</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>