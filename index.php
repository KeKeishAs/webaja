<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head> 
<body>
<h1><center>Data Diriku</center></h1>

<br>
<table border="1" cellpadding="10" cellspacing= "0" align="center">
    <tr style="background-color: cyan">
        <th>No.</th>
        <th>No. Absen</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Hobi</th>
        <th>Foto</th>
    </tr>
        <?php $i =  1; ?>
    <tr>
        <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi, "Select * From dataku");
            while ($data = mysqli_fetch_array($query)) {
        ?>
        <td><?= $i; ?></td>
        <td><?php echo $data['no.absen']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['kelas']; ?></td>
        <td><?php echo $data['jurusan']; ?></td>
        <td><?php echo $data['hobi']; }?></td>
        <td><img src="IMG_20230726_154339_859.jpg" width="100" height="120" style="display:block; margin:auto;"></td>
    </tr>
        <?php $i++; ?>

</table>
</body>
</html>