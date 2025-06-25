<!DOCTYPE html>
<html>
<head>
  <title>Admin TPQ | Dashboard</title>
</head>
<body>
 
  <center>
 
    <h2>DATA SANTRI</h2>
    <h4>TPQ</h4>
 
  </center>
 
  <?php 
  include '../koneksi.php';
  ?>
 
  <table border="1" style="width: 100%">
    <tr>
                      <th width="1%">No</th>
                      <th width="1%">NIS</th>
                      <th>Nama Santri</th>
                      <th>Tempat Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Nama Orangtua</th>
                      <th>Pekerjaan Orangtua</th>
                      <th width="1%">Kelas</th>
                      
    </tr>
    <?php 
    $no = 1;
    $sql = mysqli_query($koneksi,"select * from santri");
    while($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['nis']; ?></td>
    <td><?php echo $data['nama_santri']; ?></td>
    <td><?php echo $data['ttl']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td><?php echo $data['nama_ortu']; ?></td>
    <td><?php echo $data['pekerjaan_ortu']; ?></td>
    <td><?php echo $data['kelas']; ?></td>
    </tr>
    <?php 
    }
    ?>
  </table>
 
  <script>
    window.print();
  </script>
 
</body>
</html> 