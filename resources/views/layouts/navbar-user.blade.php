<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <a href="index.html" class="navbar-brand sidebar-gone-hide">Agromarket</a>
    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    <div class="nav-collapse">
        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item active"><a href="#" class="nav-link">Indonesian Agricultural</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Farmers Business</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </div>
    <form class="form-inline ml-auto">
        <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
                <div class="search-header">
                    Histories
                </div>
                <div class="search-item">
                    <a href="#">How to hack NASA using CSS</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="#">Kodinger.com</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="#">#Stisla</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-header">
                    Result
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png"
                            alt="product">
                        oPhone S9 Limited Edition
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png"
                            alt="product">
                        Drone X2 New Gen-7
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png"
                            alt="product">
                        Headphone Blitz
                    </a>
                </div>
                <div class="search-header">
                    Projects
                </div>
                <div class="search-item">
                    <a href="#">
                        <div class="search-icon bg-danger text-white mr-3">
                            <i class="fas fa-code"></i>
                        </div>
                        Stisla Admin Template
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <div class="search-icon bg-primary text-white mr-3">
                            <i class="fas fa-laptop"></i>
                        </div>
                        Create a new Homepage Design
                    </a>
                </div>
            </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="{{ url('login') }}" class="nav-link nav-link-lg nav-link-user">LOGIN</a>
        </li>
        <li class="dropdown">
            {{-- <a href="#" class="nav-link nav-link-lg nav-link-user">CONTACT</a> --}}
            <a href="{{ url('logout') }}" class="nav-link nav-link-lg nav-link-user">LOGOUT</a>
        </li>
    </ul>
</nav>

<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">
            {{-- <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i
                        class="fas fa-fire"></i><span>Pembibitan</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a href="index-0.html" class="nav-link">Benih Padi</a></li>
                    <li class="nav-item"><a href="index-0.html" class="nav-link">Benih Sayuran</a></li>
                    <li class="nav-item"><a href="index.html" class="nav-link">Bibit Buah</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-heart"></i><span>Pestisida</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a href="index-0.html" class="nav-link">Insektisida</a></li>
                    <li class="nav-item"><a href="index-0.html" class="nav-link">Fungisida</a></li>
                    <li class="nav-item"><a href="index.html" class="nav-link">Herbisida</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i
                        class="far fa-clone"></i><span>Pupuk Organik</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a href="#" class="nav-link">1</a></li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">2</a></li>
                </ul>
            </li> --}}
            <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fa-solid fa-seedling"></i><span>Pembibitan</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fa-solid fa-bottle-droplet"></i><span>Pestisida</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fa-solid fa-fire-flame-curved"></i><span>Pupuk Organik</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link"><i class="fa-solid fa-gear"></i><span>Perlengkapan</span></a>
            </li>
        </ul>
    </div>
</nav>
