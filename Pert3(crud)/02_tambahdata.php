<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>data mahasiswa</title>
</head>

<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<h2  style="font-weight: bold;"> <a class="text-white" href="01_tampilData.php">Data Mahasiswa<a></h2>              
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a style="float : right;" class="btn btn-success" href="02_tambahdata.php">Tambah Data Mahasiswa</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

<body style="background :url(bg/unnamed.jpg); ">
<script>

.card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        padding: 20px;
        margin-top: 20px;
    }

</script>
<h2 class="text-light" style="font-weight: bold;">Form Tambah Data Mahasiswa </h2>
<div class="col-sm">
<div class="mx-auto" style=" width: 50%;">
            <div class="card mt-5 " style="background :#d4d0c5; ">
			<div class="card-header text-center text-light" style="font-weight: bold; background:#3b362a;">
    Silahkan Isi Semua Data
  </div>
			    <div class="card-body ">

<form>
	<table>
		<tr>
			<td class="text-primary" style="font-weight: bold;">NIM :</td>
			<td><input type="text" name="nim"></td>					
		</tr>	
		<tr>
			<td class="text-primary" style="font-weight: bold;">Nama :</td>
			<td><input type="text" name="nm"></td>					
		</tr>	
		<tr>
			<td class="text-primary" style="font-weight: bold;">Jenis Kelamin :</td>
			<td>
				<input type="radio" name="jk" value="L"> Laki- Laki
				<input type="radio" name="jk" value="P"> Perempuan
			</td>					
		</tr>
		<tr>
			<td class="text-primary" style="font-weight: bold;">Agama :</td>
			<td>
				<select name="agama">
					<option></option>
					<option>Islam</option>
					<option>Hindu</option>
					<option>Kristen</option>
					<option>Budha</option>
					<option>Konghucu</option>
					<option>Katholik</option>
				</select>
			</td>					
		</tr>	
		<tr>
			<td class="text-primary" style="font-weight: bold;">Olahraga :</td>
			<td>
				<input type="checkbox" name="olahraga[]" value="Sepak Bola"> Sepak Bola
				<input type="checkbox" name="olahraga[]" value="Basket"> Basket
				<input type="checkbox" name="olahraga[]" value="Futsal"> Futsal
				<input type="checkbox" name="olahraga[]" value="Renang"> Renang
				<input type="checkbox" name="olahraga[]" value="Badminton"> Badminton
			</td>					
		</tr>
		<tr>
			<td></td>
			<td>
			    <input class="btn btn-success" type="submit" name="sub" value="Simpan Data Baru">
			    <input class="btn btn-primary" type="submit" name="sub" value="Kembali ke Tampil Data">
			</td>					
		</tr>				
	</table>
</form>

<?php
	include "00_koneksi.php";
    if (isset($_GET['sub'])) { //mengecek udah ditekan atau belum	
		if ($_GET['sub']=="Kembali ke Tampil Data"){
		  header("location:01_tampilData.php");
		}
		else{
		    //mulai sini
		    $a = 1;
	  		$cek = mysqli_query($kon,"SELECT * FROM mahasiswa");
	  		while ($datacek = mysqli_fetch_assoc($cek)) {
	  			# code...
	  			if ($_GET['nim'] == $datacek['nim']) {
	  				$a = 0;
	  				echo "NIM tidak boleh sama";
	  			}
	  		}
		  	if (strlen($_GET['nim']) && strlen($_GET['nm']) && strlen($_GET['jk']) && strlen($_GET['agama'])) { //strlen mengukur panjang string || Tujuannya mengecek data kosong atau tidak
		  		if ($a == 1) {
	                @$olahraga = implode(", ", $_GET['olahraga']);
	                mysqli_query($kon,"INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jk`, `agama`, `olahraga`)
	                                   VALUES (NULL, '".$_GET['nim']."', '".$_GET['nm']."', '".$_GET['jk']."', '".$_GET['agama']."', '".$olahraga."')");
					
					#echo "INSERT INTO `mahasiswa` (`id`, `nama`)
	                  #                 VALUES (NULL, '".$_GET['nm']."')" ;				   
	                
					echo "<br>Data <b>".$_GET['nm']."</b> Telah Disimpan di Database";
				  		
		  		}
            }
            else
                echo "<br>Data Tidak Boleh Kosong";
		}
		//sampe sini
		
	}
?>
 </div>
</div>
</div>
</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>
</body>
</html>