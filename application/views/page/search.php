<!-- content -->
<div class="container"> 
	<div class="row">
		<div class="col-md-8">
<?php if ($count>=1):?>
		<?php foreach ($search as $br ):?>
			<div class="row">
				<div class="col-md-4"> <img src="<?php echo base_url(); ?>assets/img/<?php echo $br->image; ?>" class="img-thumbnail"> <hr>	</div>
				<div class="col-md-6">
				<a href="http://localhost/blog_profile/index.php/blog/detail/<?php echo $br->id_berita; ?>/<?php echo $br->slug; ?>"> <h3> <?php echo $br->judul_berita; ?></h3></a>
				<a href=""> <i class="fa fa-user" aria-hidden="true"></i> Syahifa Rahmita</a>

				<p><?php echo word_limiter($br->berita,30); ?></p>
			</div>
		</div>
	<?php endforeach; ?>
<?php else: ?>
<label> Tidak Ada Hasil! </label>
<?php endif; ?>
</div>