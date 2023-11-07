    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('dashboard-seller') }}">Agromarket</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('dashboard-seller') }}">AM</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu Agromarket</li>
            <li><a class="nav-link" href="{{ url('dashboard-seller') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cart-shopping"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{ url('pembibitan-seller') }}">Pembibitan</a></li>
                    <li><a class="nav-link" href="{{ url('pestisida-seller') }}">Pestisida</a></li>
                    <li><a class="nav-link" href="{{ url('pupuk') }}">Pupuk Organik</a></li>
                    <li><a class="nav-link" href="{{ url('perlengkapan-seller') }}">Perlengkapan</a></li>
                    <li><a class="nav-link" href="{{ url('create-product') }}">Create Product</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                    <span>Seller</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('profil-seller') }}">Profil Seller</a></li>
                    <li><a class="nav-link" href="{{ url('hasil-penjualan') }}">Hasil Penjualan</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa-solid fa-truck-fast"></i>
                    <span>Pesanan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('pesanan') }}">Pesanan</a></li>
                    <li><a class="nav-link" href="{{ url('riwayat-pesanan') }}">Riwayat Pesanan</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{ url('dashboard-seller') }}"><i class="fas fa-gear"></i> <span>Setting</span></a></li>
        </ul>
    </aside>
