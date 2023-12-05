<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">UMKM Cuy</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"
                    class="nav-link"><i class="fa-solid fa-bars"></i> <span>Dashboard</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'daftar_produk' ? 'active' : '' }}">
                <a href="{{ route('produk.index') }}"
                    class="nav-link"><i class="fa-solid fa-tags"></i> <span>Daftar Produk</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'daftar_pembuat' ? 'active' : '' }}">
                <a href="{{ route('pembuat.index') }}"
                    class="nav-link"><i class="fa-regular fa-file-lines"></i> <span>Daftar Produksi</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'penjualan' ? 'active' : '' }}">
                <a href="{{ route('penjualan.index') }}"
                    class="nav-link"><i class="fa-solid fa-chart-simple"></i> <span>Penjualan</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'informasi' ? 'active' : '' }}">
                <a href="{{ route('informasi') }}"
                    class="nav-link"><i class="fa-solid fa-newspaper"></i> <span>Informasi</span></a>
            </li>
        </ul>
    </aside>
</div>
