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
                    @forelse ($produks as $produk)
                        <div class="card" id="produk{{ $produk->id }}">
                            <div class="card-header pb-0">
                                <h3>{{ $produk->nama_produk }}</h3>
                            </div>
                            <div class="card-body pt-0">
                                <div class="chocolat-parent mb-3 rounded-lg" style="overflow: hidden;">
                                    <a href="{{ asset("storage/$produk->gambar_produk") }}" class="chocolat-image"
                                        title="Just an example">
                                        <div>
                                            <img alt="image" src="{{ asset('storage/' . $produk->gambar_produk) }}"
                                                height="200"
                                                style="aspect-ratio: 16/9; object-fit: cover; object-position: center;">
                                        </div>
                                    </a>
                                </div>
                                <div class="float-right">
                                    <button class="btn btn-icon icon-left btn-sm btn-primary" onclick="detailProduk({{ $produk->id }})">
                                        Edit
                                    </button>
                                    <button class="btn btn-icon icon-left btn-sm btn-light mx-1"
                                        onclick="detailProduk({{ $produk->id }})">
                                        Detail
                                    </button>
                                    <button class="btn btn-sm btn-danger"
                                        onclick="hapusProduk({{ $produk->id }})">Hapus</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Belum ada data</p>
                    @endforelse
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
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                        </div>
                        <div class="form-group">
                            <label for="produk">Deskripsi Produk</label>
                            <textarea class="form-control" data-height="150" name="deskripsi_produk"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambarProduk">Gambar Produk</label>
                            <input type="file" class="form-control" id="gambarProduk" name="gambar_produk">
                        </div>
                        <div class="form-group">
                            <label for="hargaJual">Harga Jual</label>
                            <input type="number" class="form-control" id="hargaJual" name="harga_jual">
                        </div>
                        <div class="form-group">
                            <label for="biayaPembuatan">Biaya Pembuatan</label>
                            <input type="number" class="form-control" id="biayaPembuatan" name="biaya_pembuatan">
                        </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" value="Simpan" />
                    </form>
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
                    <h4 class="modal-title">Detail Produk</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <h4 class="text-primary" id="namaDetailProduk"></h4>
                        </div>
                        <div>
                            <div class="text-muted">Harga jual : <span id="detailHargaJual"
                                    class="font-weight-bold"></span></div>
                            <div class="text-muted mb-2">Biaya pembuatan : <span id="detailBiayaPembuatan"
                                    class="font-weight-bold"></span></div>
                            <div class="chocolat-parent rounded-lg" style="overflow: hidden;">
                                <a href="{{ asset('img/example-image.jpg') }}" class="chocolat-image"
                                    title="Just an example" id="linkGambarProduk">
                                    <div>
                                        <img alt="image" src="{{ asset('img/example-image.jpg') }}" height="400"
                                            id="detailGambarProduk"
                                            style="object-fit: cover; aspect-ratio: 16/9; object-position: center;">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function hapusProduk(id) {
            let produkId = id;
            let token = $("meta[name='csrf-token']").attr("content");

            Swal.fire({
                title: "Yakin ingin menghapus produk ini?",
                text: "Tindakan ini tidak bisa dibatalkan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Batal",
                confirmButtonText: "Iya, hapus produk!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/produk/${produkId}`,
                        type: "DELETE",
                        cache: false,
                        data: {
                            "_token": token
                        },
                        success: function(response) {

                            //show success message
                            Swal.fire({
                                type: 'success',
                                icon: 'success',
                                title: `${response.message}`,
                                showConfirmButton: false,
                                timer: 3000
                            });

                            //remove post on table
                            $(`#produk${produkId}`).remove();
                        }
                    });
                }
            });
        }

        function detailProduk(id) {
            $.ajax({
                type: "get",
                url: `/produk/${id}`,
                dataType: "json",
                success: function(response) {

                    $('#namaDetailProduk').text(response.nama_produk);
                    $('#detailHargaJual').text(`Rp ${response.harga_jual}`);
                    $('#detailBiayaPembuatan').text(`Rp ${response.biaya_pembuatan}`);
                    $('#linkGambarProduk').attr('href', '{{ asset('storage') }}' + '/' + response
                        .gambar_produk);
                    $('#detailGambarProduk').attr('src', '{{ asset('storage') }}' + '/' + response
                        .gambar_produk);

                    $('#modalDetail').modal('show')
                }
            });
        }
    </script>
    <!-- Page Specific JS File -->
@endpush
