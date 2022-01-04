@extends('../componnents/index')

@section('css')
    <link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('js')
    <script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/demo/default/custom/crud/datatables/basic/paginations.js') }}" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Daftar Akun Zoom
                    </h3>
                </div>
                <a href="{{ route('zoomCreate') }}" class="btn btn-success">TAMBAH</a>
            </div>
        </div>
        <div class="m-content">
            <div class="m-portlet akses-list">
                <div class="m-portlet__body">
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-4">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
                                            <span class="m-input-icon__icon m-input-icon__icon--left">
                                                <span>
                                                    <i class="la la-search"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="m_datatable" id="local_data">
                        <div class="table-responsive">
                            <table class="akses-list table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="20">No</th>
                                        <th width="20">Nama Akun</th>
                                        <th width="20">Kapasitas</th>
                                        <th width="20">Status Aktif</th>
                                        <th width="20">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_zoom as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama_akun }}</td>
                                            <td>{{ $data->kapasitas }}</td>
                                            <td>
                                                <button class="btn m-btn--pill btn-primary btn-sm m-btn m-btn--custom">
                                                    {{ $data->status_aktif }}
                                                </button>
                                            </td>
                                            <td>
                                                <div class="btn-group m-btn-group" role="group" aria-label="...">
                                                    <a href="/editZoom/{{ $data->id }}" class="btn btn-success ">
                                                        Edit
                                                    </a>
                                                    <a href="/deleteZoom/{{ $data->id }}" class="btn btn-danger ">
                                                        Hapus
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection