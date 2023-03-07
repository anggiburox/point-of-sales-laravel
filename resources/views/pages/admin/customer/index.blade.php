@extends('layout.admin')

@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Seller</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <a class="btn btn-success" href="customer/tambah">
                        <i class="icon-copy fa fa-plus" aria-hidden="true"></i>&nbsp;
                        Tambah data
                    </a>
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::has('danger'))
                    <div class="alert alert-danger">
                        {{Session::get('danger')}}
                    </div>
                    @endif
                </div>
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">NO</th>
                                <th>Nama Seller</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach($pgw as $p)
                            <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $p->Nama_Customer }}</td>
                                <td>{{ $p->Alamat }}</td>
                                <td>{{ $p->No_Telepon }}</td>
                                <td>
                                    <a href="customer/edit/{{ $p->ID_Customer}}" data-toggle="tooltip"
                                        data-placement="top" title="Perbaharui" class="btn mb-1 btn-warning"
                                        type="button"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                    |
                                    <a href="customer/hapus/{{ $p->ID_Customer}}" class="delete btn mb-1 btn-danger"
                                        data-confirm="Apakah anda yakin ingin mengahpus data ini ?"
                                        data-toggle="tooltip" data-placement="top" title="Hapus" type="button"><i
                                            class="fa fa-trash color-muted m-r-5"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            Copyright © <script>
            document.write(new Date().getFullYear())
            </script>
        </div>
    </div>
</div>

<script>
var deleteLinks = document.querySelectorAll('.delete');

for (var i = 0; i < deleteLinks.length; i++) {
    deleteLinks[i].addEventListener('click', function(event) {
        event.preventDefault();

        var choice = confirm(this.getAttribute('data-confirm'));

        if (choice) {
            window.location.href = this.getAttribute('href');
        }
    });
}
</script>
@endsection