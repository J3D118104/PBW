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
    .p {
        color: rgb(250, 250, 250);
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 18px;
        text-align: justify;
    }
</script>
<h2 class="text-light" style="font-weight: bold;">Tabel Data Mahasiswa</h2>
<div class="col-sm">
<div class="mx-auto" style=" width: 75%;">
            <div class="card mt-5 " style="background :#d4d0c5; ">
                <div class="card-body ">

<table class="table">
  <thead class="thead-dark">
	<tr>
		<th scope="col">No</th>
		<th scope="col">NIM</th>
		<th scope="col">Nama</th>
		<th scope="col">Jenis Kelamin</th>
		<th scope="col">Agama</th>
		<th scope="col">Olahraga</th>
		<th scope="col">Opsi</th>		
	</tr>
	<?php 
	include "00_koneksi.php";
	
	$nomor = 1;
	$query = mysqli_query($kon,"SELECT * FROM mahasiswa");
	while($data=mysqli_fetch_assoc($query)){
	?>
			<form action="03_aksi.php">
	<tr>
		<td class="text-primary"><?php echo $nomor++; ?></td>
		<td><?php echo $data['nim']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td>
			<?php 
			if ($data['jk'] == 'L') {
				echo "Laki - Laki";
			}else{
				echo "Perempuan";
			}
			?>
		</td>
		<td><?php echo $data['agama']; ?></td>
		<td><?php echo $data['olahraga']; ?></td>
		<td>
				<input class="btn btn-primary" type="submit" name="aksi" value="Edit"> |
				<input class="btn btn-danger" type="submit" name="aksi" value="Delete">
				<br>
				<?php echo "<input type=\"hidden\" name=\"id\" value=\"".$data["id"]."\">"; ?>			
				<?php echo "<input type=\"hidden\" name=\"nim\" value=\"".$data["nim"]."\">"; ?>			
				<?php echo "<input type=\"hidden\" name=\"nm\" value=\"".$data["nama"]."\">"; ?>
				<?php echo "<input type=\"hidden\" name=\"jk\" value=\"".$data["jk"]."\">"; ?>			
				<?php echo "<input type=\"hidden\" name=\"agama\" value=\"".$data["agama"]."\">"; ?>		
				<?php echo "<input type=\"hidden\" name=\"olahraga\" value=\"".$data["olahraga"]."\">"; ?>					
		</td>
	</tr>
			</form>
	<?php } ?>
</table>
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