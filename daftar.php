<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login">
		<form action="#" method="POST" onSubmit="validasi()" >
			<div>
				<label>Nama Lengkap:</label>
				<input type="text" name="nama" id="nama" />
			</div>
			<div>
				<label>NIM:</label>
				<input type="text" name="nim" id="nim" />
			</div>
			<div>
				<label>Email:</label>
				<input type="email" name="email" id="email" />
			</div>
			<div>
				<label>Alamat:</label>
				<textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
			</div>
			<div>
				<input type="submit" value="Daftar" class="tombol">
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var email = document.getElementById("email").value;
		var alamat = document.getElementById("alamat").value;
		var nim = document.getElementById("nim").value;
		var number =/^[0-9]+$/;
		if (nama != "" && nim != "" && email!="" && alamat !="") {
			return false;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
		if (!nim.match(number)){
			alert("Nim Harus Angka !");
			return false;
		}
	}
</script>
</html>