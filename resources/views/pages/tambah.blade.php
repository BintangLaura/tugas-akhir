@extends('layouts.main')

@section('content-tambah')
    <!-- Content Header (Page header) -->
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">

          <div class="container-fluid py-4">
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
              <div class="card">
                  <div class="card card-success">
                    <div class="card-header">
                        <center><h5 class="card-title">Tambah Data Produk</h5></center>
                    </div>
                      <div class="card-body">
                          <form action="/product/store" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                              <div class="card-body">
                              <div class="form-group">
                                  <label>Kode Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Kode Produk" name="product_code">
                              </div>
                              <div class="form-group">
                                  <label>Kategori Produk</label> <br>
                                  <select name="category_id" class="form-control">
                                    <option>-- Pilih Kategori --</option>
                                    <option value="1">Sports</option>
                                    <option value="2">Daily</option>
                                    <option value="3">Accessoris</option>
                                    <option value="4">Casual</option>
                                  </select>
                                </div>
                              <div class="form-group">
                                  <label>Nama Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Nama Produk" name="product_name">
                              </div>
                              <div class="form-group">
                                  <label>Deskripsi Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Deskripsi Produk" name="description">
                              </div>
                              <div class="form-group">
                                  <label>Harga Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Harga Produk" name="price">
                              </div>
                              <div class="form-group">
                                  <label>Diskon Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Diskon Produk" name="discount_amount">
                              </div>
                              <div class="form-group">
                                  <label>Stok Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Stok Produk" name="stock">
                              </div>
                              <div class="form-group">
                                  <label>Upload Gambar Produk</label>
                                  <input type="file" class="form-control" placeholder="Masukkan Gambar Produk" name="image">
                              </div>
                              <div class="row">
                                  <div class="col text-center">
                                      <button type="button" class="btn btn-blok btn-danger btn-lg-3" onclick="history.go(-1);">Batal</button>
                                      <button type="submit" class="btn btn-blok btn-info btn-lg-3" value="">Simpan Data</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                      </div>
                  </div>
                  <!-- /.card-header -->
              </div>
      </section>
      <!-- /.content -->
@endsection
