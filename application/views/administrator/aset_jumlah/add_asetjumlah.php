<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center>
  
  </center>
  <form action="<?php echo base_url(). 'data_aset1/Submit_Aset'; ?>" method="post">
    <table style="margin:20px auto;">
      <tr>
        <td>ID</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>no</td>
        <td><input type="text" name="nomorSeri"></td>
      </tr>
      <tr>
        <td>Jenis</td>
        <td><input type="text" name="jenisAset"></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><input type="text" name="statusAset"></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="text" name="jumlah"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Tambah"></td>
      </tr>
    </table>
  </form> 
</body>
</html>       

