@extends('layout.tampilan')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <strong>Error!</strong> {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>

        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h1><b>DATA PENDAFTARAN CALON SISWA</b></h1>
                        </div>
                        <div class="col-sm-6 mb-2 mb-sm-0 text-right">
                            <a href="/pendaftaran/form" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <form action="/pendaftaran" method="get" class="form-inline">
                        <div class="input-group input-group-sm w-100">
                            <input type="text" name="search" class="form-control" placeholder="Cari Data ....">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat, Tgl Lahir</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Alamat</th>
                                    <th>Tgl Pendaftaran</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $no => $value)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $value->casis->nama }}</td>
                                    <td>{{ $value->casis->tempat_lahir }}, {{ Carbon\Carbon::parse($value->casis->tanggal_lahir)->format('d/m/Y') }}</td>
                                    <td>{{ $value->casis->nama_ortu }}</td>
                                    <td>{{ $value->casis->alamat }}</td>
                                    <td>{{ Carbon\Carbon::parse($value->tgl_pendaftaran)->format('d-m-Y') }}</td>
                                    <td style="text-align: center;">
                                        @if($value->status === 'Berhasil')
                                        <a href="/pendaftaran/tampil data/{{$value->id_pendaftaran}}"><i class="fas fa-check-circle text-success"></i></a> Berhasil
                                        @elseif($value->status === 'Gagal')
                                        <a href="/pendaftaran/tampil data/{{$value->id_pendaftaran}}"><i class="fas fa-times-circle text-danger"></i></a> Gagal
                                        @else
                                        <a href="/pendaftaran/tampil data/{{$value->id_pendaftaran}}"><i class="fas fa-minus-circle text-secondary"></i></a> Pending
                                        @endif
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
