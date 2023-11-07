@extends('main-seller')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produk Pupuk Kamu</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Buat Product Kamu Semenarik Mungkin</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md" id="tabel1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Nama Produk</th>
                                            <th>Foto Produk</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Terjual</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tbody>
                                        @foreach ($data['pupuk-all'] as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->nama_produk }}</td>
                                                <td style="text-align: center"><img
                                                        src="{{ asset('img/gambar_product/' . $item->gambar) }}"
                                                        alt="{{ $item->gambar }}" style="height: 70px"></td>
                                                <td>{{ $item->kategori }}</td>
                                                <td>{{ $item->harga }}</td>
                                                <td>{{ $item->terjual }}</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-primary" type="button" data-toggle="modal"
                                                        data-target="#showProduct{{ $item->id_produk }}">
                                                        <span><i class="fas fa-eye"></i></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            {{-- modal show --}}
                                            <div class="modal fade" id="showProduct{{ $item->id_produk }}" tabindex="-1"
                                                role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">

                                                        {{-- modal header --}}
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Show Berita</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        {{-- modal body --}}
                                                        <div class="modal-body">
                                                            <p>Cobaaaa</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
