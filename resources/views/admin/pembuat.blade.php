@extends('layouts.app')

@section('title', 'Daftar Produksi')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produksi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Produksi</div>
                </div>
            </div>

            <div>
                <button type="button" class="btn btn-icon icon-left btn-primary mb-4" data-toggle="modal"
                    data-target="#modalTambah"><i class="far fa-edit"></i> Tambah Produksi</button>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Produksi</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-striped table-md table">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Produk</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Amirah Maimun</td>
                                    <td>Louis Vuitton Micro Chantilly</td>
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
                    <h5 class="modal-title">Tambah Produksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_pembuat">Nama Pembuat</label>
                        <input type="text" class="form-control" id="nama_pembuat">
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
                        <label for="inputAddress">Isi aja sembarang</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Saya malas mikir</label>
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
                    <h4 class="modal-title">Detail Produksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <h5 class="text-primary">Ini ceritanya detail produksi</h5>
                        </div>
                        <div>
                            <div class="text-muted mb-2">Feel my rhythm, come with me</div>
                            <div class="chocolat-parent">
                                <a href="{{ asset('img/example-image.jpg') }}" class="chocolat-image"
                                    title="Just an example">
                                    <div data-crop-image="285">
                                        <img alt="image" src="{{ asset('img/example-image.jpg') }}" class="img-fluid">
                                    </div>
                                </a>
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

    <!-- Page Specific JS File -->
@endpush
