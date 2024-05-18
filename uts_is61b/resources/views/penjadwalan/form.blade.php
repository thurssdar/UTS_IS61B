@extends('layouts.master')
@section('title','Tambah Jadwal')
@section('judul','Tambah Jadwal')

@section('bc')
    <div class="card">
        <div class="card-header" >
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="/penjadwalan/">Data Jadwal</a></li>
                <li class="breadcrumb-item"><a href="/home/">Home</a></li>
                <li class="breadcrumb-item active">Tambah Jadwal</li>
            </ol>
        </div>

        @endsection

        @section('content')


        <div class="card-body">
            <form method="POST" action="/penjadwalan/form/">

                @csrf
                <div class="form-group">
                    <label class="form-label">Kode Penjadwalan</label>
                    <input type="text" class="form-control" name="kode">
                </div>
                <div class="form-group">
                    <label class="form-label">Kode Kelas</label>
                    <input type="text" class="form-control" name="kelas">
                </div>
                <div class="form-group">
                    <label class="form-label">Mata Kuliah</label>
                    <input type="text" class="form-control" name="mk">
                </div>
                <div class="form-group">
                    <label class="form-label">Hari</label>
                    <input type="text" class="form-control" name="hari">
                </div>
                <div class="form-group">
                    <label class="form-label">Jam</label>
                    <input type="time" class="form-control" name="jam">
                </div>
                <div class="form-group">
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

