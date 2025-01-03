@extends('layout.admin')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="row">
            <div class="col-xl-3 mb-30">
                <a class="btn-block" data-toggle="modal" data-target="#customer-modal" type="button">
                    <div class="bg-primary card-box height-100-p widget-style1">
                        <div class="align-items-center">
                            <h1 class='float-left display-3 mt-2'><i class="micon dw dw-user1 text-white"></i>
                            </h1>
                            <div class="widget-data float-left">
                                <div class="h3 mt-3 mb-0 text-white">{{ $customer }}</div>
                                <div class="weight-600 font-14 text-white">Jumlah Seller</div>
                            </div>
                            <div class="widget-data float-left">
                                <div class="h3 mt-0 mb-0 text-white">
                                    <div class="weight-600 font-14 text-white">
                                        <?php echo date('F Y');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                </a>
                <div class="modal fade" id="customer-modal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Data Seller</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <table class="table hover multiple-select-row data-table-export">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Seller</th>
                                            <th>No Telepon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach($customerall as $c)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{$c->Nama_Customer}}</td>
                                            <td>{{$c->No_Telepon}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="bg-secondary card-box height-100-p widget-style1">
                <a class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
                    <div class="align-items-center">
                        <h1 class='float-left display-3 mt-2'><i class="micon dw dw-box text-white"></i>
                        </h1>
                        <div class="widget-data float-left">
                            <div class="h3 mt-3 mb-0 text-white">{{ $barang }}</div>
                            <div class="weight-600 font-14 text-white">Jumlah Barang</div>
                        </div>
                        <div class="widget-data float-left">
                            <div class="h3 mt-0 mb-0 text-white">
                                <div class="weight-600 font-14 text-white">
                                    <?php echo date('F Y');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Data Barang</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <table class="table hover multiple-select-row data-table-export">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Varian</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach($barangall as $brng)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{$brng->Nama}}</td>
                                            <td>{{$brng->Varian}}</td>
                                            <td>{{$brng->Stok}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="bg-success card-box height-100-p widget-style1">
                <a class="btn-block" data-toggle="modal" data-target="#barangmsk-modal" type="button">
                    <div class="align-items-center">
                        <h1 class='float-left display-3 mt-2'><i class="micon dw dw-box text-white"></i>
                        </h1>
                        <div class="widget-data float-left">
                            <div class="h3 mt-3 mb-0 text-white">{{ $barang_masuk }}</div>
                            <div class="weight-600 font-14 text-white">Jumlah Barang Masuk</div>
                        </div>
                        <div class="widget-data float-left">
                            <div class="h3 mt-0 mb-0 text-white">
                                <div class="weight-600 font-14 text-white">
                                    <?php echo date('F Y');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="modal fade bs-example-modal-lg" id="barangmsk-modal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Data Barang Masuk</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <table class="table hover multiple-select-row data-table-export">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang Masuk</th>
                                            <th>Varian</th>
                                            <th>Jumlah</th>
                                            <th>Tangal Barang Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach($barang_masukall as $msk)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{$msk->Nama}}</td>
                                            <td>{{$msk->Varian}}</td>
                                            <td>{{$msk->Jumlah_Barang_Masuk}}</td>
                                            <td>{{ date("d F Y", strtotime($msk->Tanggal_Barang_Masuk))}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="bg-warning card-box height-100-p widget-style1">
                <a class="btn-block" data-toggle="modal" data-target="#sales-modal" type="button">
                    <div class="align-items-center">
                        <h1 class='float-left display-3 mt-2'><i class="micon dw dw-analytics-21 text-white"></i>
                        </h1>
                        <div class="widget-data float-left">
                            <div class="h3 mt-3 mb-0 text-white">{{ $sales }}</div>
                            <div class="weight-600 font-14 text-white">Jumlah Total Sales</div>
                        </div>
                        <div class="widget-data float-left">
                            <div class="h3 mt-0 mb-0 text-white">
                                <div class="weight-600 font-14 text-white">
                                    <?php echo date('F Y');?>
                                </div>
                            </div>
                        </div>
                </a>
                <div class="modal fade bs-example-modal-lg" id="sales-modal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Data Sales</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <table class="table hover multiple-select-row data-table-export">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Customer</th>
                                            <th>Nama</th>
                                            <th>QTY</th>
                                            <th>Harga</th>
                                            <th>Pembayaran</th>
                                            <th>Tanggal Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach($salesall as $s)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{$s->Nama_Customer}}</td>
                                            <td>{{$s->Nama}}</td>
                                            <td>{{$s->Qty}}</td>
                                            <td>{{$s->Harga_Sales}}</td>
                                            <td>{{$s->Metode_Pembayaran}}</td>
                                            <td>{{ date("d F Y", strtotime($s->Tanggal_Transaksi))}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-7 mb-30">
        <div class="card-box height-100-p pd-20">
            <h2 class="h4 mb-20">Activity</h2>
            <canvas id="line-chart"></canvas>
            <div class="d-flex justify-content-center">
                <ul class="pagination pagination-sm">
                    <li class="page-item {{$data->currentPage() == 1 ? 'disabled' : ''}}">
                        <a class="page-link" href="{{$data->previousPageUrl()}}">Previous</a>
                    </li>
                    @for($i = 1; $i <= $data->lastPage(); $i++)
                        <li class="page-item {{$data->currentPage() == $i ? 'active' : ''}}">
                            <a class="page-link" href="{{$data->url($i)}}">{{$i}}</a>
                        </li>
                        @endfor
                        <li class="page-item {{$data->currentPage() == $data->lastPage() ? 'disabled' : ''}}">
                            <a class="page-link" href="{{$data->nextPageUrl()}}">Next</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 pt-10 height-100-p">
            <h2 class="mb-30 h4">Total Pendapatan</h2>
            <table class="table nowrap" width="100%">
                <thead>
                    <tr>
                        <th>Bulan</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ date('F Y', strtotime($item->bulan)) }}</td>
                        <td>Rp. {{ number_format($item->total) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <ul class="pagination pagination-sm">
                    <li class="page-item {{$data->currentPage() == 1 ? 'disabled' : ''}}">
                        <a class="page-link" href="{{$data->previousPageUrl()}}">Previous</a>
                    </li>
                    @for($i = 1; $i <= $data->lastPage(); $i++)
                        <li class="page-item {{$data->currentPage() == $i ? 'active' : ''}}">
                            <a class="page-link" href="{{$data->url($i)}}">{{$i}}</a>
                        </li>
                        @endfor
                        <li class="page-item {{$data->currentPage() == $data->lastPage() ? 'disabled' : ''}}">
                            <a class="page-link" href="{{$data->nextPageUrl()}}">Next</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer-wrap pd-20 mb-20 card-box">
    Copyright © <script>
    document.write(new Date().getFullYear())
    </script>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('line-chart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [@foreach($data as $item)
            '{{ date("F Y ", strtotime($item->bulan)) }}', @endforeach
        ],
        datasets: [{
            label: 'Total Harga Didapat Pada Bulan',
            data: [@foreach($data as $item)
                '{{$item->total}}', @endforeach
            ],
            backgroundColor: [
                'rgba(112, 0, 255, 0.32)',
                'rgba(0, 0, 255, 0.31)',
                'rgba(12, 242, 59, 0.31)',
                'rgba(96, 255, 0, 0.32)',
                'rgba(255, 0, 0, 0.32)',
            ],
            borderColor: [
                'rgba(112, 0, 255, 1)', ,
                'rgba(12, 40, 145, 1)',
                'rgba(12, 242, 59, 1)',
                'rgba(96, 255, 0, 1)',
                'rgba(255, 0, 0, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

@endsection