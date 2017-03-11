<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('postagens/create'); ?>
	<div class="form-group">
		<label>Título</label>
		<input type="text" class="form-control" name="nme_titulo" placeholder="Adicione um título">
	</div>
	<div class="form-group">
		<label>Postagem</label>
		<textarea class="form-control" name="desc_postagem" placeholder="Escreva a postagem"></textarea>
	</div>
	<button type="submit" class="btn brn-default">Enviar</button>
</form>