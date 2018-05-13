<html>

<head></head>
<body>
<h2> Daftar Program Kerja BEM </h2>
    <div align="left">
      <table border="1" cellspacing="0">
        <tr align="center">
          <td>Nomor</td>
          <td>Nama Program Kerja</td>
          <td>Surat Keterangan</td>
          <td></td>
          <td></td>
        </tr>

        <?php
          while($row = $this->model->fetch($data)){
          echo "
          <tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td><a href='index.php?e=$row[0]'> Edit</a></td>
            <td><a href='index.php?d=$row[0]'> Delete</a></td>
          </tr>";
          }
        ?>
        </table><br>
      <a href='index.php?i=add'>Tambah</a></div>
</body>
</html>
