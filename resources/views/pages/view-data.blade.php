@extends('layouts.main')

@section('content-2')

<!-- Content Header (Page header) -->
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid py-4">
        <a href="/product/tambah" class="btn btn-info btn-sm-3 mb-3">
          <i class="nav-icon fas fa-plus"></i> Tambah Data Produk
        </a>
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <h6>Daftar Produk</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 table-responsive table-hover">
                      <thead>
                        <tr>
                          {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 w-10">No</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Produk</th> --}}
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Produk</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Produk</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori Produk</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Diskon</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        </tr>
                      </thead>
                      @foreach ($products as $p)
                      <tbody>
                        <tr>
                          <td class="align-middle text-center">{{ $loop->iteration }}</td>
                          <td class="align-middle text-center">{{ $p->product_code }}</td>
                          <td class="align-middle text-center text-sm">{{ $p->product_name }}</td>
                          <td class="align-middle text-center">{{ $p->category_id }}</td>
                          <td class="align-middle">{{ $p->description }}</td>
                          <td class="align-middle">{{ $p->price }}</td>
                          <td class="align-middle">{{ $p->discount_amount }}</td>
                          <td class="align-middle">{{ $p->stock }}</td>
                          <td class="align-middle"><img src="{{ url('/data_img/').'/'.$p->image }}" width="100"></td>
                          <td class="align-middle">
                            <a href="/product/edit/{{ $p->id }}" class="btn btn-outline-warning btn-sm ms-3 mb-3"><i class="nav-icon fas fa-edit"></i></a>
                            <a href="/product/hapus/{{ $p->id }}" class="btn btn-outline-danger btn-sm ms-3"><i class="nav-icon fas fa-trash"></i></a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    <br>
                    <br>
                    <center>
                        {!! $products->withQueryString()->Links('pagination::bootstrap-4') !!}
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
</div>

</section>
  <!-- /.content -->

@endsection
