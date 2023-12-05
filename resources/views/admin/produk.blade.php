@extends('layouts.app')

@section('title', 'Daftar Produk')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/card_style.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Produk</div>
                </div>
            </div>

            <div>
                <button type="button" class="btn btn-icon icon-left btn-primary mb-4" data-toggle="modal"
                    data-target="#modalTambah"><i class="far fa-edit"></i> Tambah Produk</button>
            </div>

            <div class="section-body">
                <div class="list-produk">
                    <div class="card">
                        <div class="card-header">
                            <h4>Louis Vuitton Micro Chantilly</h4>
                        </div>
                        <div class="px-4">
                            <button class="btn btn-icon icon-left btn-primary" data-toggle="modal"
                                data-target="#modalDetail">
                                Detail
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="text-muted mb-2">Click the picture below to see the magic!</div>
                            <div class="chocolat-parent">
                                <a href="{{ asset('img/example-image.jpg') }}" class="chocolat-image"
                                    title="Just an example">
                                    <div>
                                        <img alt="image" src="{{ asset('img/example-image.jpg') }}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Gucci Felt Wool Coat</h4>
                        </div>
                        <div class="px-4">
                            <button class="btn btn-icon icon-left btn-primary" data-toggle="modal"
                                data-target="#modalDetail">
                                Detail
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="text-muted mb-2">Click the picture below to see the magic!</div>
                            <div class="chocolat-parent">
                                <a href="{{ asset('img/example-image.jpg') }}" class="chocolat-image"
                                    title="Just an example">
                                    <div>
                                        <img alt="image" src="{{ asset('img/example-image.jpg') }}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Hourglass 100MM Bootie</h4>
                        </div>
                        <div class="px-4">
                            <button class="btn btn-icon icon-left btn-primary" data-toggle="modal"
                                data-target="#modalDetail">
                                Detail
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="text-muted mb-2">Click the picture below to see the magic!</div>
                            <div class="chocolat-parent">
                                <a href="{{ asset('img/example-image.jpg') }}" class="chocolat-image"
                                    title="Just an example">
                                    <div>
                                        <img alt="image" src="{{ asset('img/example-image.jpg') }}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Louis Vuitton Micro Chantilly</h4>
                        </div>
                        <div class="px-4">
                            <button class="btn btn-icon icon-left btn-primary" data-toggle="modal"
                                data-target="#modalDetail">
                                Detail
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="text-muted mb-2">Click the picture below to see the magic!</div>
                            <div class="chocolat-parent">
                                <a href="{{ asset('img/example-image.jpg') }}" class="chocolat-image"
                                    title="Just an example">
                                    <div>
                                        <img alt="image" src="{{ asset('img/example-image.jpg') }}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Gucci Felt Wool Coat</h4>
                        </div>
                        <div class="px-4">
                            <button class="btn btn-icon icon-left btn-primary" data-toggle="modal"
                                data-target="#modalDetail">
                                Detail
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="text-muted mb-2">Click the picture below to see the magic!</div>
                            <div class="chocolat-parent">
                                <a href="{{ asset('img/example-image.jpg') }}" class="chocolat-image"
                                    title="Just an example">
                                    <div>
                                        <img alt="image" src="{{ asset('img/example-image.jpg') }}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Hourglass 100MM Bootie</h4>
                        </div>
                        <div class="px-4">
                            <button class="btn btn-icon icon-left btn-primary" data-toggle="modal"
                                data-target="#modalDetail">
                                Detail
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="text-muted mb-2">Click the picture below to see the magic!</div>
                            <div class="chocolat-parent">
                                <a href="{{ asset('img/example-image.jpg') }}" class="chocolat-image"
                                    title="Just an example">
                                    <div>
                                        <img alt="image" src="{{ asset('img/example-image.jpg') }}"
                                            class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    {{-- MODAL TAMBAH START --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="modalTambah">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Produksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk">
                    </div>
                    <div class="form-group">
                        <label for="produk">Deskripsi Produk</label>
                        <textarea class="form-control" data-height="150" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Gambar Produk</label>
                        <input type="file" class="form-control" id="inputAddress">
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
                            <h5 class="text-primary">Ini ceritanya detail produk</h5>
                        </div>
                        <div>
                            <div class="text-muted mb-2">Feel my rhythm, come with me</div>
                            <div class="chocolat-parent">
                                <a href="{{ asset('img/example-image.jpg') }}" class="chocolat-image"
                                    title="Just an example">
                                    <div data-crop-image="285">
                                        <img alt="image" src="{{ asset('img/example-image.jpg') }}"
                                            class="img-fluid">
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
