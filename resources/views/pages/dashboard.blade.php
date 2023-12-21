@extends('layouts.main')

@section('content-1')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Produk</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$products}}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Kategori</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$category}}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Harga Produk</p>
                  <h5 class="font-weight-bolder mb-0">
                    Rp. {{$total_harga_produk}}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Stok Produk</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$stok_produk}}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2">
          <div class="card-body p-3">
            <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                <div class="chart">
                    <div id="chart-pie" class="chart-canvas ms-3 me-2 border-radius-lg" height="270"></div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card z-index-2">
          <div class="card-body p-3">
            <div class="chart">
              <div id="chart-line" class="chart-canvas" height="300"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-4">
      <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
        <div class="card z-index-2">
          <div class="card-body p-3">
            <div class="chart">
                <div id="chart-bars" class="chart-canvas" height="300"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    var jmlStok = @json($total_stok);
    var kategori = @json($kategori);

    document.addEventListener('DOMContentLoaded', function () {
        Highcharts.chart('chart-bars', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Total Stok Produk Per Kategori',
                align: 'center'
            },
            xAxis: {
                categories: kategori
            },
            yAxis: {
                title: {
                    text: 'Total Stok'
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [
                {
                    name: 'Total Stok',
                    data: jmlStok
                }
            ]
        });
    });


</script>
<script type="text/javascript">
var harga = @json($total_harga);
var kat = @json($kategori);

document.addEventListener('DOMContentLoaded', function () {
    Highcharts.chart('chart-line', {

    title: {
        text: 'Total Harga Produk Per Produk',
        align: 'center'
    },

    yAxis: {
        title: {
            text: 'Total Harga Produk'
        }
    },

    xAxis: {
        categories: kat
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            allowPointSelect: true
        }
    },

    series: [{
        name: 'Total Harga Produk',
        data: harga
    }]
    });
});
</script>

<script type="text/javascript">
    var pro = @json($total_produk);
    document.addEventListener('DOMContentLoaded', function () {
        Highcharts.chart('chart-pie', {
        chart: {
            type: 'pie',
        },
        title: {
            text: 'Total Produk Per Kategori',
        },
        plotOptions: {
            pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            },
            },
        },
        series: [{
            name: 'Total Produk',
            colorByPoint: true,
            data: pro
        }],
        });
   });
</script>
@endsection
