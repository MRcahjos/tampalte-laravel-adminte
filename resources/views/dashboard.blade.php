@extends('layouts.app')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard Utama')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection

@section('content')
<!-- Baris Info Box -->
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-primary">
            <div class="inner">
                <h3>150</h3>
                <p>Data Baru</p>
            </div>
            <i class="small-box-icon bi bi-cart"></i>
            <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                Lihat Detail <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-success">
            <div class="inner">
                <h3>85<sup class="fs-5">%</sup></h3>
                <p>Performa Sistem</p>
            </div>
            <i class="small-box-icon bi bi-graph-up"></i>
            <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                Lihat Detail <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>
</div>

<!-- Baris Card Percobaan -->
<div class="row mt-2">
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">Tes Komponen & Plugin</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tes Select2 (Tema Bootstrap 5)</label>
                        <select class="form-select select2-demo">
                            <option value="">-- Pilih Unit --</option>
                            <option value="1">Instalasi Rawat Jalan</option>
                            <option value="2">Instalasi Gawat Darurat</option>
                            <option value="3">Instalasi Laboratorium</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 d-flex align-items-end">
                        <button type="button" id="btn-tes-swal" class="btn btn-primary">
                            <i class="bi bi-bell me-1"></i> Tes SweetAlert2
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        // Inisialisasi Select2 dengan tema Bootstrap 5
        $('.select2-demo').select2({
            theme: 'bootstrap-5',
            width: '100%'
        });

        // Tes tombol SweetAlert2
        $('#btn-tes-swal').on('click', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'AdminLTE 4, jQuery, Select2, dan SweetAlert2 sudah aktif.',
                confirmButtonText: 'Mantap'
            });
        });
    });
</script>
@endpush