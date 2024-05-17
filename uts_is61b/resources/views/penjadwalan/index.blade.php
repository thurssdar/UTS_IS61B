@extends('layouts.master')
@section('title','Penjadwalan')
@section('judul','Data Jurusan')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Penjadwalan</li>
    </ol>
@endsection


<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Penjadwalan</th>
                <th>Kode Kelas</th>
                <th>Kode MK</th>
                <th>Mata Kuliah</th>
                <th>Hari</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>NIP</th>
                <th>Dosen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pj as $item)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$item->kodepj}}</td>
                    <td>{{$item->kodekelas}}</td>
                    <td>{{$item->kodekelas}}</td>
                    <td>{{$item->kodekmk}}</td>
                    <td>{{$item->hari}}</td>
                    <td>{{$item->jammulai}}</td>
                    <td>{{$item->nip}}</td>
                    <td>{{$item->dosen}}</td>

                    <td>
                        <a href="/penjadwalan/edit/{{$item->kodepj}}" class="btn btn-info btn-xs"><i class="fa fa-pencil-alt"></i></a>

                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{$item->id}}">
                            <i class="fa fa-trash"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Yakin ingin menghapus data jurusan <b>{{$item->jurusan}}</b>?
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <form action="/penjadwalan/{{$item->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                </form>

                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak Ada Data</td>
                </tr>
            @endforelse

        </tfbosy>
    </table>
</div>
