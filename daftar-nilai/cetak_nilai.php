<!DOCTYPE html>
<html>
<head>
  <title>Admin TPQ | Dashboard</title>
</head>
<body>
 
  <center>
 
    <h2>DATA NILAI SANTRI</h2>
    <h4>TPQ</h4>
 
  </center>
 
  <?php 
  include '../koneksi.php';
  ?>
 
  <table border="1" style="width: 100%">
    <tr>
                      <th width="1%">No</th>
                      <th width="1%">NIS</th>
                      <th>Nama</th>
                      <th width="1%">Tahfidz</th>
                      <th width="1%">Aqidah</th>
                      <th width="1%">Fiqih</th>
                      <th width="1%">Tajwid</th>
                      <th width="1%">Mahfudlot</th>
                      <th width="1%">Persholatan</th>
                      <th width="1%">Imla'/Khot</th>
                      <th width="1%">Semester</th>
                      <th width="1%">Tahun</th>
                      
    </tr>
    <?php 
    $no = 1;
    $sql = mysqli_query($koneksi,"SELECT * FROM nilai JOIN santri ON nilai.nis = santri.nis");
    while($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nis']; ?></td>
    <td><?php echo $data['nama_santri']; ?></td>
    <td><?php echo $data['tahfidz']; ?></td>
    <td><?php echo $data['aqidah']; ?></td>
    <td><?php echo $data['fiqih']; ?></td>
    <td><?php echo $data['tajwid']; ?></td>
    <td><?php echo $data['mahfudlot']; ?></td>
    <td><?php echo $data['persholatan']; ?></td>
    <td><?php echo $data['imla']; ?></td>
    <td><?php echo $data['semester']; ?></td>
    <td><?php echo $data['tahun']; ?></td>
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