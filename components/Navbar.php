<?php require "./koneksi.php";

$query =  mysqli_query($db,"SELECT * FROM tb_mobil");

if(isset($_GET['query']) && $_GET['query'] !== ""){
	$search = $_GET['query'];
	$query = "SELECT * FROM tb_mobil WHERE nama_mobil LIKE '%$search%'";
}

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">Web mobil</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a
								class="nav-link dropdown-toggle"
								href="#"
								role="button"
								data-bs-toggle="dropdown"
								aria-expanded="false">
								Dropdown
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">hubungi kami</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><hr class="dropdown-divider" /></li>
								<li><a class="dropdown-item" href="tambah.php">dashboard admin</a></li>
							</ul>
						</li>
					</ul>
					<form class="d-flex" role="search" method="get">
						<input class="form-control me-2" type="search" placeholder="Search" name="query"  aria-label="Search" />
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
