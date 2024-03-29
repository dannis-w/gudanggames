<!DOCTYPE html>
<?php include ('config/connection.php'); 
$sql ="SELECT * FROM harga ORDER BY 'id' DESC";
$a = "SELECT * FROM harga WHERE harga='harga' && diamond='diamond' ORDER BY 'id'";
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="config/+style.css">
		<title>Gudang Games</title>
	</head>
<body>
<div class="container-fluid background" id="img1"> 
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-lg">
 		<div class="container">
    		<a class="navbar-brand">GudangGames</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
    		</button>
   			<div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
  				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
   					<li class="nav-item"><a class="nav-link active" aria-current="page" href="#top">Home</a></li>
   					<li class="nav-item"><a class="nav-link" href="#mobile-legend">Mobile Legend</a></li>
    				<li class="nav-item"><a class="nav-link" href="#free-fire">Free Fire</a></li>
				    <li class="nav-item"><a class="nav-link" href="#pubg-mobile">Pubg Mobile</a></li>
				    <li class="nav-item"><a class="nav-link" href="#life-after">Life After</a></li>
				    <li class="nav-item"><a class="nav-link" href="#dragon-raja">Dragon Raja</a></li>
				    <li class="nav-item"><a class="nav-link" href="#sausage-man">Sausage Man</a></li>
  				</ul>
    		</div>
  		</div>
	</nav>
<!-- ====================================END OF NAVIGATION====================================== -->
	<a id="top"></a>
	<div class="container-fluid"> 
		<div class="container text-center">
			<h1 class="display-7 selamat ">Selamat Datang Di Gudang Games</h1>
			<div id="carouselExampleSlidesOnly" class="carousel slide banner" data-bs-ride="carousel">
			  <div class="carousel-inner shadow-lg">
			    <div class="carousel-item active">
			      <img src="assets/mobile-legend.jpg" class="banner">
			    </div>
			    <div class="carousel-item">
			      <img src="assets/freefire.jpg" class="banner">
			    </div>
			    <div class="carousel-item">
			      <img src="assets/pubg.jpg"class="banner">
			    </div>
			    <div class="carousel-item">
			      <img src="assets/life-after.jpg" class="banner">
			    </div>
			    <div class="carousel-item">
			      <img src="assets/dragon-raja.jpg" class="banner">
			    </div>
			    <div class="carousel-item">
			      <img src="assets/sausage-man.jpg" class="banner">
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<div class="container-fluid pt-5 pb-5 shadow-sm" id="mobile-legend">
		<div class="container text-center">
			<h4 class="display-4" >Mobile Legend</h4>
			<p style="color: #FFF"><b>Paket Fast 5-10 Menit</b></p>
			<div class="row pt-4">
				<?php $test = $connect->query($sql);
						while($data = $test->fetch_array()){
							$id = $data['id'];
							$diamond = $data['diamond'];
							$harga = $data['harga'];
				?>

					<div class="card shadow-lg" style="width: 10rem;">
 					<span class="bulat">
						<i class="fa fa-gem fa-2x"></i>
					</span>
  					<div class="card-body">
    					<h5 class="card-title"><?php echo $diamond; ?></h5>
   						<p class="card-text"><?php echo $harga; ?></p>
    					<button type="button" class="btn btn-outline-danger shadow-lg" onclick="modalpopup('<?php echo $harga?>')">
                			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  								<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
							</svg>
               				Pilih
              			</button>
  					</div>
				</div>	
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="container-fluid pt-5" id="free-fire">
		<div class="container text-center">
			<h2 class="display-3">Free Fire</h2>
			<p><b> Free Fire Region Indonesia </b></p>
			<p> Proses 5-180 Menit</p>
			<div class="row pt-4 gx-4 gy-4">
				<div col-md-4>
					
				</div>
			</div>			
		</div>
	</div>
</div>
	<div id="popupml" class="modalml">
  		<div class="modalml-content">
    		<span class="close" onclick="closepopup()">&times;</span>
    		<h1 class="display-7"><center>Top Up Mobile Legend</center></h3>
    		<div id="harga"><?php 
    		$b = $connect->query($a);
						while($data = $b->fetch_array()){
							$id = $data['id'];
							$diamond = $data['diamond'];
							$harga = $data['harga'];
    		echo $harga;
    		echo $diamond; }?></div>
  		</div>
	</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="config/+java.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>