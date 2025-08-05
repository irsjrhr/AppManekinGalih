

<script type="text/javascript" src="<?= base_url() ?>asset/js/sweetalert2.js"></script>

<?php if ( !empty($this->session->flashdata()) ): ?>
	<?php foreach ($this->session->flashdata() as $key => $flasher): ?>
		<script type="text/javascript">
			Swal.fire("<?= $this->session->flashdata( $key ) ?>"); 
		</script>
	<?php endforeach ?>
<?php endif ?>


