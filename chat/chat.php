<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Room</title>
	<meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="icon" href="gambar/favicon.ico" type="image/x-icon">
</head>
<body style=" background-image:url('../gambar/bg.jpeg'); color: #eee;">
	<nav>
	<div class="topnav" id="myTopnav">
  <a href="../index.html" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Features
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="../Genre.html">Genres</a>
      <a href="#">Released Game</a>
    </div>
  </div>
  <a href="../team.html">Team</a>
  <a href="#about">Request Game</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
	</div>
	</nav>
 <h3 style="text-align: center;">Ruang Chat</h3>
<div class="container mb-3">
	<form method="POST" id="form_komen">
		<div class="form-group">
			<input style="background-color: #1d1d1d; color: #fff;"  type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="Masukkan Nama" />
		</div>
		<div class="form-group">
			<textarea style="background-color: #1d1d1d; color: #fff;" name="komen" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
		</div>
	</form>
	<hr>
	<h4 class="mb-3">Komentar :</h4>
	<span id="message"></span>
   
   	<div id="display_comment"style="height:400px; overflow:auto; border:1px solid gray;
   	padding: 7px;"></div>
</div>
<footer>
    	<div class="bottom">
      		<center>
        		<span class="credit">Designed By <a href="">Juned Setiawan</a> | </span>  
        		<span class="far fa-copyright"></span><span> <?php echo date('Y'); ?> All rights reserved</span>
      		</center> 
      	</div>
</footer>
</body>
<script>
		$(document).ready(function(){
			//Mengirimkan Token Keamanan
			$.ajaxSetup({
	            headers : {
	                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
        
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				let nama_pengirim = $('#nama_pengirim').val();
				let komen = $('#komen').val();
				
				if(nama_pengirim==''){
				    alert("Nama Pengirim Harus disii");
				} else if(komen==''){
				    alert("Komentar Harus disii");
				} else {
    				var form_data = $(this).serialize();
    				$.ajax({
    					url:"tambah_komentar.php",
    					method:"POST",
    					data:form_data,
    					success:function(data){
    						$('#form_komen')[0].reset();
    						$('#komentar_id').val('0');
    						load_comment();
    					}, error: function(data) {
    		            	console.log(data.responseText)
    		            }
    				})
				}
			});
 
			load_comment();
 
			function load_comment(){
				$.ajax({
					url:"ambil_komentar.php",
					method:"POST",
					success:function(data){
						$('#display_comment').html(data);
					}, error: function(data) {
		            	console.log(data.responseText)
		            }
				})
			}
 
			$(document).on('click', '.reply', function(){
				var komentar_id = $(this).attr("id");
				$('#komentar_id').val(komentar_id);
				$('#nama_pengirim').focus();
			});
		});
	</script>
	<script src="../script/script.js"></script>
</html>