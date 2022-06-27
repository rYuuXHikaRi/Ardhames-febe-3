<h1>Login Page</h1>

<form type="form" action="<?= base_url; ?>/login/cekLogin" method="POST"
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
	<button type="submit">Login</button>
</form>