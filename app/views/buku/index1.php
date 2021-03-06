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
               <div class="navbar bg-light">
                   <div class="container-fluid pt-5 pb-3 ">
                       <div class="h3">Daftar buku </div>
                       <a  href="./add_book.php" type="button" class="btn btn-primary  col-3">
                        Tambah Buku</a>
                   </div>
               </div>
                <!-- search_bar -->
                <form class="d-flex col-4 mt-5" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>

                <!-- tabel -->
                <table class="mt-3 pt-5 table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">judul</th>
                        <th scope="col">isbn</th>
                        <th scope="col">penulis</th>
                        <th scope="col">penerbit</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Indonesia</td>
                        <td>244635527665x</td>
                        <td>hartanto</td>
                        <td>pustaka</td>
                        <td>
                            <button type="button" class="btn btn-primary"><i class=" bi bi-x"></i>read</button>
                            <button type="button" class="btn btn-danger"><i class=" bi bi-x"></i>delete</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Tanah Kaya</td>
                        <td>098535527671x</td>
                        <td>dominic</td>
                        <td>Mamedia pustaka</td>
                        <td>
                            <button type="button" class="btn btn-primary"><i class=" bi bi-x"></i>read</button>
                            <button type="button" class="btn btn-danger"><i class=" bi bi-x"></i>delete</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Web 1 menit</td>
                        <td>134523524980x</td>
                        <td>Bukan saya</td>
                        <td>elalaha salah</td>
                        <td>
                            <button type="button" class="btn btn-primary"><i class=" bi bi-x"></i>read</button>
                            <button type="button" class="btn btn-danger"><i class=" bi bi-x"></i>delete</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    