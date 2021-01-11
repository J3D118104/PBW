<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tunggu Ntar</title>
<link href='<?php echo base_url('asset/index/Logo.png'); ?>' rel='shortcut icon'>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo base_url('asset/rumushitung/rumushitung.css'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   
<script id="applicationScript" type="text/javascript" src="<?php echo base_url('asset/rumushitung/rumushitung.js'); ?>"></script>
</head>
<body>
<div id="Custom_Size__1">
	<div id="ID3">
		<img id="Background" src="<?php echo base_url('asset/rumushitung/Background.png'); ?>" srcset="<?php echo base_url('asset/rumushitung/Background.png'); ?> 1x">
		<img id="Layer_1" src="<?php echo base_url('asset/rumushitung/Layer_1.png'); ?>" srcset="<?php echo base_url('asset/rumushitung/Layer_1.png'); ?> 1x">
		<img id="Pilih__Bangun_Datar" src="<?php echo base_url('asset/rumushitung/Pilih__Bangun_Datar.png'); ?>" srcset="<?php echo base_url('asset/rumushitung/Pilih__Bangun_Datar.png'); ?> 1x">
		<img id="Pilih__Rumus" src="<?php echo base_url('asset/rumushitung/Pilih__Rumus.png'); ?>" srcset="<?php echo base_url('asset/rumushitung/Pilih__Rumus.png'); ?> 1x">
		<img id="Input__Data" src="<?php echo base_url('asset/rumushitung/Input__Data.png'); ?>" srcset="<?php echo base_url('asset/rumushitung/Input__Data.png'); ?> 1x">
		<img id="Input__Data_copy" src="<?php echo base_url('asset/rumushitung/Input__Data_copy.png'); ?>" srcset="<?php echo base_url('asset/rumushitung/Input__Data_copy.png'); ?>">
        
        <form method="post" action="<?php echo site_url('Rumus_hitung/hasil'); ?>">
			<select name="bangun" id="form_bangun" style="background:url('<?php echo base_url('asset/rumushitung/form_bangun.png'); ?>')" srcset="<?php echo base_url('asset/rumushitung/form_bangun.png'); ?> 1x">
                <option value="persegi"
                <?php
                if(isset($_GET['bangun'])&& $_GET['bangun']=='persegi')
                    echo "selected";
                ?>
                >persegi</option>
                    <option value="persegi_panjang"
                    <?php
                if(isset($_GET['bangun'])&& $_GET['bangun']=='persegi_panjang')
                    echo "selected";
                ?>
                    >persegi panjang</option>
                    <option value="segitiga"
                    <?php
                if(isset($_GET['bangun'])&& $_GET['bangun']=='segitiga')
                    echo "selected";
                ?>
                >segitiga</option>
                    <option value="lingkaran"
                    <?php
                if(isset($_GET['bangun'])&& $_GET['bangun']=='lingkaran')
                    echo "selected";
                ?>
                >lingkaran</option>
			</select>
			<select name="rms" id="form_rumus" style="background:url('<?php echo base_url('asset/rumushitung/form_rumus.png'); ?>');" srcset="<?php echo base_url('asset/rumushitung/form_rumus.png'); ?> 1x">
					<option value="keliling"
				<?php
				if(isset($_GET['rms'])&& $_GET['rms']=='keliling')
					echo "selected";
				?>
				>keliling</option>
					<option value="luas"
					<?php
				if(isset($_GET['rms'])&& $_GET['rms']=='luas')
					echo "selected";
				?>
					>luas</option>
			</select>

            <input type="number" name="bil1" id="data" style="background:url('<?php echo base_url('asset/rumushitung/data.png'); ?>')" srcset="<?php echo base_url('asset/rumushitung/data.png'); ?> 1x"  placeholder="Sisi/Panjang/Jari-jari/Alas"
                    <?php
                        if (isset($_GET['bil1'])) {
                            echo 'value="'.$_GET['bil1'].'"';
                        }
                    ?>
                >
            <input type="number" name="bil2" id="data_copy" style="background:url('<?php echo base_url('asset/rumushitung/data_copy.png'); ?>')" srcset="<?php echo base_url('asset/rumushitung/data_copy.png'); ?> 1x"  placeholder="Sisi/Tinggi"
                    <?php
                        if (isset($_GET['bil2'])) {
                            echo 'value="'.$_GET['bil2'].'"';
                        }
                    ?>
                >
            <input type="number" name="bil3" id="data_copy_2" style="background:url('<?php echo base_url('asset/rumushitung/data_copy_2.png'); ?>')" srcset="<?php echo base_url('asset/rumushitung/data_copy_2.png'); ?> 1x" placeholder="Sisi ke-3"
                    <?php
                        if (isset($_GET['bil3'])) {
                            echo 'value="'.$_GET['bil3'].'"';
                        }
                    ?>
                >
			<input type="submit" name="sum" value="hitung" id="Hitung" style="background:url('<?php echo base_url('asset/rumushitung/Hitung.png'); ?>')" srcset="<?php echo base_url('asset/rumushitung/Hitung.png'); ?> 1x">
			<a href="<?php echo site_url('Rumus_hitung'); ?>" type="reset" name="clr" value="Bersihkan"  srcset="reset.png 1x" class="btn" ></a>
		</form>
<div id="Hasil" style="background:url('<?php echo base_url('asset/rumushitung/Hasil.png'); ?>')" srcset="<?php echo base_url('asset/rumushitung/Hasil.png'); ?> 1x">
	<p>	
     <?php
     if (!empty($hasil)){
         echo $hasil;
     }
     ?>   
	<?php/*
   
   if (isset($_GET['bil1'])) {
       if (is_numeric($_GET['bil1']) && is_numeric($_GET['bil2'])) {
           if (($_GET['bangun']== 'persegi') or ($_GET['bangun']== 'persegi_panjang')){
               switch ($_GET["rms"]) {
                   case "keliling": $hasil= ($_GET['bil1']+$_GET['bil2']) * 2; break;
                   case "luas": $hasil= $_GET['bil1']*$_GET['bil2']; break;
                   }
               echo $hasil;
           }
          elseif ($_GET['bangun']== 'segitiga'){
               switch ($_GET["rms"]) {
                   case "keliling": $hasil= $_GET['bil1']+$_GET['bil2']+$_GET['bil3']; break;
                   case "luas": $hasil= ($_GET['bil1']*$_GET['bil2']) / 2; break;
                   }
               echo $hasil;
           }
       } 
       elseif (is_numeric($_GET['bil1'])){
           if ($_GET['bangun']== 'lingkaran'){
               switch ($_GET["rms"]) {
                   case "keliling": $hasil= ($_GET['bil1']* $_GET['bil1'])*3.14; break;
                   case "luas": $hasil= ($_GET['bil1']+$_GET['bil1'])*3.14; break;
                   }
               echo $hasil;
           }   
        }
   }
       
   */?>
   
   </p>
   </div>
		</a>
		<img id="Layer_2" src="<?php echo base_url('asset/rumushitung/Layer_2.png'); ?>" srcset="<?php echo base_url('asset/rumushitung/Layer_2.png'); ?> 1x">
		</a>

		</a>
		<a href="<?php echo site_url('Pilih'); ?>">
		<img id="Kembali" src="<?php echo base_url('asset/rumushitung/Kembali.png'); ?>" srcset="<?php echo base_url('asset/rumushitung/Kembali.png'); ?> 1x">
		</a>
	</div>
</div>
<?php 
/*
      if (isset($_GET['sum'])) { //mengecek udah ditekan atau belum
          if ($_GET['sum']=="hitung") {
              header("location:../../../index.html");
          } else {
              if (strlen($_GET['bangun'])) { //strlen mengukur panjang string || Tujuannya mengecek data kosong atau tidak
                  include "../../../00_koneksi.php";
                  mysqli_query($kon, "INSERT INTO `penggunaan` (`nama_rumus`,`nama_bangun_datar`)
                            VALUES (NULL, '".$_GET['rms']."','".$_GET['bangun']."')");
              }
          }
      }
      */
?>
</body>
</html>