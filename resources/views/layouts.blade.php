<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/css/custom.css">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    <section>
        <nav class="navbar py-3 navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img width="150" src="vendor/images/logo-hopee.png" alt="" class="">
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item active">
                  <a class="nav-link d-flex justify-content-center" href="#">Home <span class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item d-flex justify-content-center navigasi">
                  <a class="nav-link" href="#">Mulai Investasi</a>
                </li>                
                <li class="nav-item d-flex justify-content-center navigasi">
                  <a class="nav-link" href="#">Jadi Mitra</a>
                </li>                
                <li class="nav-item d-flex justify-content-center navigasi">
                  <a class="nav-link" href="#">Tentang Kami</a>
                </li>                
                <li class="nav-item d-flex justify-content-center mx-2">
                  <a class="nav-link bg-hijau rounded px-3" href="#">Masuk</a>
                </li>                
                <li class="nav-item d-flex justify-content-center navigasi">
                  <a class="nav-link" href="#">Daftar</a>
                </li>                
              </ul>
            </div>
            </div>
          </nav>
    </section>

    @yield('content');

    <section class="mt-5 bg-white">
        <div class="container py-3 pt-5">
            <p class="text-black">Disclaimer Resiko :</p>
            <div class="row border-bottom">
                <div class="col-6">
                    <ol type="1">
                        <li>
                            Layanan Pembiayaan Syariah Berbasis Teknologi Informasi merupakan kesepakatan perdata antara Pemberi Pembiayaan dengan Penerima Pembiayaan, sehingga segala risiko yang timbul dari kesepakatan
                            tersebut ditanggung sepenuhnya oleh masing- masing pihak.
                        </li>
                        <li>
                            Risiko pembiayaan atau gagal bayar ditanggung sepenuhnya oleh Pemberi Pembiayaan. Tidak ada lembaga atau otoritas negara yang bertanggung jawab atas risiko gagal bayar ini.
                        </li>
                        <li>                            
                            Penyelenggara dengan persetujuan dari masing-masing Pengguna (Pemberi Pembiayaan dan/atau Penerima Pembiayaan) mengakses, memperoleh, menyimpan, mengelola dan/atau menggunakan data pribadi 
                            Pengguna ("Pemanfaatan Data") pada atau di dalam benda, perangkat elektronik (termasuk smartphone atau telepon seluler), perangkat keras (hardware) maupun lunak (software), dokumen elektronik, 
                            aplikasi atau sistem elektronik milik Pengguna atau yang dikuasai Pengguna, dengan memberitahukan tujuan, batasan dan mekanisme Pemanfaatan Data tersebut kepada Pengguna yang bersangkutan sebelum 
                            memperoleh persetujuan yang dimaksud.
                        </li>
                        <li>
                            Pemberi Pembiayaan yang belum memiliki pengetahuan dan pengalaman terhadap layanan pembiayaan, disarankan untuk tidak menggunakan layanan ini.
                        </li>
                        <li>
                            Penerima Pembiayaan harus mempertimbangkan kemampuan dalam melunasi pembiayaan.
                        </li>
                        <li>
                            Setiap kecurangan tercatat secara digital di dunia maya dan dapat diketahui masyarakat luas di media sosial.\
                        </li>
                    </ol>
                </div>
                <div class="col-6">
                    <ol type="1" start="7">
                        <li>
                            Pengguna harus membaca dan memahami informasi ini sebelum membuat keputusan menjadi Pemberi Pembiayaan atau Penerima Pembiayaan.
                        </li>
                        <li>
                            Pemerintah yaitu dalam hal ini Otoritas Jasa Keuangan, tidak bertanggung jawab atas setiap pelanggaran atau ketidakpatuhan oleh Pengguna, baik Pemberi Pembiayaan maupun Penerima Pembiayaan 
                            (baik karena kesengajaan atau kelalaian Pengguna) terhadap ketentuan peraturan perundang-undangan maupun kesepakatan atau perikatan antara Penyelenggara dengan Pemberi Pembiayaan dan/atau Penerima Pembiayaan.
                        </li>
                        <li>
                            Setiap transaksi dan kegiatan pemberian modal, pembiayaan, pinjam meminjam atau pelaksanaan kesepakatan mengenai pembiayaan antara atau yang melibatkan Penyelenggara, Pemberi Pembiayaan dan/atau 
                            Penerima Pembiayaan wajib dilakukan melalui escrow account dan virtual account sebagaimana yang diwajibkan berdasarkan Peraturan Otoritas Jasa Keuangan Nomor 77/POJK.01/2016 tentang Layanan Pinjam Meminjam 
                            Uang Berbasis Teknologi Informasi dan pelanggaran atau ketidakpatuhan terhadap ketentuan tersebut merupakan bukti telah terjadinya pelanggaran hukum oleh Penyelenggara sehingga Penyelenggara wajib menanggung 
                            ganti rugi yang diderita oleh masing-masing Pengguna sebagai akibat langsung dari pelanggaran hukum tersebut di atas tanpa mengurangi hak Pengguna yang menderita kerugian menurut Kitab Undang-Undang Hukum Perdata.
                        </li>
                    </ol>
                </div>
            </div>
            <p class="text-black px-2 pt-4">&#169; Copyright 2020. Hope.id, All Right Reserved.</p>
        </div>
    </section>

    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="vendor/js/bootstrap.js"></script>

    @yield('script')
    
</body>
</html>