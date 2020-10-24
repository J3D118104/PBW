<!DOCTYPE html>
<html>
<head>
    <title>LOOPING</title>
</head>
<body>
    <?php
        $menu = array("Mie Rebus","Mie Goreng","Burcangjo","Gehu","Bala-bala","Kopi susu","Bandrek","Teh manis");
        $harga = array("Mie Rebus"=>7000,"Mie Goreng"=>8000,"Burcangjo"=>6000,"Gehu"=>1000,
                     "Bala-bala"=>1000,"Kopi susu"=>5000,"Bandrek"=>3000,"Teh manis"=>3000);
        /*foreach ($harga as $x=>$y) {
            echo "$x harganya $y <br>";
        } */   
    ?>
<center>
    <form>
        <select name="menunya">
        <?php
            foreach ($menu as $item ) {
                echo "<option value= \"$item\">$item
                
                </option>";
            }
        ?>
        </select>
        <input type="submit" name="psn" value="pesan"> 
            <h2>Daftar Pesanan</h2>
       <?php
        if (isset($_GET['psn'])) {
            //  echo $_GET['menunya'];
            if (isset($_GET['orderSblm'])) {
                $order=$_GET['orderSblm'];
            } else {
                $order= array();
            }
            
            array_push($order, $_GET['menunya']);
            
            foreach ($order as $item) {
                echo "<input type=\"hidden\" name=\"orderSblm[]\" value=\"$item\">";
            }
           // print_r($order);
           $i = 1;
            $total =0;
           foreach ($order as $item) {
                $x = $item;
               echo "$i.$x (".$harga[$x].")<br>";
               $i++;
               $total += $harga[$x];

                          }
            echo "-------------------------+<br> $total";
        }
    ?>
     </form>
</center>
</body>
</html>