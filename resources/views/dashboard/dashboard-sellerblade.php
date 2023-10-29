@extends('main-user')

@section('content')
    <div style="height: 140px"></div>
    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" style="height: 80vh">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 80vh">
            <div class="carousel-item active" style="height: 80vh; background: #333333">
                <img class="d-block w-100" src="{{ asset('assets/img/hero1.jpg') }}" alt="First slide" style="opacity: 0.6">
                <div class="carousel-caption d-none d-md-block"
                    style="top: 50%; transform: translateY(-50%); font-size: 30px">
                    <h1 style="font-weight: 800; font-size: 3.5rem">DUKUNG PERTANIAN INDONESIA</h1>
                    <p style="font-size: 1rem">Agromarket Merupakan Platform yang Memudahkan Petani Untuk Mendapatkan
                        Produk-Produk Pertanian dan
                        Menjual Hasil Pertanian</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left" style="font-size: 1rem"><i
                                class="far fa-user"></i>Belanja</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 80vh; background: #333333">
                <img class="d-block w-100" src="{{ asset('assets/img/hero2.jpg') }}" alt="Second slide"
                    style="opacity: 0.6">
                <div class="carousel-caption d-none d-md-block"
                    style="top: 50%; transform: translateY(-50%); font-size: 30px">
                    <h1 style="font-weight: 800; font-size: 3.5rem">SUPORT UMKM PERTANIAN</h1>
                    <p style="font-size: 1rem">Koperasi Unit Desa, Bumdes Pertanian, Petani, Kelompok Tani Dapat Membeli dan
                        Memasarkan Produk Disini</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left" style="font-size: 1rem"><i
                                class="far fa-user"></i>Belanja</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 80vh; background: #333333">
                <img class="d-block w-100" src="{{ asset('assets/img/hero3.jpg') }}" alt="Third slide" style="opacity: 0.6">
                <div class="carousel-caption d-none d-md-block"
                    style="top: 50%; transform: translateY(-50%); font-size: 30px">
                    <h1 style="font-weight: 800; font-size: 3.5rem">PETANI INDONESIA GO INTERNASIONAL</h1>
                    <p style="font-size: 1rem">Agromarket Mempunyai Cita-cita Untuk Dapat Memasarkan Produk Petani Indonesia
                        di Seluruh Dunia </p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left" style="font-size: 1rem"><i
                                class="far fa-user"></i>Belanja</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div style="background-color: #182827; height: 8em; margin-bottom: 30px; padding: 20px">
        <div class="row" style="padding: auto 100px">
            <div class="col-lg-4 col-md-6 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-shipping-fast"
                            style="display: block;
                        font-size: 24px;
                        margin-right: 15px;
                        color: #67E2D4;
                        width: 65px;
                        height: 65px;
                        text-align: center;
                        line-height: 60px;
                        border: 2px #67E2D4 dotted;
                        border-radius: 999px;"></i>
                    </div>
                    <div class="content" style="color: white" bis_skin_checked="1">
                        <h3
                            style="display: block;
                        line-height: 22px;
                        font-size: 18px;
                        margin-bottom: 4px;">
                            Kirim Se-Indonesia</h3>
                        <p
                            style="margin-bottom: 0px; 
                        opacity: 0.75;
                        font-weight: lighter">
                            Bisa Mengirimkan Barang Ke Seluruh Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-credit-card"
                            style="display: block;
                        font-size: 24px;
                        margin-right: 15px;
                        color: #67E2D4;
                        width: 65px;
                        height: 65px;
                        text-align: center;
                        line-height: 60px;
                        border: 2px #67E2D4 dotted;
                        border-radius: 999px;"></i>
                    </div>
                    <div class="content" style="color: white" bis_skin_checked="1">
                        <h3
                            style="display: block;
                        line-height: 22px;
                        font-size: 18px;
                        margin-bottom: 4px;">
                            Bayar Mudah</h3>
                        <p
                            style="margin-bottom: 0px; 
                        opacity: 0.75;
                        font-weight: lighter">
                            Bisa COD atau M-Banking & Dompet Digital</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"
                            style="display: block;
                        font-size: 24px;
                        margin-right: 15px;
                        color: #67E2D4;
                        width: 65px;
                        height: 65px;
                        text-align: center;
                        line-height: 60px;
                        border: 2px #67E2D4 dotted;
                        border-radius: 999px;"></i>
                    </div>
                    <div class="content" style="color: white" bis_skin_checked="1">
                        <h3
                            style="display: block;
                        line-height: 22px;
                        font-size: 18px;
                        margin-bottom: 4px;">
                            Refund</h3>
                        <p
                            style="margin-bottom: 0px; 
                        opacity: 0.75;
                        font-weight: lighter">
                            Jika Barang Tidak Sesuai Bisa Kamu Kembalikan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper container">
        <div class="main-content" style="padding-top:0">
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="empty-state">
                                <h1 style="font-weight: 800; font-size: 2.5rem"><span class="text-primary">OUR</span>
                                    PRODUCT</h1>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-bottom: 20px">
                            <div class="card-product-body">
                                <div class="container-card-product">
                                    <div
                                        style=" height: 80%;
                                            width:100%;
                                            background: url({{ asset('assets/img/product/swan.jpg') }}) no-repeat center center; 
                                            -webkit-background-size: 100%;
                                            -moz-background-size: 100%;
                                            -o-background-size: 100%;
                                            background-size: 100%;">
                                    </div>
                                    <div class="bottom-card">
                                        <div class="details-card">
                                            <h4 style="font-size: 1.3em; line-height: 20px">Swan GSE 16</h4>
                                            <p style="line-height: 0">Rp. 850.000</p>
                                        </div>
                                        <a href="#" class="buy-card" style="display: flex; align-items: center; justify-content: center; text-decoration: none;">
                                            <i class="fas fa-cart-shopping" style="font-size: 2.8em"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="inside">
                                    <div class="icon"><i class="fas fa-info-circle" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="contents">
                                        <p style="line-height:5px">Kondisi : Baru</p>
                                        <p style="line-height:5px">Berat : 10kg</p>
                                        <p style="line-height:5px">Deskripsi :</p>
                                        <p style="line-height: 17px; text-align: justify;">Tangki Semprot Swan GSE 16
                                            CAP BANTENG. Produk SWAN sangat terkenal dikalangan
                                            para petani karena kualitas dan mutunya yang kuat, tahan lama. Dengan alat
                                            ini
                                            kita bisa hemat waktu dan tenaga, hasilnya biaya produksi tanam bisa jadi
                                            turun
                                            dan hasil bisa meningkat maksimal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="margin-bottom: 20px">
                            <div class="card-product-body">
                                <div class="container-card-product">
                                    <div
                                        style=" height: 80%;
                                        width:100%;
                                        background: url({{ asset('assets/img/product/swan.jpg') }}) no-repeat center center; 
                                        -webkit-background-size: 100%;
                                        -moz-background-size: 100%;
                                        -o-background-size: 100%;
                                        background-size: 100%;">
                                    </div>
                                    <div class="bottom-card">
                                        <div class="details-card">
                                            <h4 style="font-size: 1.3em; line-height: 20px">Swan GSE 16</h4>
                                            <p style="line-height: 0">Rp. 850.000</p>
                                        </div>
                                        <a href="#" style="text-decoration: none">
                                            <div class="buy-card"
                                                style=" display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-cart-shopping" style="font-size: 2.8em"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="inside">
                                    <div class="icon"><i class="fas fa-info-circle" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="contents">
                                        <p style="line-height:5px">Kondisi : Baru</p>
                                        <p style="line-height:5px">Berat : 10kg</p>
                                        <p style="line-height:5px">Deskripsi :</p>
                                        <p style="line-height: 17px; text-align: justify;">Tangki Semprot Swan GSE 16
                                            CAP BANTENG. Produk SWAN sangat terkenal dikalangan
                                            para petani karena kualitas dan mutunya yang kuat, tahan lama. Dengan alat
                                            ini
                                            kita bisa hemat waktu dan tenaga, hasilnya biaya produksi tanam bisa jadi
                                            turun
                                            dan hasil bisa meningkat maksimal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="margin-bottom: 20px">
                            <div class="card-product-body">
                                <div class="container-card-product">
                                    <div
                                        style=" height: 80%;
                                    width:100%;
                                    background: url({{ asset('assets/img/product/swan.jpg') }}) no-repeat center center; 
                                    -webkit-background-size: 100%;
                                    -moz-background-size: 100%;
                                    -o-background-size: 100%;
                                    background-size: 100%;">
                                    </div>
                                    <div class="bottom-card">
                                        <div class="details-card">
                                            <h4 style="font-size: 1.3em; line-height: 20px">Swan GSE 16</h4>
                                            <p style="line-height: 0">Rp. 850.000</p>
                                        </div>
                                        <a href="#" style="text-decoration: none">
                                            <div class="buy-card"
                                                style=" display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-cart-shopping" style="font-size: 2.8em"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="inside">
                                    <div class="icon"><i class="fas fa-info-circle" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="contents">
                                        <p style="line-height:5px">Kondisi : Baru</p>
                                        <p style="line-height:5px">Berat : 10kg</p>
                                        <p style="line-height:5px">Deskripsi :</p>
                                        <p style="line-height: 17px; text-align: justify;">Tangki Semprot Swan GSE 16
                                            CAP BANTENG. Produk SWAN sangat terkenal dikalangan
                                            para petani karena kualitas dan mutunya yang kuat, tahan lama. Dengan alat
                                            ini
                                            kita bisa hemat waktu dan tenaga, hasilnya biaya produksi tanam bisa jadi
                                            turun
                                            dan hasil bisa meningkat maksimal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="margin-bottom: 20px">
                            <div class="card-product-body">
                                <div class="container-card-product">
                                    <div
                                        style=" height: 80%;
                                width:100%;
                                background: url({{ asset('assets/img/product/swan.jpg') }}) no-repeat center center; 
                                -webkit-background-size: 100%;
                                -moz-background-size: 100%;
                                -o-background-size: 100%;
                                background-size: 100%;">
                                    </div>
                                    <div class="bottom-card">
                                        <div class="details-card">
                                            <h4 style="font-size: 1.3em; line-height: 20px">Swan GSE 16</h4>
                                            <p style="line-height: 0">Rp. 850.000</p>
                                        </div>
                                        <a href="#" style="text-decoration: none">
                                            <div class="buy-card"
                                                style=" display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-cart-shopping" style="font-size: 2.8em"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="inside">
                                    <div class="icon"><i class="fas fa-info-circle" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="contents">
                                        <p style="line-height:5px">Kondisi : Baru</p>
                                        <p style="line-height:5px">Berat : 10kg</p>
                                        <p style="line-height:5px">Deskripsi :</p>
                                        <p style="line-height: 17px; text-align: justify;">Tangki Semprot Swan GSE 16
                                            CAP BANTENG. Produk SWAN sangat terkenal dikalangan
                                            para petani karena kualitas dan mutunya yang kuat, tahan lama. Dengan alat
                                            ini
                                            kita bisa hemat waktu dan tenaga, hasilnya biaya produksi tanam bisa jadi
                                            turun
                                            dan hasil bisa meningkat maksimal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="margin-bottom: 20px">
                            <div class="card-product-body">
                                <div class="container-card-product">
                                    <div
                                        style=" height: 80%;
                            width:100%;
                            background: url({{ asset('assets/img/product/swan.jpg') }}) no-repeat center center; 
                            -webkit-background-size: 100%;
                            -moz-background-size: 100%;
                            -o-background-size: 100%;
                            background-size: 100%;">
                                    </div>
                                    <div class="bottom-card">
                                        <div class="details-card">
                                            <h4 style="font-size: 1.3em; line-height: 20px">Swan GSE 16</h4>
                                            <p style="line-height: 0">Rp. 850.000</p>
                                        </div>
                                        <a href="#" style="text-decoration: none">
                                            <div class="buy-card"
                                                style=" display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-cart-shopping" style="font-size: 2.8em"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="inside">
                                    <div class="icon"><i class="fas fa-info-circle" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="contents">
                                        <p style="line-height:5px">Kondisi : Baru</p>
                                        <p style="line-height:5px">Berat : 10kg</p>
                                        <p style="line-height:5px">Deskripsi :</p>
                                        <p style="line-height: 17px; text-align: justify;">Tangki Semprot Swan GSE 16
                                            CAP BANTENG. Produk SWAN sangat terkenal dikalangan
                                            para petani karena kualitas dan mutunya yang kuat, tahan lama. Dengan alat
                                            ini
                                            kita bisa hemat waktu dan tenaga, hasilnya biaya produksi tanam bisa jadi
                                            turun
                                            dan hasil bisa meningkat maksimal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="margin-bottom: 20px">
                            <div class="card-product-body">
                                <div class="container-card-product">
                                    <div
                                        style=" height: 80%;
                            width:100%;
                            background: url({{ asset('assets/img/product/swan.jpg') }}) no-repeat center center; 
                            -webkit-background-size: 100%;
                            -moz-background-size: 100%;
                            -o-background-size: 100%;
                            background-size: 100%;">
                                    </div>
                                    <div class="bottom-card">
                                        <div class="details-card">
                                            <h4 style="font-size: 1.3em; line-height: 20px">Swan GSE 16</h4>
                                            <p style="line-height: 0">Rp. 850.000</p>
                                        </div>
                                        <a href="#" style="text-decoration: none">
                                            <div class="buy-card"
                                                style=" display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-cart-shopping" style="font-size: 2.8em"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="inside">
                                    <div class="icon"><i class="fas fa-info-circle" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="contents">
                                        <p style="line-height:5px">Kondisi : Baru</p>
                                        <p style="line-height:5px">Berat : 10kg</p>
                                        <p style="line-height:5px">Deskripsi :</p>
                                        <p style="line-height: 17px; text-align: justify;">Tangki Semprot Swan GSE 16
                                            CAP BANTENG. Produk SWAN sangat terkenal dikalangan
                                            para petani karena kualitas dan mutunya yang kuat, tahan lama. Dengan alat
                                            ini
                                            kita bisa hemat waktu dan tenaga, hasilnya biaya produksi tanam bisa jadi
                                            turun
                                            dan hasil bisa meningkat maksimal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="margin-bottom: 20px">
                            <div class="card-product-body">
                                <div class="container-card-product">
                                    <div
                                        style=" height: 80%;
                            width:100%;
                            background: url({{ asset('assets/img/product/swan.jpg') }}) no-repeat center center; 
                            -webkit-background-size: 100%;
                            -moz-background-size: 100%;
                            -o-background-size: 100%;
                            background-size: 100%;">
                                    </div>
                                    <div class="bottom-card">
                                        <div class="details-card">
                                            <h4 style="font-size: 1.3em; line-height: 20px">Swan GSE 16</h4>
                                            <p style="line-height: 0">Rp. 850.000</p>
                                        </div>
                                        <a href="#" style="text-decoration: none">
                                            <div class="buy-card"
                                                style=" display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-cart-shopping" style="font-size: 2.8em"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="inside">
                                    <div class="icon"><i class="fas fa-info-circle" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="contents">
                                        <p style="line-height:5px">Kondisi : Baru</p>
                                        <p style="line-height:5px">Berat : 10kg</p>
                                        <p style="line-height:5px">Deskripsi :</p>
                                        <p style="line-height: 17px; text-align: justify;">Tangki Semprot Swan GSE 16
                                            CAP BANTENG. Produk SWAN sangat terkenal dikalangan
                                            para petani karena kualitas dan mutunya yang kuat, tahan lama. Dengan alat
                                            ini
                                            kita bisa hemat waktu dan tenaga, hasilnya biaya produksi tanam bisa jadi
                                            turun
                                            dan hasil bisa meningkat maksimal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="margin-bottom: 20px">
                            <div class="card-product-body">
                                <div class="container-card-product">
                                    <div
                                        style=" height: 80%;
                            width:100%;
                            background: url({{ asset('assets/img/product/swan.jpg') }}) no-repeat center center; 
                            -webkit-background-size: 100%;
                            -moz-background-size: 100%;
                            -o-background-size: 100%;
                            background-size: 100%;">
                                    </div>
                                    <div class="bottom-card">
                                        <div class="details-card">
                                            <h4 style="font-size: 1.3em; line-height: 20px">Swan GSE 16</h4>
                                            <p style="line-height: 0">Rp. 850.000</p>
                                        </div>
                                        <a href="#" style="text-decoration: none">
                                            <div class="buy-card"
                                                style=" display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-cart-shopping" style="font-size: 2.8em"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="inside">
                                    <div class="icon"><i class="fas fa-info-circle" style="font-size: 20px;"></i>
                                    </div>
                                    <div class="contents">
                                        <p style="line-height:5px">Kondisi : Baru</p>
                                        <p style="line-height:5px">Berat : 10kg</p>
                                        <p style="line-height:5px">Deskripsi :</p>
                                        <p style="line-height: 17px; text-align: justify;">Tangki Semprot Swan GSE 16
                                            CAP BANTENG. Produk SWAN sangat terkenal dikalangan
                                            para petani karena kualitas dan mutunya yang kuat, tahan lama. Dengan alat
                                            ini
                                            kita bisa hemat waktu dan tenaga, hasilnya biaya produksi tanam bisa jadi
                                            turun
                                            dan hasil bisa meningkat maksimal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
