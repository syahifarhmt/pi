<!-- content -->
<div class="container"> 
	<div class="row">
		<div class="col-md-8">
			<h2><?php echo $detail->judul_berita; ?></h2>
			<img src="<?php echo base_url(); ?>assets/img/<?php echo $detail->image; ?>" class="img-thumbnail">
			<hr>
			<p align="justify"><?php echo $detail->berita; ?></p>
			<hr>
				
				<br> <br>
				<h2>Komentar</h2>
				<!--<?php echo validation_errors(); ?>-->

				<?php 
				if (validation_errors()== TRUE): ?>
				<div class="alert-warning alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Warning!</strong> <?php echo validation_errors(); ?>
				</div>
			<?php endif; ?>

				<form action="" method="post">
					<label>Email</label>
					<input class="form-control" type="text" name="email"></input>
					<label>Komentar</label>
					<textarea class="form-control" name="komentar"></textarea>
					<br>
					<input class="btn btn-primary" type="submit" value="Kirim" name="kirim"></input> 
				</form>
				<br> <br>
				<h4>LIST KOMENTAR</h4>
				<hr>
				<?php foreach ($komentar as $k):?>
					<label> <?php echo $k->email; ?></label> <br>
					<p><i> <?php echo $k->komentar; ?></i></p>
				<?php endforeach; ?>
			
</div>