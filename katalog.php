<?php 
include "admin/koneksi.php";
?>
<div class="container">
  <div class="my-4">
    <div class="row justify-content-center">
      <div class="col-md-12">
          <table class="table table-striped table-hover text-center">
            <thead style="background-color: #00CED1;color: #000000">
                 <tr>
                 <th>#</th>
                 <th>Kode Barang</th>
                 <th>Nama Barang</th>
                 <th>Harga Satuan</th>
                 <th>Warna</th>
                 <th>Gambar</th>
                 </tr>
            </thead>
        <tbody>
             <?php
                try{
                  $query = $conn->prepare("SELECT * FROM barang");
                  $query->execute();
                   $no = 1;
                   while ($data = $query->fetch(PDO::FETCH_OBJ))
                   {
                   echo "<form action='?page=katalog' method='post'>";
                   echo "<input type='hidden' name='id' value='".$data->id_barang."'>";
                   echo "<tr>";
                   echo "<td>".$no."</td>";
                   echo "<td>".$data->kode_barang."</td>";
                   echo "<td>".$data->nama_barang."</td>";
                   echo "<td>".$data->harga_satuan."</td>";
                   echo "<td>".$data->warna."</td>";
                   echo "<td><img src='admin/foto/".$data->foto."' widht='70' height='70'></td>";
                   echo "</tr>";
                   echo "</form>";
                   $no++;
                   }
                }
                catch(PDOException $e){
                  echo $e->getMessage();
                }
             ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>