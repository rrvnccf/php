<table border='1'>
  <tr>
    <th>No</th>
    <th>NIK</th> 
    <th>Nama</th> 
    <th>Jurusan</th>
    <th>Action</th>
  </tr>
  <?php
    include_once ("koneksi.php");
    $hasil=mysqli_query($kon,"select * from mahasiswa order by nik desc");
    $no=0;
    // var_dump($hasil);
    while ($data = mysqli_fetch_array($hasil)):

      // var_dump($data);
        $no++;
  ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $data['nik']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['jurusan']; ?></td>
    <td><button class="btn btn-sm btn-success" type="button" onclick="edit('<?php echo $data['nik']; ?>')">
      <i class="fa fa-edit"></i> Edit
    </button>
    <button class="btn btn-sm btn-danger" type="button" onclick="hapus('<?php echo $data['nik']; ?>')">
      <i class="fa fa-trash-o"></i> Hapus
    </button>
  </td>
  </tr>
    <?php endwhile;?>
</table>