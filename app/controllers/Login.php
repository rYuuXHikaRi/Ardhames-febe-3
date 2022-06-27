<?php  

class Login extends Controller{
	public function index()
	{
		$data['title']= "Login";
		$this->view('templates/header',$data);
		$this->view('login/index',$data);
		$this->view('templates/footer');
	}

	public function registerasi(){
		$data['title']='Registerasi';
		$this->view('templates/header',$data);
		$this->view('login/register',$data);
		$this->view('templates/footer');
	}

	public function cekRegis(){
		if($this->model('LoginModel')->tambahUser($_POST)>0){
			Flasher::setMessage('Registerasi','Berhasil, Silakan Login','succes');
			header('Location: '.base_url.'/login');
			exit;
		}else{
			Flasher::setMessage('Akun','Sudah terdaftar, Silakan Login','Danger');
			exit;
		}
	}

	public function cekLogin(){
		if($this->model('LoginModel')->cekData($_POST)>0){
			Flasher::setMessage('Login','Berhasil','succes');
			header('Location: '.base_url.'/home');
			exit;
		}else{
			Flasher::setMessage('Login Gagal','username/password salah, ','Danger');
			header('Location: '.base_url.'/login');
			exit;
		}
	}


}