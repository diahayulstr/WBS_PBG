<!DOCTYPE html>
<html lang="en">

<?php
$koneksi = mysqli_connect('localhost','root', '', 'pkl_database_3');
$data_pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduans");
$jml_pengaduan = mysqli_num_rows($data_pengaduan);
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WBS | Whistle Blowing System</title>
    <link rel="icon" href="{{ asset('img/logopbg.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body id="home" class="leading-normal tracking-normal" style="font-family: 'Montserrat', sans-serif">

    <nav class="flex items-center justify-between flex-wrap bg-yellow-200 p-7 px-20">
        <a href="/" class="transform transition hover:scale-125 duration-300 ease-in-out">
            <img src="{{ asset('img/Logo_Pemerintah.png') }}" alt="logo" width="160px">
        </a>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div id="navmenu" class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center">
            <div class="text-md lg:flex-grow">
                <a href="/"
                    class="transform transition hover:scale-125 duration-200 ease-in-out mt-4 lg:inline-block lg:mt-0 text-black mr-8">
                    Dashboard
                </a>
                <a href="#ikonmenu"
                    class="transform transition hover:scale-125 duration-200 ease-in-out mt-4 lg:inline-block lg:mt-0 text-black mr-8">
                    Unsur Pengaduan
                </a>
                <a href="#dsrhukum"
                    class="transform transition hover:scale-125 duration-200 ease-in-out mt-4 lg:inline-block lg:mt-0 text-black mr-8">
                    Dasar Hukum
                </a>
                <a href="#saluranpengaduan"
                    class="transform transition hover:scale-125 duration-200 ease-in-out mt-4 lg:inline-block lg:mt-0 text-black mr-8">
                    Saluran Pengaduan
                </a>
            </div>
            <div>
                <button
                    class="text-black font-normal rounded-md py-3 border-black px-4 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <a href="{{ route('login') }}">Masuk</a>
                </button>
                <button
                    class="text-yellow-500 font-medium rounded-md py-3 px-4 border-2 border-black focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <a href="{{ url('register') }}">Daftar</a>
                </button>
            </div>
        </div>
    </nav>

    <!-- Header -->

    <!--Hero-->
    <div class="pt-24 px-16 bg-yellow-200">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div
                class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-black-800">
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    Whistle Blowing System
                </h1>
                <p class="leading-normal text-1xl mb-8">
                    Pelaporan pengaduan dugaan tindak pidana korupsi yang telah terjadi yang melibatkan pegawai dan
                    orang lain yang berkaitan dengan dugaan tindak pidana korupsi yang dilakukan di dalam organisasi
                    tempatnya bekerja
                </p>
                <button
                    class="mx-auto lg:mx-0 bg-yellow-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <a href="{{ url('login') }}">Laporkan!</a>
                </button>

                <div class="flex items-center p-4 bg-yellow-500 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-white font-bold dark:text-gray-400">
                            Jumlah Pengaduan
                        </p>
                        <p class="text-lg font-semibold text-white dark:text-gray-200">
                            <?php echo $jml_pengaduan; ?>
                        </p>
                    </div>
                </div>

                <br>
            </div>

            <!--Right Col-->
            <div class="w-full md:w-3/5 text-center" id="imgslide">
                <img class="object-fill mx-36 transform transition hover:scale-110 duration-300 ease-in-out"
                    src="{{ asset('img/logoooo.png') }}" width="70%" />
            </div>
        </div>
    </div>


    <!-- Unsur Pengaduan -->
    <article id="ikonmenu">

        <!-- LOGO -->
        <div class="w3-row-padding w3-center w3-margin-top" id="card-logo">
            <div class="w3-third" id="logo-3">
                <div class="w3-card w3-container" id="card-logo2" style="min-height:290px">
                    <img src="{{ asset('img/berani.png') }}" alt="" style="width:45%"
                        class="w3-hover-opacity block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out">
                </div>
            </div>

            <div class="w3-third" id="logo-3">
                <div class="w3-card w3-container" id="card-logo-berakhlak" style="min-height:290px">
                    <img src="{{ asset('img/berakhlak.png') }}" alt="" style="width:80%"
                        class="w3-hover-opacity block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out">
                </div>
            </div>

            <div class="w3-third" id="logo-3">
                <div class="w3-card w3-container" id="card-logo2" style="min-height:290px">
                    <img src="{{ asset('img/korupsi.png') }}" alt="" style="width:45%"
                        class="w3-hover-opacity block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out">
                </div>
            </div>
        </div>

        <!------ 5W 1H ------->
        <div class="w3-row-padding w3-center w3-margin-top">
            <div class="w3-third">
                <div class="w3-card w3-container" id="card-unsur" style="min-height:290px">
                    <img src="{{ asset('img/What.png') }}" alt="" style="width:28%"
                        class="w3-circle w3-hover-opacity block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out">
                    <h1 class="text-lg font-bold">WHAT</h1>
                    <p>Apa Perbuatan Berindikasi Pelanggaran Yang Diketahui</p>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-card w3-container" id="card-unsur" style="min-height:290px">
                    <img src="{{ asset('img/Who.png') }}" alt="" style="width:28%"
                        class="w3-circle w3-hover-opacity block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out">
                    <h1 class="text-lg font-bold">WHO</h1>
                    <p>Siapa Yang Bertanggung Jawab / Terlibat dan Terkait Dalam Perbuatan Tersebut</p>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-card w3-container" id="card-unsur" style="min-height:290px">
                    <img src="{{ asset('img/Where.png') }}" alt="" style="width:28%"
                        class="w3-circle w3-hover-opacity block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out">
                    <h1 class="text-lg font-bold">WHERE</h1>
                    <p>Dimana Perbuatan / Kejadian Tersebut Dilakukan</p>
                </div>
            </div>
        </div>

        <div class="w3-row-padding w3-center w3-margin-top">
            <div class="w3-third">
                <div class="w3-card w3-container" id="card-unsur" style="min-height:290px">
                    <img src="{{ asset('img/When.png') }}" alt="" style="width:28%"
                        class="w3-circle w3-hover-opacity block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out">
                    <h1 class="text-lg font-bold">WHEN</h1>
                    <p>Kapan Waktu Perbuatan Tersebut Dilakukan</p>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-card w3-container" id="card-unsur" style="min-height:290px">
                    <img src="{{ asset('img/How.png') }}" alt="" style="width:28%"
                        class="w3-circle w3-hover-opacity block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out">
                    <h1 class="text-lg font-bold">HOW</h1>
                    <p>Bagaimana Perbuatan Tersebut Dilakukan ( Modus, Cara, dan Sebagainya )</p>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-card w3-container" id="card-unsur" style="min-height:290px">
                    <img src="{{ asset('img/Evidence.png') }}" alt="" style="width:28%"
                        class="w3-circle w3-hover-opacity block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out">
                    <h1 class="text-lg font-bold">EVIDENCE</h1>
                    <p>Dilengkapi Dengan Bukti Permulaan (Data, Dokumen, Gambar dan Rekaman) yang Mendukung</p>
                </div>
            </div>
        </div>
    </article>

    <!-- Dasar Hukum -->
    <article id="dsrhukum">
        <div id="pasal" class="card">
            <h1><b>Dasar Hukum</b></h1>
            <hr>
            <ol>
                <li>Undang-Undang Nomor 28 Tahun 1999 tentang Penyelenggaraan Pemerintahan yang
                    Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme;</li>
                <li>Undang-Undang Nomor 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi;
                </li>
                <li>Undang-Undang Nomor 13 Tahun 2006 tentang Perlindungan Saksi dan Korban;</li>
                <li>Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara;</li>
                <li>Undang-Undang Nomor 30 Tahun 2014 tentang Administrasi Pemerintah;</li>
                <li>Peraturan Pemerintah Nomor 60 Tahun 2008 tetang Sistim Pengendalian Intern
                    Pemerintah;</li>
                <li>Peraturan Pemerintah Nomor 53 Tahun 2010 tentang Disiplin Pegawai Negeri Sipil;
                </li>
                <li>Peraturan Pemerintah Nomor 12 Tahun 2017 Pedoman Pembinaan dan Pengawasan
                    Penyelenggaraan Pemerintah Daerah;</li>
                <li>Permen PAN RB Nomor 52 Tahun 2014 tentang Pedoman Pembangunan Zona Integritas
                    Menuju Wilayah Bebas dari Korupsi dan Wilayah Birokrasi Bersih dan Melayani di
                    Lingkungan Instansi Pemerintah;</li>
                <li>Perbup Purbalingga Nomor 30 Tahun 2019 tetang Pedoman Penanganan Pelaporan
                    Pengaduan (Whistle Blowing System) Dugaan Tindak Pidana Korupsi di Kabupaten
                    Purbalingga;</li>
                <li>Undang-Undang Nomor 46 Tahun 2009 tentang Pengadilan Tindak Pidana Korupsi;</li>
                <li>Undang-Undang No. 30 Tahun 2002 tentang Komisi Pemberantasan Tindak Pidana
                    Korupsi;</li>
                <li>Undang-Undang No. 8 Tahun 2010 tentang Pencegahan dan Pemberantasan Tindak
                    Pidana Pencucian Uang;</li>
                <li>Peraturan Pemerintah Nomor 19 Tahun 2000 tentang Tim Gabungan Pemberantasan
                    Tindak Pidana Korupsi;</li>
                <li>Peraturan Pemerintah Nomor 71 Tahun 2000 tentang Tata Cara Pelaksanaan Peran
                    Serta Masyarakat dan Pemberian Penghargaan Dalam Pencegahan dan Pemberantasan
                    Tindak Pidana Korupsi;</li>
                <li>Peraturan Pemerintah Nomor 57 Tahun 2003 tentang Tata Cara Perlindungan Khusus
                    Bagi Pelapor dan Saksi Tindak Pidana Pencucian Uang;</li>
                <li>Peraturan Pemerintah Nomor 63 Tahun 2005 tentang Sistem Manajemen Sumber Daya
                    Manusia Komisi Pemberantasan Korupsi;</li>
                <li>Peraturan Pemerintah Nomor 71 Tahun 2000 tentang Peranserta Masyarakat dan
                    Pemberian Penghargaan dalam Pencegahan dan Pemberantasan Tindak Pidana Korupsi;
                </li>
                <li>Intruksi Presiden Nomor 30 Tahun 1998 tentang Pemberantasan Korupsi, Kolusi dan
                    Nepotisme;</li>
                <li>Intruksi Presiden Nomor 5 Tahun 2004 tentang Percepatan Pemberantasan Korupsi.
                </li>
            </ol>
        </div>
    </article>

    <article id="saluranpengaduan">
        <div id="saluran" class="card">
            <h1><b>Saluran Pengaduan</b></h1>
            <hr>
            <p align="center">
                <img src="{{ asset('img/pengaduan1.png') }}" alt="pengaduan 1" width="800px">
                <img src="{{ asset('img/pengaduan2.png') }}" alt="pengaduan 1" width="800px">
            </p>
        </div>
    </article>
    <br>
    <br>

    <!-- Footer -->
    <footer class="bg-yellow-200">
        <div class="content">
            <div class="top">
                <div class="logo-details">
                    <span class="logo_name"><b>Hubungi Kami</b></span>
                </div>
                <div class="media-icons">
                    <a href="https://www.facebook.com/dinkominfopbg/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/dinkominfopbg?t=naX5S4CA1R8X9P-WXlZ8zg&s=09"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/dinkominfopbg/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCxT0XQLagG7vYRY5kujbR4Q"><i
                            class="fab fa-youtube"></i></a>
                    <a href="https://dinkominfo.purbalinggakab.go.id/"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name"><b>Lokasi</b></li>
                    <li><a href="#">Jl. Letkol Isdiman No. 17 A Purbalingga 53313</a></li>

                </ul>
                <ul class="box">
                    <li class="link_name"><b>Telpon</b></li>
                    <li><a href="#">Telp. (0281) 8902091</a></li>
                    <li><a href="#">Fax. (0281) 8902091</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name"><b>Email</b></li>
                    <li><a href="#">dinkominfo@ purbalinggakab.go.id</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name"><b>Website</b></li>
                    <li><a href="#">dinkominfo. purbalinggakab.go.id</a></li>
                </ul>
            </div>
        </div>
        <br>
        <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
            <span class="w3-text w3-padding w3-black w3-hide-small">Kembali ke Atas</span>
            <a class="w3-button w3-theme" href="#home"><span class="w3-xlarge">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
        </div>
        <br>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Copyright © 2022 <a href="#">Dinas Komunikasi dan Informatika Kab.
                        Purbalingga</a>All rights reserved</span>
                <span>WBS V.2.0.0</span>
            </div>
        </div>
    </footer>
</body>

</html>
