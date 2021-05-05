<html>
   <head>
      <title>Menampilkan Data Tabel MySQL Dengan mysqli_fetch_array</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>



 <h3>Tabel pelanggan (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>ID PELANGGAN</th>
               <th>NAMA PELANGGAN</th>
               <th>ALAMAT PELANGGAN</th>
               <th>WA PELANGGAN</th>

            </tr>
         </thead>
         <?php
          include 'koneksi.php';     
            $sql = 'SELECT  * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>




       <h3>Tabel barang (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>ID BARANG</th>
               <th>NAMA BARANG</th>
               <th>HARGA BARANG</th>
               <th>ID PELANGGAN</th>

            </tr>
         </thead>
         <?php
          include 'koneksi.php';     
            $sql = 'SELECT  * FROM barang';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
             
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>



      <h3>Inner Join  (mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>

               <th>NAMA PELANGGAN</th>
               <th>ALAMAT PELANGGAN</th>
               <th>NAMA BARANG</th>
               <th>HARGA BARANG</th>
            
            </tr>
         </thead>
         <?php
            include 'koneksi.php';     
            $sql = 'SELECT id_barang,nama_barang,harga_barang,nama_pelanggan,alamat_pelanggan FROM barang INNER JOIN pelanggan on barang.id_pelanggan=pelanggan.id_pelanggan';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
       
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['alamat_pelanggan'] ?></td>
               <td><?php echo $row['nama_barang'] ?></td>
               <td><?php echo $row['harga_barang'] ?></td>
             
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>



      <h3>Outer Join  (mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>

               <th>NAMA PELANGGAN</th>
                <th>ALAMAT PELANGGAN</th>
               <th>NAMA BARANG</th>
               <th>HARGA BARANG</th>
            
            </tr>
         </thead>
         <?php
            include 'koneksi.php';     
            $sql = 'SELECT id_barang,nama_barang,harga_barang,nama_pelanggan,alamat_pelanggan FROM barang RIGHT OUTER JOIN  pelanggan on barang.id_pelanggan=pelanggan.id_pelanggan';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
       
               <td><?php echo $row['nama_pelanggan'] ?></td>
                <td><?php echo $row['alamat_pelanggan'] ?></td>
               <td><?php echo $row['nama_barang'] ?></td>
               <td><?php echo $row['harga_barang'] ?></td>
             
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>



   </body>
</html>