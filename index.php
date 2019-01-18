<!DOCTYPE html>
<head>
          
    <title>Kalkulator Berat Badan</title>
  
</head>
<body>
  <form method="post" action="">
     
  
   <div align="center">
<b>Kalkulator Berat Badan</b></div>
  
  
   <table align="center">
<tr>
    <td><input type="text" name="berat" size="10" placeholder="Tinggi"></td> 
    <td><input type="text" name="tinggi" size="10" placeholder="Berat"></td>
    <td><select name="jk">
     <option name="p">P</option>
     <option name="l">L</option>

    <td><input type="submit" name="submit" value="OK"></td>
      
    </tr>
</table>
</form>
</br>
  <center>
  <?php
   include "KBB.php";

   $hasil = new KBB;

   if (isset($_POST['submit'])){
    $hasil -> berat_ideal($_POST['tinggi'],$_POST['berat'],$_POST['jk']);
    echo $hasil -> berat_ideal(); ;
   }

  ?>
  </center>
</body>
  
</html>