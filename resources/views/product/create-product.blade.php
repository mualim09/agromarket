@extends('main-seller')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Jual Product Pertanian</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Buat Product Kamu Semenarik Mungkin</h4>
                        </div>
                        <form action="{{ url('store-product') }}" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" name="nama_produk" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control selectric" name="kategori" required>
                                        <option value="">--Pilih--</option>
                                        <option value="Pembibitan">Pembibitan</option>
                                        <option value="Pestisida">Pestisida</option>
                                        <option value="Pupuk">Pupuk</option>
                                        <option value="Peralatan">Peralatan</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label class="form-label">Jenis Barang</label>
                                    <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="jenis" value="Bahan Kimia" class="selectgroup-input"
                                                checked="">
                                            <span class="selectgroup-button">Bahan Kimia</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="jenis" value="Cair" class="selectgroup-input">
                                            <span class="selectgroup-button">Cair</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="jenis" value="Padat" class="selectgroup-input">
                                            <span class="selectgroup-button">Padat</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="jenis" value="Benda Tajam"
                                                class="selectgroup-input">
                                            <span class="selectgroup-button">Benda Tajam</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="jenis" value="Benda Berat" class="selectgroup-input">
                                            <span class="selectgroup-button">Benda Berat</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="jenis" value="Mudah Pecah" class="selectgroup-input">
                                            <span class="selectgroup-button">Mudah Pecah</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="jenis" value="Mudah Terbakar" class="selectgroup-input">
                                            <span class="selectgroup-button">Mudah Terbakar</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="jenis" value="Penyimpanan Khusus" class="selectgroup-input">
                                            <span class="selectgroup-button">Penyimpanan Khusus</span>
                                        </label>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label>Merk Produk</label>
                                    <input type="text" class="form-control" name="merk">
                                </div>
                                <div class="form-group">
                                    <label>Kondisi Barang</label>
                                    <select class="form-control selectric" name="kondisi" required>
                                        <option value="">--Pilih--</option>
                                        <option value="Baru">Baru</option>
                                        <option value="Bekas">Bekas</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col sm-6">
                                        <div class="form-group">
                                            <label>Berat <span style="color: red">(berikan satuan seperti Kg, Gram, atau
                                                    Liter)</span></label>
                                            <input type="text" class="form-control" name="berat">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Ukuran <span style="color: red">(berikan satuan seperti Cm atau
                                                    Mm)</span></label>
                                            <input type="text" class="form-control" name="ukuran">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col sm-6">
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        $
                                                    </div>
                                                </div>
                                                <input type="number" class="form-control currency" name="harga"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input type="number" class="form-control" name="stok" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Produk</label>
                                    <textarea name="deskripsi" class="summernote-simple" required></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Foto Produk <span style="color: red">(Max. 5MB)</span></label>
                                        <input name="gambar" type="file" class="form-control-file" accept="image/*"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
