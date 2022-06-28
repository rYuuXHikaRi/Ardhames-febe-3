<?php  

class Buku extends Controller{
	public function index()
	{
		$data['title']= "Daftar Buku";
		$data['buku']=$this->model('BukuModel')->getAllBuku();
		$this->view('templates/header',$data);
		$this->view('buku/index',$data);
		$this->view('templates/sidebar',$data);
		$this->view('templates/footer');
	}
	public function tambah(){
		$data['title']="Tambah Buku";
		$data["kategori"]=$this->model('KategoriModel')->getAllKategori();
				$data['title']= "Daftar Buku";
		$this->view('templates/header',$data);
		$this->view('buku/create',$data);
		$this->view('templates/sidebar',$data);
		$this->view('templates/footer');
	}	
	public function simpanBuku(){
		if($this->model('BukuModel')->tambahBuku($_POST)>0){
			Flasher::setMessage('Berhasil','ditambahkan','succes');
			header('Location: '.base_url.'/buku');
			exit;
		}else{
			Flasher::setMessage('Gagal','ditambahkan','Danger');
			header('Location: '.base_url.'/buku');
			exit;
		}
	}	
	public function edit($id){
		$data['title']="Edit Buku";
		$data["buku"]=$this->model('BukuModel')->getBukuById($id);
		$data["kategori"]=$this->model('KategoriModel')->getAllKategori();
		$data['title']= "Edit Buku";
		$this->view('templates/header',$data);
		$this->view('buku/edit',$data);
		$this->view('templates/sidebar',$data);
		$this->view('templates/footer');
	}	
	public function updateBuku(){
		if($this->model('BukuModel')->updateDataBuku($_POST)>0){
			Flasher::setMessage('Berhasil','ditambahkan','succes');
			header('Location: '.base_url.'/buku');
			exit;
		}else{
			Flasher::setMessage('Gagal','ditambahkan','Danger');
			header('Location: '.base_url.'/buku');
			exit;
		}

	}
	public function cari(){
		$data['title']= "Daftar Buku";
		$data['buku']=$this->model('BukuModel')->cariBuku();

		$data['key']= $_POST['key'];
		$this->view('templates/header',$data);
		$this->view('buku/index',$data);
		$this->view('templates/sidebar',$data);
		$this->view('templates/footer');

	}
	public function hapus($id){
		if($this->model('BukuModel')->deleteBuku($id)>0){
			Flasher::setMessage('Berhasil','dihapus','succes');
			header('Location: '.base_url.'/buku');
			exit;
		}else{
			Flasher::setMessage('Gagal','dihapus','Danger');
			header('Location: '.base_url.'/buku');
			exit;
		}

	}


}