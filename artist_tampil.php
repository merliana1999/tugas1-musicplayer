<h2>DATA ARTIS</h2>
	<a href="dashboard.php?page=artist_input" class="tambah" type="submit">Tambah</a>


<?php 

$art = new App\Artist();
$rows = $art->tampil();

?>

<table>
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>EDIT</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['artist_name']; ?></td>
			<td><a href="dashboard.php?page=artist_edit&id=<?php echo $row['artist_id']; ?>" class="tambah" type="submit">Edit</a></td>
		</tr>
	<?php } ?>
</table>