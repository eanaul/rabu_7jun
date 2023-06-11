<?php 	
include('koneksi.php');
$db = new database();
$data_siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	  <link rel="stylesheet" href="style.css">
</head>
<body>
	<body>
  <div class="nav">
    <ul>
      <li class="nav-links">
        <div class="menu">
        <a href ='index.php'>Home</a>
        <a href = '#'>List Data</a>
        <a href = 'add_data.php'>Tambah Data</a>
      </li>
    </ul>
  </div>
</div>
  
<center><table class="styled-table" border="1">
	<thead>
		<tr>
      <th>No</th>
			<th>Nis</th>
			<th>MTK</th>
			<th>Inggris</th>
			<th>DPK</th>
			<th>Rata - Rata</th>
      <th>Action</th>
		</tr>
	</thead>

		<?php
		// if( isset($_POST['tombol'])){
		// 	$MTK = $_POST['MTK'];
    // 	$Inggris = $_POST['Inggris'];
    // 	$DPK = $_POST['DPK'];
    // $total = $mtk + $inggris + $DPK;
    // $rata = $total / 3;
		// }

		$no = 1;
		foreach($data_siswa as $row){
			$sum_mapel    =$row['MTK']+$row['Inggris']+$row['DPK'];
			$rata_rata    =$sum_mapel / 3;
			?>
			<tbody>
			<tr class="active-row">
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['Nis']; ?></td>
				<td><?php echo $row['MTK']; ?></td>
				<td><?php echo $row['Inggris']; ?></td>
				<td><?php echo $row['DPK']; ?></td>
				<td><?php echo $rata_rata; ?></td>
				<!-- <td><a href="edit.php?id=<?php echo $row['Nis']; ?>&action=update">Tambah Data</a> -->
					<!-- <a href="delete.php?id=<?php echo $row['Nis']; ?>&action=hapus">Delete</a> -->
          <!-- <a href="delete.php?id=<?php echo $row['Nis']; ?>&action=hapus">Delete</a> -->
				<td><a class='delete' href="delete.php?id=<?php echo $row['Nis']; ?>&action=hapus"onclick="return confirm('Are you sure?')">Delete</a>

				</td>
		
			</tr>
		</tbody></center>
		
			<?php
		}
		?>
	
    
    <tr>
  </tr>
	</table>
	  <!-- <div id="content">
            <section class="links">
                <nav class="link-effect-1">
									<a href ='add_data.php'><span data-hover="tambah">Tambah Data</span></a>
								</nav>
            </section> -->
</body>
</html>