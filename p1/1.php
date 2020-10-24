<!DOCTYPE html>
 
<?php
$kaliangkapertama = $_POST['kaliangkapertama'];
$kaliangkakedua = $_POST['kaliangkakedua'];
$hasilkali = ($kaliangkapertama*$kaliangkakedua);
?>
 
<?php
$kurangangkapertama = $_POST['kurangangkapertama'];
$kurangangkakedua = $_POST['kurangangkakedua'];
$hasilkurang = ($kurangangkapertama-$kurangangkakedua);
?>
 
<?php
$tambahangkapertama = $_POST['tambahangkapertama'];
$tambahangkakedua = $_POST['tambahangkakedua'];
$hasiltambah = ($tambahangkapertama+$tambahangkakedua);
?>
 
<?php
$bagiangkapertama = $_POST['bagiangkapertama'];
$bagiangkakedua = $_POST['bagiangkakedua'];
$hasilbagi = ($bagiangkapertama/$bagiangkakedua);
?>
 
    <title>Calculator</title>
        <div>
            <form method="POST">
                <strong>
                    Kali: 
                        <input name="kaliangkapertama" type="number" id="kaliangkapertama" value="<?php echo $kaliangkapertama; ?>" /> * 
                        <input name="kaliangkakedua" type="number" id="kaliangkakedua" value="<?php echo $kaliangkakedua; ?>" /> 
                        <input type="submit" value=" = " />
                        <?php echo $kaliangkapertama; ?> * <?php echo $kaliangkakedua; ?> = <?php echo $hasilkali; ?>
                </strong>
            </form>
        </div>
    <br>
        <div>
            <form method="POST">
                <strong>
                    Kurang:
                        <input name="kurangangkapertama" type="number" id="kurangangkapertama" value="<?php echo $kurangangkapertama; ?>" /> - 
                        <input name="kurangangkakedua" type="number" id="kurangangkakedua" value="<?php echo $kurangangkakedua; ?>" /> 
                        <input type="submit" value=" = " />
                        <?php echo $kurangangkapertama; ?> - <?php echo $kurangangkakedua; ?> = <?php echo $hasilkurang; ?>
                </strong>
            </form>
        </div>
    <br>
        <div>
            <form method="POST">
                <strong>
                    Tambah:
                        <input name="tambahangkapertama" type="number" id="tambahangkapertama" value="<?php echo $tambahangkapertama; ?>" /> + 
                        <input name="tambahangkakedua" type="number" id="tambahangkakedua" value="<?php echo $tambahangkakedua; ?>" /> 
                        <input type="submit" value=" = " />
                        <?php echo $tambahangkapertama; ?> + <?php echo $tambahangkakedua; ?> = <?php echo $hasiltambah; ?>
                </strong>
            </form>
        </div>
    <br>
        <div>
            <form method="POST">
                <strong>
                    Bagi:
                        <input name="bagiangkapertama" type="number" id="bagiangkapertama" value="<?php echo $bagiangkapertama; ?>" /> : 
                        <input name="bagiangkakedua" type="number" id="bagiangkakedua" value="<?php echo $bagiangkakedua; ?>" /> 
                        <input type="submit" value=" = " />
                        <?php echo $_POST['bagiangkapertama']; ?> : <?php echo $_POST['bagiangkakedua']; ?> = <?php echo $hasilbagi; ?>
                </strong>
            </form>
        </div>