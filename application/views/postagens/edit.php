<h2><?= $titulo; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('postagens/update'); ?>
	<input type="hidden" name="idt_postagem" value="<?php echo $tb_postagem['idt_postagem']; ?>">
	<div class="form-group">
		<label>Título</label>
		<input type="text" class="form-control" name="nme_titulo" placeholder="Modifique o título" value="<?php echo $tb_postagem['nme_titulo']; ?>">
	</div>
	<div class="form-group">
		<label>Postagem</label>
		<textarea class="form-control" name="desc_postagem" placeholder="Modifique a postagem"><?php echo $tb_postagem['desc_postagem']; ?></textarea>
	</div>
	<button type="submmit" class="btn brn-default">Enviar</button>
</form>