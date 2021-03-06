<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page buku</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>

<body>
   
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <nav class="navbar shadow-lg">
                <div class="container-fluid">
                    <a class="navbar-brand text-light" href="#"><i class="p-2 fs-3 bi bi-info-square-fill"></i> 
                         <span class="pe-auto fw-bold">Buku Kita</span></a>
                    <div class="pe-auto rounded-5 logout">
                        <a class="nav-link text-light" href="/logout">
                            <i class="p-4 pe-1 fs-3 bi bi-box-arrow-right"></i>
                            <span class="pe-3 pb-3 pt-0">Logout</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">                       
                        <li class="list">
                            <a href="#" data-bs-toggle="collapse" class="nav-link text-dark px-0 align-middle">
                                <i class="fs-3 bi-speedometer2"></i> <span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span> </a>                           
                        </li>
                        <li class="list">
                            <a href="#" data-bs-toggle="collapse" class="nav-link  text-dark px-0 align-middle">
                                <i class="fs-3 bi bi-tags"></i> <span class="fs-4 ms-3 d-none d-sm-inline">Katagori</span> </a>                              
                        </li>
                        <li class="list">
                            <a href="#" data-bs-toggle="collapse" class="nav-link text-dark px-0 align-middle">
                                <i class="fs-3 bi bi-book"></i></i> <span class="fs-4 ms-3 d-none d-sm-inline">Buku</span> </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link text-dark px-0 align-middle">
                                <i class="fs-3 bi bi-person-circle"></i> <span class="fs-4 ms-3 d-none d-sm-inline">about me</span> </a>
                        </li>
                    </ul>
                    </div>
                </div>
            <div class="col pe-0 ps-0">
                <div class=" h1 d-falx flex-column pt-5 pb-3 ps-3 mb-5 shadow-sm content">Data Buku </div>
               <!-- add_book -->
                <div class="container-fluid">
                 <div class="row">
                      <div class="col-md-12">
                            <div class="card">
                             <div class="card-header">
                                  <h3 class="card-title">Tambah Buku</h3>
                             </div>
                             <div class="card-body shadow">
                                  <form action="/add_book" method="post">
                                        <div class="form-group">
                                         <label for="">Judul</label>
                                         <input type="text" class="form-control" name="judul" id="">
                                        </div>
                                        <div class="form-group">
                                         <label for="">Penerbit</label>
                                         <input type="text" class="form-control" name="penerbit" id="">
                                        </div>
                                        <div class="form-group">
                                         <label for="">Pengarang</label>
                                         <input type="text" class="form-control" name="pengarang" id="">
                                        </div>
                                        <div class="form-group">
                                         <label for="">Tahun</label>
                                         <input type="text" class="form-control" name="tahun" id="">
                                        </div>
                                        <div class="form-group">
                                         <label for="">Kategori</label>
                                         <select name="kategori" id="" class="form-control">
                                              <option value="">Pilih Kategori</option>
                                              <option value="">Fiksi</option>
                                              <option value="">Non Fiksi</option>
                                         </select>
                                        </div>
                                        <div class="form-group">
                                         <label for="">Sinopsis</label>
                                         <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                        <form class="form-group">
                                         <label for="">cover</label>
                                         <input type="file" class="form-control" name="cover" id="">
                                        </form>
                                  </form>
                             </div>
                            </div>
                            <div class="confirm_btn mt-4 d-flex justify-content-center ">
                                <button type="button" class="btn m-2 btn-primary shadow btn-lg">Simpan</button>
                                <a href="./index1.php">                                    
                                    <button href="" type="button" class="btn m-2 btn-danger shadow btn-lg">Batal</button>
                                </a>
                            </div>
                      </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
    