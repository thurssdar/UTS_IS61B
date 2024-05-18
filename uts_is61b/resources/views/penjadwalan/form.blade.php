@extends('layouts.master')
@section('title','Tambah Jadwal')
@section('judul','Tambah Jadwal')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Jadwal</a></li>
        <li class="breadcrumb-item active">Tambah Jadwal</li>
    </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            <form method="post" action="/penjadwalan/store/">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode Penjadwalan</label>
                    <input type="text" class="form-control" name="kodepj">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kode Kelas</label>
                    <input type="text" class="form-control" name="kodekls">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>
                    <input type="text" class="form-control" name="mk">
                </div>
                <div class="mb-3">
                    <label class="form-label">Hari</label>
                    <input type="text" class="form-control" name="hari">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jam</label>
                    <input type="date" class="form-control" name="jam">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dosen</label>
                    <input type="text" class="form-control" name="dosen">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
        {{-- <!-- /.card-body -->
        <div class="card-footer">
        Footer
        </div>
        <!-- /.card-footer--> --}}
    </div>
@endsection



{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}

