<div class="col-md-4">
			<h3> Most Popular</h3> 
			<hr>
			<?php foreach ($sidebar as $sd): ?>
			<div class="mp">
			<a href="http://localhost/blog_profile/index.php/blog/detail/<?php echo $sd->id_berita; ?>/<?php echo $sd->slug; ?>"> <h5><?php echo $sd->judul_berita; ?></h5></a> 
			<p><?php echo word_limiter($sd->berita,30); ?></p> 
			</div>
			<hr>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<!-- content -->