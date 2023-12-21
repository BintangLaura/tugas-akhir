@extends('layouts.main')

@section('content-customer')

<!-- Content Header (Page header) -->
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid py-4">
        <a href="#" class="btn btn-info btn-sm-3 mb-3">
          <i class="nav-icon fas fa-plus"></i> Tambah Data Vendor
        </a>
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <h6>Data Vendor</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 table-responsive table-hover">
                      <thead>
                        <tr>
                          {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 w-10">No</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Produk</th> --}}
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Customer</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Customer</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telepon</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        </tr>
                      </thead>
                      @foreach ($vendors as $vs)
                      <tbody>
                        <tr>
                          <td class="align-middle text-center">{{ $loop->iteration }}</td>
                          <td class="align-middle text-center">{{ $vs->code }}</td>
                          <td class="align-middle text-center text-sm">{{ $vs->name }}</td>
                          <td class="align-middle text-center">{{ $vs->address }}</td>
                          <td class="align-middle">{{ $vs->phone_number }}</td>
                          <td class="align-middle">{{ $vs->email }}</td>
                          <td class="align-middle">
                            <a href="#" class="btn btn-outline-warning btn-sm ms-3 mb-3"><i class="nav-icon fas fa-edit"></i></a>
                            <a href="#" class="btn btn-outline-danger btn-sm ms-3"><i class="nav-icon fas fa-trash"></i></a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  <br>
                  <br>
                  {{-- <center>
                      {!! $products->withQueryString()->Links('pagination::bootstrap-4') !!}
                  </center> --}}
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <!-- /.card-body -->

    </div>
</div>

</section>
  <!-- /.content -->

@endsection


