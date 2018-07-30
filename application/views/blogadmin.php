

<!-- content -->
<div class="container"> 
	<div class="row">
		<div class="col-md-8">
			<?php foreach ($berita as $br ):?>
			<div class="row">
				<div class="col-md-4"> <img src="<?php echo base_url(); ?>assets/img/<?php echo $br->image; ?>" class="img-thumbnail">
					<hr>
				</div>
				<div class="col-md-6">
				<a href="<?= current_url().'/detail/'.$br->id_berita.'/'.$br->slug; ?>"> <h3> <?php echo $br->judul_berita; ?></h3></a>
				<a href=""> <i class="fa fa-user" aria-hidden="true"></i> Admin</a>
				<a href=""> <i class="fa fa-trash"> </i> Hapus berita</a>
				<p><?php echo word_limiter($br->berita,30); ?></p>
				
		</div>
	</div>
<?php endforeach; ?>
</div>