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
        <div class="m-subheader">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title text-uppercase m-subheader__title--separator">
                        Tambah Zoom
                    </h3>
                </div>
            </div>
        </div>

        <form method="post"
            action="{{ route('zoomInsert') }}"
            class="form-send m-form m-form--fit m-form--label-align-right"
            enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="m-content">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                {{-- <span class="m-portlet__head-icon">
                                    <i class="flaticon-placeholder-2"></i>
                                </span> --}}
                                <h3 class="m-portlet__head-text">
                                    Data Zoom
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label>Nama Akun</label>
                            <input type="text" name="nama_akun" class="form-control m-input">
                        </div>
                        <div class="form-group m-form__group">
                            <label>Kapasitas</label>
                            <input type="text" name="kapasitas" class="form-control m-input">
                        </div>
                        <div class="form-group m-form__group">
                            <label>Status Aktif</label>
                            <select name="status_aktif" id="exampleSelect1" class="form-control m-input m-input--square">
                                <option value="aktif">Aktif</option>
                                <option value="tidak aktif">Tidak aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="m-portlet akses-list">
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('zoomList') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </form>
    </div>
@endsection