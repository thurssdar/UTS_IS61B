@extends('layouts.master')
@section('title','Edit Jurusan')
@section('judul','Edit Jurusan')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Jurusan</a></li>
        <li class="breadcrumb-item active">Edit Jurusan</li>
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
            <form method="post" action="/jurusan/{{$pj->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode Penjadwalan</label>
                    <input type="text" readonly value="{{$pj->kodepj}}" class="form-control" name="kodepj">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kode Kelas</label>
                    <input type="text" readonly value="{{$pj->kelas}}" class="form-control" name="kodekls">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>
                    <input type="text" value="{{$pj->mk}}" class="form-control" name="mk">
                </div>
                <div class="mb-3">
                    <label class="form-label">Hari</label>
                    <input type="text" value="{{$pj->hari}}" class="form-control" name="hari">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jam</label>
                    <input type="date" value="{{$pj->jam}}" class="form-control" name="jam">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dosen</label>
                    <input type="text" value="{{$pj->dosen}}" class="form-control" name="dosen">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection


