<?php  

class Kategori extends Controller{
	public function index()
	{
		$data['title']= "Data Kategori";
		$data['kategori']=$this->model('KategoriModel')->getAllKategori();
		$this->view('templates/header',$data);
		$this->view('kategori/index',$data);
		$this->view('templates/sidebar',$data);
		$this->view('templates/footer');
	}

	public function cari(){
		$data['title']= "Data Kategori";
		$data['key']= $_POST['key'];
		$data['kategori']=$this->model('KategoriModel')->cariKategori($data['key']);

		$this->view('templates/header',$data);
		$this->view('kategori/index',$data);
		$this->view('templates/sidebar',$data);
		$this->view('templates/footer');

	}

	public function edit($id){
		$data['title'] = 'Detail Kategori';
		$data['kategori'] = $this->model('KategoriModel')->getkategoriById($id);

		$this->view('templates/header',$data);
		$this->view('templates/sidebar',$data);
		$this->view('kategori/edit',$data);
		$this->view('templates/footer');


	}

	public function tambah(){
		$data['title']='Tambah Kategori';
		$this->view('templates/header',$data);
		$this->view('kategori/create',$data);
		$this->view('templates/sidebar',$data);
		$this->view('templates/footer');

	}

	public function simpanKategori(){
		if($this->model('KategoriModel')->tambahKategori($_POST)>0){
			Flasher::setMessage('Berhasil','ditambahkan','succes');
			header('Location: '.base_url.'/kategori');
			exit;
		}else{
			Flasher::setMessage('Gagal','ditambahkan','Danger');
			header('Location: '.base_url.'/kategori');
			exit;
		}

	}

	public function updateKategori(){
		if($this->model('KategoriModel')->updateDataKategori($_POST)>0){
			Flasher::setMessage('Berhasil','diupdate','succes');
			header('Location: '.base_url.'/kategori');
			exit;
		}else{
			Flasher::setMessage('Gagal','diupdate','Danger');
			header('Location: '.base_url.'/kategori');
			exit;
		}

	}

	public function hapus($id){
		if($this->model('KategoriModel')->deleteKategori($id)>0){
			Flasher::setMessage('Berhasil','dihapus','succes');
			header('Location: '.base_url.'/kategori');
			exit;
		}else{
			Flasher::setMessage('Gagal','dihapus','Danger');
			header('Location: '.base_url.'/kategori');
			exit;
		}

	}


}