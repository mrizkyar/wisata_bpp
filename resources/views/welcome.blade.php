<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Tourism Balikpapan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                            <div class="card-body text-center bg-primary text-white">
                                <h1 class="card-title">Pariwisata Balikpapan</h1>
                                <p class="card-text">Informasi seputar pariwisata Kota Balikpapan beserta Kecamatan dan juga Akomodasi nya</p>
                                @if(Auth::check() && Auth::user()->admin == 1)
                                    <a class="btn btn-warning btn-sm" href="admin/dashboard">Dashboard</a>
                            @else
                                <a class="btn btn-warning btn-sm" href="login">Login</a>
                                <a class="btn btn-warning btn-sm" href="register">Register</a>
                            @endif


                    </div>

                </div>
        </div>
            
        <div class="row text-white">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body bg-success">
                            <h5 class="card-title">Wisata</h5>
                            <p class="card-text"> Berisi Wisata yang terdapat di Balikpapan Mulai dari alamat dan jam buka dan hari bukanya</p>
                            <a href="post" class="btn btn-primary">Next</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body bg-success">
                        <h5 class="card-title">Kecamatan</h5>
                        <p class="card-text">Berisi Informasi tentang Kecamatan yang terdapat di Balikpapan</p>
                        <a href="kecamatan" class="btn btn-primary">Next</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body bg-success">
                        <h5 class="card-title">Akomodasi</h5>
                        <p class="card-text"> Berisi Informasi tentang Akomodasi yang terdapat di Balikpapan</p>
                        <a href="akomodasi" class="btn btn-primary">Next</a>
                    </div>
                    </div>
                </div>
        </div> 
        <div class="col text-justify">
        <h2>Tutorial memakai Website</h2>
                <ol type="1">
                    <li>Menu Login Admin untuk login sebagai Admin</li>
                    <li>Pilih Menu yang ada pada website seperti Wisata,Kecamaytan dan Akomodasi</li>
                    <li>Setelah pilih menu yang diinginkan, cari data yang mau dilihat lalu klik show</li>
                    <li>Jika ingin komentar isi form lalu klik submit</li>
                    <li>Kita juga bisa hapus komentar dengan cara klik hapus sesuai dengan komentar yang telah diinputkan</li>
                </ol>
        </div>
    </body>
    <footer class="bg-light text-center text-lg-start">
        
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark">Kelompok 2 B.R.I E-Tourism Balikpapan</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</html>
