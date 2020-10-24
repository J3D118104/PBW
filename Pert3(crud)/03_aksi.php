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
<?php 
	@$dataolahraga = explode(", ", $_GET['olahraga']);
	if($_GET['aksi']=='Edit'){
	//	echo "Tombol yang ditekan Edit ";
?>

<h2 class="text-light" style="font-weight: bold;">Form Edit Data Mahasiswa </h2>
<div class="col-sm">
<div class="mx-auto" style=" width: 50%;">
            <div class="card mt-5 " style="background :#d4d0c5; ">
			<div class="card-header text-center text-light" style="font-weight: bold; background:#3b362a;">
    Silahkan Ubah Data
  </div>
				<div class="card-body ">

		<form>
			<table>
				<tr>
					<td class="text-primary" style="font-weight: bold;">NIM :</td>
					<td><input type="text" name="nim" value="<?php echo $_GET['nim']; ?>" disabled></td>					
				</tr>	
				<tr>
					<td class="text-primary" style="font-weight: bold;">Nama :</td>
					<td><input type="text" name="nm" value="<?php echo $_GET['nm']; ?>"></td>					
				</tr>	
				<tr>
					<td class="text-primary" style="font-weight: bold;">Jenis Kelamin :</td>
					<td>
						<input type="radio" name="jk" value="L" <?php if($_GET['jk']=='L'){echo 'checked';}?>> Laki- Laki
						<input type="radio" name="jk" value="P" <?php if($_GET['jk']=='P'){echo 'checked';}?>> Perempuan
					</td>					
				</tr>
				<tr>
					<td class="text-primary" style="font-weight: bold;">Agama :</td>
					<td>
						<select name="agama" value="<?php echo $_GET['nm']; ?>">
							<option></option>
							<option <?php if ($_GET['agama']=="Islam") { echo "selected"; } ?>>Islam</option>
							<option <?php if ($_GET['agama']=="Hindu") { echo "selected"; } ?>>Hindu</option>
							<option <?php if ($_GET['agama']=="Kristen") { echo "selected"; } ?>>Kristen</option>
							<option <?php if ($_GET['agama']=="Budha") { echo "selected"; } ?>>Budha</option>
							<option <?php if ($_GET['agama']=="Konghucu") { echo "selected"; } ?>>Konghucu</option>
							<option <?php if ($_GET['agama']=="Katholik") { echo "selected"; } ?>>Katholik</option>
						</select>
					</td>					
				</tr>	
				<tr>
					<td class="text-primary" style="font-weight: bold;">Olahraga :</td>
					<td>
						<input type="checkbox" name="olahraga[]" value="Sepak Bola" <?php if (in_array("Sepak Bola", $dataolahraga)) echo "checked";?>> Sepak Bola
						<input type="checkbox" name="olahraga[]" value="Basket" <?php if (in_array("Basket", $dataolahraga)) echo "checked";?>> Basket
						<input type="checkbox" name="olahraga[]" value="Futsal" <?php if (in_array("Futsal", $dataolahraga)) echo "checked";?>> Futsal
						<input type="checkbox" name="olahraga[]" value="Renang"<?php if (in_array("Renang", $dataolahraga)) echo "checked";?>> Renang
						<input type="checkbox" name="olahraga[]" value="Badminton" <?php if (in_array("Badminton", $dataolahraga)) echo "checked";?>> Badminton
					</td>					
				</tr>		
			</table>
    		<input class="btn btn-success" type="submit" name="sub" value="Simpan Perubahan Data">
    		<input class="btn btn-primary" type="submit" name="sub" value="Kembali ke Tampil Data">
			<input type="hidden" name="aksi" value="<?php echo "Edit";?>">
			<input type="hidden" name="idedit" value="<?php 
															if (isset($_GET['idedit']))
																echo $_GET['idedit'];
															else
																echo $_GET['id']; ?>">
		</form>
		<?php
		if (isset($_GET['sub'])){
			if ($_GET['sub']=='Kembali ke Tampil Data')
				header("location:01_tampilData.php");
			else{
				include "00_koneksi.php";
				@$olahraga = implode(", ", $_GET['olahraga']);
				mysqli_query($kon, "UPDATE `mahasiswa` SET `nama` = '". $_GET['nm'] ."', `jk` = '". $_GET['jk'] ."', `agama` = '". $_GET['agama'] ."', `olahraga` = '". $olahraga ."' WHERE `mahasiswa`.`id` = ". $_GET['idedit']);				
				
				echo "Data baru ". $_GET['nm'] ." sudah diubah";

			}
		}
	}
	else {
		//aksi delete
		echo "<form class=\"text-light\">";
		echo "Apakah Anda ingin menghapus data <b>". $_GET['nm']."</b>?";
		?>
		
			<input type="submit" name="keputusan" value="ya">
			<input type="submit" name="keputusan" value="tidak">
			<input type="hidden" name="iddelete" value="<?php echo $_GET['id']; ?>">
			<input type="hidden" name="aksi" value="<?php echo "Delete";?>">
			<input type="hidden" name="nm" value="<?php echo $_GET['nm'];?>">
		</form>
		<?php
		if (isset($_GET['keputusan'])){
			if($_GET['keputusan']=='ya'){
				include '00_koneksi.php';
				mysqli_query($kon, "DELETE FROM `mahasiswa` WHERE `mahasiswa`.`id` = ".$_GET['iddelete']);
			//	echo "DELETE FROM `mahasiswa` WHERE `mahasiswa`.`id` = ".$_GET['iddelete'];
			}
			header("location:01_tampilData.php");
		}
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