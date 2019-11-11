<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>UTSJOSS</title>

	<style type="text/css">

header, section, footer, aside, nav, article, figure, figcaption {
	display: block;}
body {
	color: #666666;
	background-color: #f9f8f6;
	background-image: url("images/dark-wood.jpg");
	background-position: center;
	font-family: Georgia, Times, serif;
	line-height: 1.4em;
	margin: 0px;}
.wrapper {
	width: 70px;
	margin: 20px auto 20px auto;
	border: 2px solid #000000;
	background-color: #ffffff;}
header {
	height:60px;
	background-image: url(images/header.png);}
h1 {
	text-indent: 10px;
	width: 940px;
	height: 50px;
	margin: 0px;}
nav, footer {
	clear: both;
	color: #ffffff;
	background-color: #aeaca8;
	height: 30px;}
nav ul {
	margin: 0px;
	padding: 5px 0px 5px 30px;}
nav li {
	display: inline;
	margin-right: 40px;}
nav li a {
	color: #ffffff;}
nav li a:hover, nav li a.current {
	color: #000000;}
section.courses {
	float: left;
	width: 659px;
	border-right: 1px solid #eeeeee;}
article {
	clear: both;
	overflow: auto;
	width: 100%;}
hgroup {
	margin-top: 40px;}
figure {
	float: left;
	width: 290px;
	height: 720px;
	padding: 5px;
	margin: 20px;
	border: 1px solid #eeeeee;}
figcaption {
	font-size: 90%;
	text-align: left;}
aside {
	width: 230px;
	float: left;
	padding: 0px 0px 0px 20px;}
aside section a {
	display: block;
	padding: 10px;
	border-bottom: 1px solid #eeeeee;}
aside section a:hover {
	color: #985d6a;
	background-color: #efefef;}
a {
	color: #de6581;
	text-decoration: none;}
h1, h2, h3 {
	font-weight: normal;}
h2 {
	margin: 10px 0px 5px 0px;
	padding: 0px;}
h3 {
	margin: 0px 0px 10px 0px;
	color: #de6581;}
aside h2 {
	padding: 30px 0px 10px 0px;
	color: #de6581;}
footer {
	font-size: 80%;
	padding: 7px 0px 0px 20px;}
	</style>
</head>
<body>

<div id="container">
<header>
	<h1>UTS PRAKTIKUM WEB LANJUT</h1>
  <nav>
    <ul>
	<li><a href="" class="current">DATA TOKO</a></li>
	<li><a href="">DATA SHOP</a></li>
	<li><a href="">INSTAGRAM</a></li>
	<li><a href="">TRANSAKSI</a></li>
	<li><a href="">PESAN</a></li>
   </ul>
  </nav>
  </header>
  <section class="courses">
 <article>
   <figure>
   <h2>NAMA TOKO ONLINE</h2>
	<!-- <img src="/assets/image/1.jpg" alt="bromo" />
	<figcaption>PANORAMA</figcaption> -->
	<table border=1 id="tabelToko" class>
<?php
foreach ($data_toko_kirim as $data){
	?>
	<tr>
	<td><?= $data->kode ?></td>
	<td><?= $data->nama_toko ?></td>
	</tr>
	<?php	
}
?>
</table>
   </figure>
   <hgroup>
	<h2>RAHMA ONLINE</h2>
	<h3>Penjualan di Instagram</h3>
   </hgroup>
   <p>Kriteria Produk yang Bagus Dijual Secara Online
Dalam memilih produk yang ingin Anda jual secara online, dari hasil survei dan pengalaman saya dan banyak alumni yang telah banyak menjual berbagai macam produk secara online, ada tiga kriteria dalam menentukan produk yang bagus dijual secara online.
1) Harga Produk yang Tidak Terlampau Tinggi
Kebanyakan produk/jasa yang dibeli secara online sebagian besar adalah barang-barang yang harganya tidak terlampau tinggi. MarkPlus pernah menyebutkan angkanya dibawah Rp 300.000.
2) Produk yang Populer atau Banyak Dicari Secara Online
Nah bagaimana tahu suatu produk banyak dicari secara online atau tidak? Jawabannya adalah melalui Riset Keyword. 
Jadi kesimpulannya, jika produk yang (ingin/sudah) Anda jual masuk dalam Top 10 Kategori Produk yang saya bahas diatas dan produk Anda juga lolos 3 kriteria yang baru saja saya jelaskan, saya percaya sangatlah besar kemungkinan bahwa produk yang Anda jual tersebut bisa sukses dijual secara online.</p>
 </article>    
 <article>
    
</section>
<aside>
  <section class="popular-recipes">
   <h2>Kategori</h2>
   	 <a href="">Produk Baru</a>
     <a href="">Brands</a>
     <a href="">Sale</a>
     <a href="">Pakaian</a>
	 <a href="">Sepatu</a>
	 <a href="">Tas</a>
     <a href="">Jam & Aksesoris</a>
	 <a href="">Sports</a>
	 <a href="">Batik</a>
  </section>
  <section class="contact-details">
   <h2>Kontak</h2>
    <p>penjualonlinekuyyyy<br />
    rahma
  </section>
</aside>
<footer>
	&copy; 2019 Rahma Yoga Darma Lestari
</footer>
	
</body>
</html>
<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> -->
	<!-- <title>Selamat Datang</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style> -->
	<!-- <title>Selamat datang di CodeIgniter</title>
</head> -->
<!-- <body> -->

<!-- <div id="container">
	<h1>Praktimum CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div> -->
<!-- <table border=1 id="tabelToko" class>
<?php
foreach ($data_toko_kirim as $data){
	?>
	<tr>
	<td><?= $data->kode ?></td>
	<td><?= $data->nama_toko ?></td>
	</tr>
	<?php	
}
?>
</table>
</body> -->
<!-- </html> -->