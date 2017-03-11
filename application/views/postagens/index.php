<h2><?= $title; ?></h2>
<br>
<br>
<?php foreach ($postagens as $tb_postagem) : ?>
	<h3><?php echo $tb_postagem['nme_titulo']; ?></h3>
	<small class="post-date">Postado em: <?php echo $tb_postagem['time_postagem']?></small>
	<br>
	<?php echo $tb_postagem['desc_postagem']; ?>
	<br>
	<br>
	<p><a class="btn btn-default" href="<?php echo site_url('/postagens/'.$tb_postagem['url_post']); ?>">Leia mais! </a></p> 
	<br>

<?php endforeach; ?>