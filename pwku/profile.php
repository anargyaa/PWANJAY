<div class="container-profile">
	<?php
		include 'controller/conn.php';
	?>

	<form class="profile">
		<h2>Profile</h2>		
		<input type="text" name="" value="id" hidden />
		<span>Nama: *</span>
		<input type="text" readonly value="<?= $_SESSION['username'];?>" class="input-text"/>
		<br>
		<span>Jabatan: *</span>
		<input type="text" readonly value="<?= $_SESSION['jabatan'];?>" class="input-text"/>
	</form>
</div>