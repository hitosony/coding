
<h6>
  <div class="row">
<div class="col s12" align="center"><h3>Tampilkan Siswa</h3></div>
<div class="col s6"></div>
</div>
  <div class="container">
    <div class="row">
      
<table class=" striped responsive-table">
        <thead>
          <tr>
              <th data-field="no" width="50px">NIS</th>
              <th data-field="name" width="100px">Nama Siswa</th>
              <th data-field="kkm" width="100px">Alamat Siswa</th>
              <th data-field="price" width="80px">Tanggal Lahir Siswa</th>
              <th data-field="no" width="100px">Nama Wali</th>
              <th data-field="no" width="100px">Alamat Wali
              <th data-field="no" style="width: 100px;">Aksi</th></th>
          </tr>
        </thead>

        <tbody>
          <?php
  $sql= "SELECT NIS,NAMA_SISWA,ALAMAT_SISWA,TGL_LAHIR_SISWA, NAMA_WALI,ALAMAT_WALI FROM SISWA";
  $data= mysql_query ($sql, $konek);
  while ($record = mysql_fetch_array ($data))
  {
    echo "<tr>";
    echo "<td>$record[NIS]</td>";
    echo "<td>$record[NAMA_SISWA]</td>";
    echo "<td>$record[ALAMAT_SISWA]</td>";
    echo "<td>$record[TGL_LAHIR_SISWA]</td>";
    echo "<td>$record[NAMA_WALI]</td>";
    echo "<td>$record[ALAMAT_WALI]</td>";
    echo "<td><a href='EditSiswa.php?NIS=$record[NIS]'><i class="."material-icons".">mode_edit</i></a><a href='ksiHapusSiswa.php?NIS=$record[NIS]'><i class="."material-icons".">delete</i></a></td>";
    echo "</tr>";
    }
  ?>
        </tbody>
      </table>
</h6>
</div>
</div>
</div>
<a class="btn-floating btn-large waves-effect waves-light red right" href="?page=tambahsiswa"><i class="material-icons">add</i></a>