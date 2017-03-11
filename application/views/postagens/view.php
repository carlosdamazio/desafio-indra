<h2><?php echo $tb_postagem['nme_titulo']?></h2>
<small class="post-date">Postado em: <?php echo $tb_postagem['time_postagem']?></small>
<br>
<div class="post-body">
	<?php echo $tb_postagem['desc_postagem']; ?>
</div>

<hr>
<a class="btn btn-default pull-left" href="edit/<?php echo $tb_postagem['url_post']; ?>">Editar</a>

<?php echo form_open('postagens/delete/'.$tb_postagem['idt_postagem']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form>

