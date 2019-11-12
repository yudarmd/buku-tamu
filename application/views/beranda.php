<?php
	$status = $this->session->userdata("status");
	if (isset($status) != "login") {
		redirect('login');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Beranda | Tamuku</title>
	<meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Morris Charts CSS -->
	<link href="./assets/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css" />

	<!-- Data table CSS -->
	<link href="./assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

	<!--alerts CSS -->
	<link href="./assets/vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="./assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Preloader -->
	<!-- <div class="preloader-it">
		<div class="la-anim-1"></div>
	</div> -->
	<!-- /Preloader -->
	<div class="wrapper theme-1-active pimary-color-red">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.html">
							<img class="brand-img" src="./assets/dist/img/logo.png" alt="brand" />
							<span class="brand-text">Tamuku</span>
						</a>
					</div>
				</div>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><?php echo $this->session->userdata('nama'); ?> <img src="./assets/dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle" /><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="login/logout"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- /Top Menu Items -->

		<!-- Main Content -->
		<div class="page-wrapper" style="margin-left: 0px;">
			<div class="container pt-25">

				<!-- Row -->
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="row">
									<span class="weight-500 font-20 txt-primary ml-25"><i class="fa fa-users"></i> Daftar Tamu</span>
									<button data-toggle="modal" data-target="#form-tambah" class="btn btn-primary btn-sm pull-right" id="btn-tambah" style="padding-right: 8px;padding-left: 8px; margin-right: 10px;">Tambah Tamu</button>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="tabel_tamu" class="table table-hover display pb-30">
												<thead>
													<tr>
														<th>ID</th>
														<th>Nama</th>
														<th>Jenis Kelamin</th>
														<th>Alamat</th>
														<th>Nominal</th>
														<th>Waktu</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>ID</th>
														<th>Nama</th>
														<th>Jenis Kelamin</th>
														<th>Alamat</th>
														<th>Nominal</th>
														<th>Waktu</th>
														<th>Aksi</th>
													</tr>
												</tfoot>
												<tbody id="tampil_data">
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<span class="weight-500 font-20 block text-center txt-primary">Jumlah Tamu</span>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="jum_tamu">
									</div>
									<div id="jum_keseluruhan">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>

			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2017 &copy; Doodle. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
		<!-- /Main Content -->

	</div>
	<!-- /#wrapper -->
	<div id="form-tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Masukkan Data Tamu</h5>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<canvas id="scanner"></canvas>
					</div>
					<div id="result_tamu">

					</div>
					<form>
						<div class="form-group">
							<label class="control-label mb-10" for="nama">Nama</label>
							<input type="text" class="form-control" name="input_nama" id="nama" placeholder="Masukkan Nama">
						</div>
						<div class="form-group">
							<label class="control-label mb-10" for="jenis_kelamin">Jenis Kelamin</label>
							<select class="form-control" name="input_jeniskelamin" id="jenis_kelamin">
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label mb-10" for="alamat">Alamat</label>
							<input type="text" class="form-control" name="input_alamat" id="alamat" placeholder="Masukkan Alamat">
						</div>
						<div class="form-group">
							<label class="control-label mb-10" for="nominal">Nominal</label>
							<input type="text" class="form-control" name="input_nominal" id="nominal" placeholder="Masukkan Nominal">
						</div>
						<input type="text" class="hidden" name="input_waktu" id="waktu">
					</form>
				</div>
				<div class="modal-footer">
					<button id="btn-simpan" type="button" class="btn btn-sm btn-primary ">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div id="form-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Edit Data Tamu</h5>
				</div>
				<div class="modal-body">
					<form>
						<input type="text" class="hidden" name="edit_idtamu" id="edit_idtamu">
						<div class="form-group">
							<label class="control-label mb-10" for="edit_">Nama</label>
							<input type="text" class="form-control" name="edit_nama" id="edit_nama" placeholder="Masukkan Nama">
						</div>
						<div class="form-group">
							<label class="control-label mb-10" for="edit_jeniskelamin">Jenis Kelamin</label>
							<select class="form-control" name="edit_jeniskelamin" id="edit_jeniskelamin">
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label mb-10" for="edit_alamat">Alamat</label>
							<input type="text" class="form-control" name="edit_alamat" id="edit_alamat" placeholder="Masukkan Alamat">
						</div>
						<div class="form-group">
							<label class="control-label mb-10" for="edit_nominal">Nominal</label>
							<input type="text" class="form-control" name="edit_nominal" id="edit_nominal" placeholder="Masukkan Nominal">
						</div>
						<input type="text" class="hidden" name="edit_waktu" id="edit_waktu">
					</form>
				</div>
				<div class="modal-footer">
					<button id="btn-ubah" type="button" class="btn btn-sm btn-primary">Ubah</button>
				</div>
			</div>
		</div>
	</div>

	<div id="form-hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Hapus Data</h5>
				</div>
				<div class="modal-body">
					<p class="text-center">Apakah Anda Yakin Ingin Menghapus Data Ini?</p>
					<form>
						<input type="text" class="hidden" name="hapus_idtamu" id="hapus_idtamu">
					</form>
				</div>
				<div class="modal-footer">
					<button id="btn-hapus" type="button" class="btn btn-sm btn-danger">Hapus</button>
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScript -->

	<!-- jQuery -->
	<script src="./assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="./assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="./assets/vendors/bower_components/bootstrap-validator/dist/validator.min.js"></script>

	<!-- Data table JavaScript -->
	<script src="./assets/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

	<!-- Init JavaScript -->
	<script src="./assets/dist/js/init.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="./assets/dist/js/jquery.slimscroll.js"></script>

	<!-- Owl JavaScript -->
	<script src="./assets/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

	<!-- Switchery JavaScript -->
	<script src="./assets/vendors/bower_components/switchery/dist/switchery.min.js"></script>

	<!-- Sweet-Alert  -->
	<script src="./assets/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="./assets/dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- QR Code Scanner  -->
	<script src="./assets/vendors/bower_components/qrcode/qrcodelib.js"></script>
	<script src="./assets/vendors/bower_components/qrcode/webcodecamjquery.js"></script>
	<script>
		var id = 0;

		$(document).ready(function () {

			tampil_tamu()
			jumlah_tamu()
			date();

			$('#tabel_tamu').DataTable({
				"language": {
					"decimal": "",
					"emptyTable": "Data Tidak Tersedia",
					"info": "Tampilkan _START_ - _END_ dari _TOTAL_ Data",
					"infoEmpty": "Showing 0 to 0 of 0 entries",
					"infoFiltered": "(filter dari _MAX_ total data)",
					"infoPostFix": "",
					"thousands": ",",
					"lengthMenu": "Tampilkan _MENU_ Data",
					"loadingRecords": "Loading...",
					"processing": "Proses...",
					"search": "Cari:",
					"zeroRecords": "Data Tidak Tersedia",
					"paginate": {
						"first": "First",
						"last": "Last",
						"next": "Lanjut",
						"previous": "Kembali"
					},
					"aria": {
						"sortAscending": ": activate to sort column ascending",
						"sortDescending": ": activate to sort column descending"
					}
				}
			});

			function tampil_tamu() {
				$.ajax({
					type: 'ajax',
					url: 'beranda/tampil_tamu',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
						var no = 1;
						for (i = 0; i < data.length; i++) {
							html += '<tr id="' + data[i].id_tamu + '">' +
								'<td>' + no + '</td>' +
								'<td>' + data[i].nama + '</td>' +
								'<td>' + data[i].jenis_kelamin + '</td>' +
								'<td>' + data[i].alamat + '</td>' +
								'<td>' + data[i].nominal + '</td>' +
								'<td>' + data[i].waktu + '</td>' +
								'<td>' +
								'<button class="btn btn-xs btn-primary" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#form-edit" id="btn-edit" data-id="' + data[i].id_tamu + '" data-nama="' + data[i].nama + '" data-jk="' + data[i].jenis_kelamin + '" data-jk="' + data[i].jenis_kelamin + '" data-alamat="' + data[i].alamat + '" data-nominal="' + data[i].nominal + '"> <i class="fa fa-pencil"></i></button> ' +
								'<button class="btn btn-xs btn-danger" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#form-hapus" data-id="' + data[i].id_tamu + '"> <i class="fa fa-trash"></i> </button>' +
								'</td>' +
								'</tr>'
							no++;
						}
						$('#tampil_data').html(html);
					}

				});
			}

			function jumlah_tamu() {
				$.ajax({
					type: 'ajax',
					url: 'beranda/jumlah_tamu',
					// async: false,
					dataType: 'json',
					success: function (data) {
						var html1 = '';
						var html2 = '';
						var jum = 0;
						for (i = 0; i < data.length; i++) {
							html1 += '<span class="pull-left inline-block capitalize-font txt-dark"> ' + data[i].wkt + '</span>' +
								'<span class="label label-success pull-right" style="font-size:14px;">' + data[i].jumlah + '</span>' +
								'<div class="clearfix"></div>' +
								'<hr class="light-grey-hr row mt-10 mb-10" />';
						}
						$('#jum_tamu').html(html1);
						for (u = 0; u < data.length; u++) {
							jum += parseInt(data[u].jumlah);
						}
						html2 += '<span class="pull-left inline-block capitalize-font txt-dark">Jumlah</span>' +
							'<span class="label label-primary pull-right" style="font-size:14px;">' + jum + '</span>' +
							'<div class="clearfix"></div>';
						$('#jum_keseluruhan').html(html2);

					}

				});
			}

			function date() {
				$.ajax({
					type: 'ajax',
					url: 'beranda/date',
					async: false,
					dataType: 'json',
					success: function (data) {
						$('#waktu').val(data);
						$('#edit_waktu').val(data);
					}
				});
			}

			$('#form-edit').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id = button.data('id');
				var nama = button.data('nama');
				var jk = button.data('jk');
				var alamat = button.data('alamat');
				var nominal = button.data('nominal');
				$('#edit_idtamu').val(id);
				$('#edit_nama').val(nama);
				$('#edit_jeniskelamin').val(jk);
				$('#edit_alamat').val(alamat);
				$('#edit_nominal').val(nominal);
			})

			$('#form-hapus').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id = button.data('id');
				$('#hapus_idtamu').val(id);
			})

			$('#btn-simpan').click(function () {
				$.ajax({
					url: 'Beranda/simpan', // URL tujuan
					type: 'POST', // Tentukan type nya POST atau GET
					data: $("#form-tambah form").serialize(), // Ambil semua data yang ada didalam tag form
					dataType: 'json',
					beforeSend: function () {

					},
					success: function (response) {
						if (response.status == 'sukses') {
							// Tampilkan Tabel
							tampil_tamu();
							jumlah_tamu()
							// pesan sukses
							swal({
								title: "Sukses",
								type: "success",
								text: "Anda Telah Berhasil Mengiputkan Data",
								confirmButtonColor: "#469408"
							});

							$('#form-tambah').modal('hide')
						} else {
							// Tampilkan Tabel
							tampil_tamu();
							jumlah_tamu()
							// pesan gagal
							swal({
								title: "Gagal",
								type: "error",
								text: "Data Yang Di Inputkan Harus Valid",
								showConfirmButton: false,
								timer: 1500
							});

							$('#form-tambah').modal('hide')
						}
					}
				})
			})

			$('#btn-tambah').click(function () {
				var arg = {
					resultFunction: function (result) {
						var array_tamu = result.code;
						console.log(array_tamu);
						$('#input_nama').val("asdads");
						// document.getElementById("input_nama").innerHTML = array_tamu[0];
						// document.getElementById("input_jeniskelamin").innerHTML = array_tamu[1];
						// document.getElementById("input_alamat").innerHTML = array_tamu[2];
						// document.getElementById("input_nominal").innerHTML = array_tamu[3];
						// document.getElementById("result_tamu").innerHTML = array_tamu;
					}
				};
				$("#scanner").WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery.play();
			})

			$('#btn-hapus').click(function () {
				id = $('#hapus_idtamu').val();
				console.log(id);
				$.ajax({
					url: 'beranda/hapus/' + id, // URL tujuan
					dataType: 'json',
					beforeSend: function () {},
					success: function (response) { // Ketika proses pengiriman berhasil
						if (response.status == 'sukses') {
							// Tampilkan Tabel
							tampil_tamu()
							jumlah_tamu()
							// pesan sukses
							swal({
								title: "Sukses",
								type: "success",
								text: "Anda Telah Berhasil Menghapus Data Ini",
								confirmButtonColor: "#469408"
							});

							$('#form-hapus').modal('hide')
						} else {
							// Tampilkan Tabel
							tampil_tamu()
							jumlah_tamu()
							// pesan gagal
							swal({
								title: "Gagal",
								type: "error",
								text: "Data Ini Gagal Di Hapus",
								showConfirmButton: false,
								timer: 1500
							});

							$('#form-hapus').modal('hide')
						}
					}
				})
			})

			$("#btn-ubah").click(function () {
				id = $('#edit_idtamu').val();
				$.ajax({
					url: 'beranda/ubah/' + id, // URL tujuan
					type: 'POST', // Tentukan type nya POST atau GET
					data: $("#form-edit form").serialize(), // Ambil semua data yang ada didalam tag form
					dataType: 'json',
					beforeSend: function () {},
					success: function (response) { // Ketika proses pengiriman berhasil
						if (response.status == 'sukses') {
							// Tampilkan Tabel
							tampil_tamu()
							jumlah_tamu()
							// pesan sukses
							swal({
								title: "Sukses",
								type: "success",
								text: "Anda Telah Berhasil Mengedit Data",
								confirmButtonColor: "#469408"
							});

							$('#form-edit').modal('hide')
						} else {
							// Tampilkan Tabel
							tampil_tamu()
							jumlah_tamu()
							// pesan gagal
							swal({
								title: "Gagal",
								type: "error",
								text: "Data Yang Di Edit Harus Valid",
								showConfirmButton: false,
								timer: 1500
							});

							$('#form-edit').modal('hide')
						}
					}
				})
			});

			$('#form-tambah').on('hidden.bs.modal', function (e) { // Ketika Modal Dialog di Close / tertutup
				$('#form-tambah #nama, #form-tambah #alamat, #form-tambah #nominal').val('') // Clear inputan menjadi kosong
			})
		})

	</script>

</body>



</html>
