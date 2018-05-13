<html>

<head>
  <title>MVC</title>
</head>
<body>
  <form action="" method="POST">
    <table>
      <tr>
        <td>Nomor Program: </td>
        <td><input type="text" name="nomorProgram" value="<?=$row[0]?>" size="30" readonly /></td>
      </tr>
      <tr>
        <td>Nama Program: </td>
        <td><input type="text" name="namaProgram" value="<?=$row[1]?>" size="30"/></td>
      </tr>
      <tr>
        <td>Surat Keterangan: </td>
        <td><input type="text" name="suratKeterangan" value="<?=$row[2]?>" size="30"/></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="Submit"/></td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$main = new c_proker();
$main->update();
}
