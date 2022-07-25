@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Siswa</h3>
                            </div>
                            <div class="panel-body">
                                <a href="/siswa/add" class="btn btn-sm btn-primary">TAMBAH</a>
                                <table class="table table-hover" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Nilai Rata-rata</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_siswa as $siswa)
                                        <tr>
                                            <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a></td>
                                            <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_belakang}}</a></td>
                                            <td>{{$siswa->jenis_kelamin}}</td>
                                            <td>{{$siswa->agama}}</td>
                                            <td>{{$siswa->alamat}}</td>
                                            <td>{{$siswa->nilairata()}}</td>
                                            <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-sm btn-warning">EDIT</a>
                                                <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">DELETE</a></td>
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
    </div>
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                processing:true,
                serverside:true,
                ajax:"http://127.0.0.1:8000/datasiswa"
            });
        });
    </script>
@stop
