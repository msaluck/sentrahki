<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>Form Pengumpulan Output Luaran</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet">

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
	<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#563d7c">


	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width : 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="<?= base_url('css/form-validation.css') ?>" rel="stylesheet">
</head>

<body class="bg-light">
	<div class="container">
		<div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
			<h2>Form Pengumpulan Luaran Penelitian</h2>
			<p class="lead">Form ini digunakan untuk mendata Luaran Penelitian
				yang akan dikumpulkan oleh Civitas UNSOED</p>
		</div>

		<div class="row">
			<div class="col-md-4 order-md-2 mb-4">
				<div class="row">
					<h4 class="d-flex justify-content-between align-items-center col-md-7 mb-3">
						<span class="text-muted">Janji Luaran</span>
					</h4>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary col-md-4 mb-3" data-toggle="modal" data-target="janjiluaran.php">+</button>

					<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalScrollableTitle">Modal
										title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">...</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<table id="janjiLuaran" class="table table-sm">
					<tr>
						<td>Jurnal Nasional</td>
					</tr>
				</table>
				<h4 class="d-flex justify-content-between align-items-center mb-3">
					<span class="text-muted">Luaran/Output</span>
				</h4>
				<ul class="list-group mb-3">
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0">Jurnal Nasional</h6>
							<small class="text-muted">Informasi</small>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0">Jurnal Internasional</h6>
							<small class="text-muted">Informasi</small>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0">Monograf</h6>
							<small class="text-muted">Informasi</small>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-8 order-md-1">
				<h4 class="mb-3">Informasi Pengumpul Luaran Penelitian</h4>
				<form class="needs-validation" novalidate>

					<div class="mb-3">
						<label for="fullname">Nama Lengkap | Ketua Peneliti</label> <input type="text" class="form-control" id="fullname" placeholder="" value="" required>
						<div class="invalid-feedback">Nama Lengkap wajib di input</div>
					</div>

					<div class="mb-3">
						<label for="researchtype">Sumber Dana</label> <select class="custom-select d-block w-100" id="researchtype" required>
							<option value="">Choose...</option>
							<option>BLU-UNSOED</option>
						</select>
						<div class="invalid-feedback">Tipe Penelitian harus diisi.</div>
					</div>

					<div class="mb-3">
						<label for="researchtype">Skema Penelitian</label> <select class="custom-select d-block w-100" id="researchtype" required>
							<option value="">Choose...</option>
							<option>BLU-UNSOED</option>
						</select>
						<div class="invalid-feedback">Tipe Penelitian harus diisi.</div>
					</div>

					<div class="mb-3">
						<label for="researchtitle">Judul Penelitian</label>
						<textarea id="researchtitle" name="researchtitle" rows="5" cols="65" placeholder="" required></textarea>
						<div class="invalid-feedback" style="width: 100%;">Judul
							Penelitian harus diisi.</div>
					</div>

					<div class="mb-3">
						<label for="faculty">Fakultas</label> <select class="custom-select d-block w-100" id="faculty" required>
							<option value="">Choose...</option>
							<option>Teknik</option>
						</select>
						<div class="invalid-feedback">Fakultas harap dipilih.</div>
					</div>

					<div class="mb-3">
						<label for="username">Username</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">@</span>
							</div>
							<input type="text" class="form-control" id="username" placeholder="Username" required>
							<div class="invalid-feedback" style="width: 100%;">Your username
								is required.</div>
						</div>
					</div>

					<div class="mb-3">
						<label for="faculty">Fakultas</label> <input type="text" class="form-control" id="faculty" placeholder="">
						<div class="invalid-feedback">Please enter a valid email address
							for shipping updates.</div>
					</div>

					<div class="mb-3">
						<label for="address">Address</label> <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
						<div class="invalid-feedback">Please enter your shipping address.
						</div>
					</div>

					<div class="mb-3">
						<label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
						<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
					</div>

					<div class="row">
						<div class="col-md-5 mb-3">
							<label for="country">Country</label> <select class="custom-select d-block w-100" id="country" required>
								<option value="">Choose...</option>
								<option>United States</option>
							</select>
							<div class="invalid-feedback">Please select a valid country.</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="state">State</label> <select class="custom-select d-block w-100" id="state" required>
								<option value="">Choose...</option>
								<option>California</option>
							</select>
							<div class="invalid-feedback">Please provide a valid state.</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="zip">Zip</label> <input type="text" class="form-control" id="zip" placeholder="" required>
							<div class="invalid-feedback">Zip code required.</div>
						</div>
					</div>
					<hr class="mb-4">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="same-address"> <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
							address</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="save-info">
						<label class="custom-control-label" for="save-info">Save this
							information for next time</label>
					</div>
					<hr class="mb-4">

					<h4 class="mb-3">Payment</h4>

					<div class="d-block my-3">
						<div class="custom-control custom-radio">
							<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required> <label class="custom-control-label" for="credit">Credit card</label>
						</div>
						<div class="custom-control custom-radio">
							<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required> <label class="custom-control-label" for="debit">Debit card</label>
						</div>
						<div class="custom-control custom-radio">
							<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required> <label class="custom-control-label" for="paypal">PayPal</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="cc-name">Name on card</label> <input type="text" class="form-control" id="cc-name" placeholder="" required> <small class="text-muted">Full name as displayed on card</small>
							<div class="invalid-feedback">Name on card is required</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="cc-number">Credit card number</label> <input type="text" class="form-control" id="cc-number" placeholder="" required>
							<div class="invalid-feedback">Credit card number is required</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 mb-3">
							<label for="cc-expiration">Expiration</label> <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
							<div class="invalid-feedback">Expiration date required</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="cc-cvv">CVV</label> <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
							<div class="invalid-feedback">Security code required</div>
						</div>
					</div>
					<hr class="mb-4">
					<button class="btn btn-primary btn-lg btn-block" type="submit">Continue
						to checkout</button>
				</form>
			</div>
		</div>

		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">&copy; 2017-2020 Company Name</p>
			<ul class="list-inline">
				<li class="list-inline-item"><a href="#">Privacy</a></li>
				<li class="list-inline-item"><a href="#">Terms</a></li>
				<li class="list-inline-item"><a href="#">Support</a></li>
			</ul>
		</footer>
	</div>
	<script src="<?= base_url('js/jquery-3.5.1.slim.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('js/form-validation.js') ?>"></script>
	<script src="<?= base_url('js/private.js') ?>"></script>
</body>

</html>