<!DOCTYPE html>
<html>
<head>
  <title>Aritmatika</title>
</head>
<body>
  <h2>COBA KALKULATOR!!!</h2>
  <form>
  		<input type="number" name="bil1" 
      <?php
        if(isset($_GET['bil1'])) { 
          echo 'value="'.$_GET['bil1'].'"';
        }

      ?>
        >
        <select name="opr">
        	<option value="+"
          <?php
          if(isset($_GET['opr'])&& $_GET['opr']=='+')
              echo "selected";
          ?>
          >+</option>
            <option value="-"
            <?php
          if(isset($_GET['opr'])&& $_GET['opr']=='-')
              echo "selected";
          ?>
            >-</option>
            <option value="x"
            <?php
          if(isset($_GET['opr'])&& $_GET['opr']=='x')
              echo "selected";
          ?>
             >x</option>
            <option value="/"
            <?php
          if(isset($_GET['opr'])&& $_GET['opr']=='/')
              echo "selected";
          ?>
            >/</option>
        </select>
        <input type="number" name="bil2"
        <?php
        if(isset($_GET['bil2'])) { 
          echo 'value="'.$_GET['bil2'].'"';
        }
      ?>
      >
        <input type="submit" name="sum" value="=">
	<?php
		if (isset($_GET['bil1']) && isset($_GET['bil2'])) {
        if (is_numeric($_GET['bil1']) && is_numeric($_GET['bil2'])) {
            switch ($_GET["opr"]) {
          case "+": $hasil= $_GET['bil1']+$_GET['bil2']; break;
          case "-": $hasil= $_GET['bil1']-$_GET['bil2']; break;
          case "x": $hasil= $_GET['bil1']*$_GET['bil2']; break;
          case "/": $hasil= $_GET['bil1']/$_GET['bil2']; break;
        }
        echo $hasil;
      }  
    
    }
	?>




  </form>
</body>
</html>