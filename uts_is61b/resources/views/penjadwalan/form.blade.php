@extends('layouts.master')
@section('title','Tambah Penjadwalan')
@section('judul','Tambah Penjadwalan')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Penjadwalan</a></li>
        <li class="breadcrumb-item active">Tambah Penjadwalan</li>
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
            <form method="post" action="/jurusan/store/">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode Penjadwalan</label>
                    <input type="text" class="form-control" name="kode">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kode Kelas</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kode Kelas</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kode Kelas</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kode Kelas</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kode Kelas</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection
