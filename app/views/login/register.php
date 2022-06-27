<h1>Register Page</h1>

<form type="form" action="<?= base_url; ?>/login/cekRegis" method="POST"
enctype="multipart/form-data">
	<label>
		Username:
	</label>
	<input type="text" name="username">
	<br>
	<label>
		Password
	</label>
	<input type="text" name="password">
	<br>
	<label>
		Ulangi Password
	</label>
	<input type="text"  name="password2">
	<br>
	<button type="submit">Daftar</button>
</form>