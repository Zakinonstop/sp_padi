<?php  ?>
<br><br>
<div class="container">

	<form method="post" action="<?php echo base_url() ?>user/diagnosa">

		<table id="table" class="table table-bordered">
			<thead>
				<th>Kode Gejala</th>
				<th>Gejala</th>
				<th>Ya</th>
			</thead>
			<tbody>
				<?php
				foreach ($gejala as $data) {
				?>
					<tr>
						<td><?= $data['kode_gejala']; ?></td>
						<td><?= $data['gejala']; ?></td>
						<td><input type='checkbox' value="<?= $data['kode_gejala']; ?>" name="kode_gejala[]" /></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#table').DataTable({
			"pageLength": 50
		});
	});
</script>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- ===============================================-->
	<!--    Favicons-->
	<!-- ===============================================-->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/user/img/favicons/apple-touch-icon.png'); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/user/img/favicons/favicon-32x32.png'); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/user/img/favicons/favicon-16x16.png'); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/user/img/favicons/favicon.ico'); ?>">
	<link rel="manifest" href="<?php echo base_url('assets/user/img/favicons/manifest.json'); ?>">
	<meta name="msapplication-TileImage" content="<?php echo base_url('assets/user/img/favicons/mstile-150x150.png'); ?>">
	<meta name="theme-color" content="#ffffff">

	<title>Data Penyakit</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/main/css/vendors_css.css'); ?>">

	<!-- Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/main/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/main/css/skin_color.css'); ?>">

</head>
<!-- ===============================================-->
<!-- Tabel                                          -->
<!-- ===============================================-->

<body>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Konsultasi</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<form method="post" action="<?php echo base_url('user/diagnosa') ?>">
								<table id="tabelpenyakit" class="table table-bordered table-striped" style="width: 100%">
									<thead>
										<tr>
											<th>Kode Gejala</th>
											<th>Gejala</th>
											<th>Ya</th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($gejala as $data) {
										?>
											<tr>
												<td><?= $data['kode_gejala']; ?></td>
												<td><?= $data['gejala']; ?></td>
												<td><input type='checkbox' value="<?= $data['kode_gejala']; ?>" name="kode_gejala[]" /></td>
											</tr>
										<?php } ?>
									</tbody>
									<tfoot>
										<tr>
											<th>Kode Gejala</th>
											<th>Gejala</th>
											<th>Ya</th>
										</tr>
									</tfoot>
								</table>
								<a type="submit" name="submit" class="btn btn-lg btn-success px-6" role="button">Submit</a>
							</form>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->

	<!-- Vendor JS -->
	<script src="<?php echo base_url('assets/admin/css/main/js/vendors.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/css/main/js/pages/chat-popup.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/css/main/icons/feather-icons/feather.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/css/main/vendor_components/datatable/datatables.min.js'); ?>"></script>

	<!-- EduAdmin App -->
	<script src="<?php echo base_url('assets/admin/css/main/js/template.js'); ?>"></script>

	<script src="<?php echo base_url('assets/admin/css/main/js/pages/data-table.js'); ?>"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- fungsi datatable -->
	<script>
		$(document).ready(function() {
			$('#tabelpenyakit').DataTable();
		});
	</script>

</body>

</html>