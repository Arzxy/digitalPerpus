<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_id"]) == ""){
		$_SESSION["ses_id"] = "-";
		$_SESSION["ses_nama"] = "Pengunjung";
		$_SESSION["ses_jenis"] = "Tidak diketahui";
		$_SESSION["ses_level"] = "-";
    }
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DIGITAL LIBRARY</title>
	<link rel="icon" href="dist/img/baca.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.css">
    
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .background-primary {
            background-color: rgb(44,103,137)!important;
        }
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            padding: 0 5%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(rgba(12, 3, 51, 0.3), rgba(12, 3, 51, 0.3));
        }
        .back-video {
            position: absolute;
            z-index: -1;
            right: 0;
            bottom: 0;
        }
        .content h1 {
            font-size: 15vh;
            color: #fff;
            font-weight: 600;
            transition: 0.5s;
        }
        .fw-bold {
            font-weight: 700 !important;
        }
        .hero .content a {
            text-decoration: none;
            display: inline-block;
            font-size: 24px;
            color: #fff;
            border: 2px solid #fff;
            padding: 14px 70px;
            border-radius: 50px;
            margin-top: 20px;
        }
        .fasilitas, .fasilitas3 {
            padding-top: 48px;
            padding-left: 12px;
            padding-right: 12px;
            text-align: center;
        }
        .fasilitas2 {
            padding-left: 12px;
            padding-right: 12px;
            text-align: center;
        }
        .display-3 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 600;
            line-height: 1.2;
        }
        .lingkaran {
            display: inline-block;
            border-radius: 50%;
            width: 150px;
            margin: auto;
            height: 150px;
            color: #fff;
            background-color: #537fe7;
        }
        footer {
            background-color: #f9664f;
        }
    </style>
</head>
<body>
    <div class="hero">
        <video src="VideoPerpus.mp4" autoplay="" loop="" muted="" plays-inline="" class="back-video"></video>
        <!-- <img src="https://i.giphy.com/9DefTAr6NRRnV82U08.webp" width="100%" height="100%" class="back-video"></img> -->
        <div class="content text-center">
            <h1 class=" fw-bold ">Digital Library</h1>
            <a href="page.php" class="background-primary">Baca Yuk!</a>
        </div>
    </div>
    <div class="fasilitas">
        <h2 class="display-3">Fasilitas</h2>
        <p>Di Perpustakaan Mutiara Ilmu, tersedia fasilitas fasilitas yang dapat membantu Kemudahan dalam kenyamanan para pengunjung, seperti :</p>
        <div class="row">
            <div class="col-lg-4 p-5">
                <span class="lingkaran background-primary">
                    <svg style="margin-top: 30px;" xmlns="http://www.w3.org/2000/svg" width="70" height="80" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fff" d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                </span>

                <h3 class="mt-3">Koleksi</h3>
                <p>Menampilkan jenis-jenis sumber daya digital yang tersedia seperti e-book, jurnal elektronik, fiksi, non fiksi, dll.</p>
            </div>
            <div class="col-lg-4 p-5">
                <span class="lingkaran background-primary">
                    <svg style="margin-top: 30px;" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fff" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                </span>

                <h3 class="mt-3">Akses 24/7</h3>
                <p>Menekankan ketersediaan layanan tanpa batasan waktu.</p>
            </div>
            <div class="col-lg-4 p-5">
                <span class="lingkaran background-primary">
                    <svg style="margin-top: 30px;" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                </span>

                <h3 class="mt-3">Fitur Pencarian Canggih</h3>
                <p>Memudahkan pengunjung untuk mencari jenis-jenis buku dengan efesiensi.</p>
            </div>
        </div>
    </div>
    <div class="fasilitas2 pb-5">
        <div class="container">
            <div class="pb-3">
                <h2 class="display-3">Tentang</h2>
                <p>Digital Library by GyanSetu PEI</p>
            </div>
            <div class="row">
                <div class="col-lg-7" style="display: flex; justify-content: center; align-items: center;">
                    <p style="text-align: center;">
                        Selamat datang di Digital Library by GyanSetu PEI, platform inovatif yang didedikasikan untuk menyediakan akses mudah dan cepat ke beragam sumber daya pendidikan. Sebagai inisiatif dari GyanSetu PEI, perpustakaan digital ini bertujuan untuk mendukung pembelajaran dan penelitian dengan menyediakan koleksi konten berkualitas tinggi yang mencakup berbagai disiplin ilmu.
                    </p>
                </div>
                <div class="col-lg-5" style="display: flex; align-items: center;">
                    <img src="9.png-1024x427.webp" alt=" " style="object-fit: cover; width: 100%;" height="300">
                </div>
            </div>
        </div>
    </div>
    <footer class="row p-5 background-primary text-white" style="border-top: 5px; border-color: #000;">
        <div class="col-6 col-lg-4 pb-3" style="display: flex;justify-content: center;">
			<div>
				<h2 class="display-3" style="font-size: 21px;">Lokasi Kami:</h2>
				<p>Kembangkuning, Jatiluhur, Purwakarta,<br>Jawa Barat, Indonesia - 41152</p>
			</div>
        </div>
        <div class="col-6 col-lg-4 pb-3" style="display: flex;justify-content: center;">
			<div>
				<h2 class="display-3" style="font-size: 21px;">Sosial Media:</h2>
				<div style="display: flex;">
					<a href="https://www.facebook.com/pmb.indorama.9" class="p-1">
						<svg fill="#fff" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
					</a>
					<a href="https://www.instagram.com/poltek_indorama/" class="p-1">
						<svg fill="#fff" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"></path></svg>
					</a>
					<a href="https://www.youtube.com/watch?v=aYeLRhGBaRI" class="p-1">
						<svg fill="#fff" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
					</a>
				</div>
			</div>
        </div>
        <div class="col-12 col-lg-4 pb-3" style="display: flex;justify-content: center;">
			<div>
                <h2 class="display-3" style="font-size: 21px;">Peta Website:</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7448396230325!2d107.41477447378507!3d-6.553863164066173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690eef96f8b8dd%3A0x90e544db728376b5!2sPEI%20-%20Politeknik%20Enjinering%20Indorama!5e0!3m2!1sid!2sid!4v1724320579085!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>