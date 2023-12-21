<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="nav-item mt-2 mr-1">
            <?php
            $hari = [
              "Minggu", "Senin", "Selasa", "Rabu",
              "Kamis", "Jumat", "Sabtu", "Minggu",
            ];
            // echo date('N'); //get index hari
            $index_hari = date('N');

            echo $hari[$index_hari].",";
            ?>
          </li>
          <li class="nav-item mt-2 px-2 d-flex align-items-center">
            <?php
              function tgl_indo($tanggal){
                $bulan = array (
                  1 => 'Januari', 'Februari', 'Maret', 'April',
                  'Mei', 'Juni', 'Juli', 'Agustus',
                  'September', 'Oktober', 'November', 'Desember'
                );

                $indo = explode('-', $tanggal);

                //variabel indo 0 = tanggal
                //variabel indo 1 = bulan
                //variabel indo 2 = tahun


                return $indo[2] . ' ' . $bulan[ (int)$indo[1] ]. ' ' . $indo[0];
              }

              echo tgl_indo(date('Y-m-d'));
            ?>
          </li>
          <li class="nav-item mt-2 ml-2 px-3 d-flex align-items-center" id="time"><script src="{{ asset('dist/js/time.js') }}"></script></li>
        </ol>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Type here...">
          </div>
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0">
              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
