@extends('layouts.app')

@section('title', 'Penjualan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/flag-icon-css/css/flag-icon.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Penjualan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Penjualan</div>
                </div>
            </div>

            <div>
                <button type="button" class="btn btn-icon icon-left btn-primary mb-4" data-toggle="modal"
                    data-target="#modalTambah"><i class="far fa-edit"></i> Tambah Penjualan</button>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>List Penjualan</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-striped table-md table">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Produk</th>
                                    <th>Tanggal Terjual</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Amirah Maimun</td>
                                    <td>Louis Vuitton Micro Chantilly</td>
                                    <td>27 Desember 2022</td>
                                    <td>
                                        <button class="btn btn-icon icon-left btn-light" data-toggle="modal"
                                            data-target="#modalDetail">
                                            <i class="fa-solid fa-eye mr-2"></i>
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Nanda Ayu Puspita</td>
                                    <td>Gucci Felt Wool Coat</td>
                                    <td>13 Juli 2023</td>
                                    <td>
                                        <button class="btn btn-icon icon-left btn-light" data-toggle="modal"
                                            data-target="#modalDetail">
                                            <i class="fa-solid fa-eye mr-2"></i>
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Amala Mulyasari</td>
                                    <td>Hourglass 100MM Bootie</td>
                                    <td>4 Mei 2022</td>
                                    <td>
                                        <button class="btn btn-icon icon-left btn-light" data-toggle="modal"
                                            data-target="#modalDetail">
                                            <i class="fa-solid fa-eye mr-2"></i>
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i
                                            class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
        </section>
    </div>

    {{-- MODAL TAMBAH START --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="modalTambah">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_pembuat">Nama Pembuat</label>
                        <select id="nama_pembuat" class="form-control">
                            <option selected>Pilih cuy</option>
                            <option>Amirah Maimun</option>
                            <option>Nanda Ayu Puspita</option>
                            <option>Amala Mulyasari</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="produk">Pilih Produk</label>
                        <select id="produk" class="form-control">
                            <option selected>Pilih cuy</option>
                            <option>Louis Vuitton Micro Chantilly</option>
                            <option>Gucci Felt Wool Coat</option>
                            <option>Hourglass 100MM Bootie</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Tanggal Terjual</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Tutor belajar Vue.js</label>
                        <input type="text" class="form-control" id="inputAddress2">
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    {{-- MODAL TAMBAH END --}}

    {{-- MODAL DETAIL START --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="modalDetail">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Penjualan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card modal-body">
                    <div class="card-header">
                        <h4>Statistik</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn active">Mingguan</a>
                            <a href="#" class="btn">Bulanan</a>
                            <a href="#" class="btn">Tahunan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart2" height="180"></canvas>
                        <div class="statistic-details mt-1">
                            <div class="statistic-details-item">
                                <div class="text-small text-muted"><span class="text-primary"><i
                                            class="fas fa-caret-up"></i></span> 7%</div>
                                <div class="detail-value">$243</div>
                                <div class="detail-name">Sekarang</div>
                            </div>
                            <div class="statistic-details-item">
                                <div class="text-small text-muted"><span class="text-danger"><i
                                            class="fas fa-caret-down"></i></span> 23%</div>
                                <div class="detail-value">$2,902</div>
                                <div class="detail-name">Minggu ini</div>
                            </div>
                            <div class="statistic-details-item">
                                <div class="text-small text-muted"><span class="text-primary"><i
                                            class="fas fa-caret-up"></i></span>9%</div>
                                <div class="detail-value">$12,821</div>
                                <div class="detail-name">Bulan ini</div>
                            </div>
                            <div class="statistic-details-item">
                                <div class="text-small text-muted"><span class="text-primary"><i
                                            class="fas fa-caret-up"></i></span> 19%</div>
                                <div class="detail-value">$92,142</div>
                                <div class="detail-name">Tahun ini</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- MODAL DETAIL END --}}
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-statistic.js') }}"></script>
@endpush
