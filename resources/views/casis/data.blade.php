@extends('layout.tampilancasis')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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

            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <!-- Kolom Tambah Data -->
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h2><b>DATA CALON SISWA</b></h2>
                        </div>
                        <div class="text-center">
                            <a href="/beranda/form/casis" class="btn btn-info">Isi Data Diri</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Data Calon Siswa</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>UserName</th>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Data Calon Siswa</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>NIK</th>
                                            <td>{{ $user->casis->nik ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td>{{ $user->casis->nama ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat Lahir</th>
                                            <td>{{ $user->casis->tempat_lahir ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>
                                                @if($user->casis && $user->casis->tanggal_lahir)
                                                {{ \Carbon\Carbon::parse($user->casis->tanggal_lahir)->format('d/m/y') }}
                                                @else
                                                belum diinput
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>{{ $user->casis->jenis_kelamin ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah Saudara</th>
                                            <td>{{ $user->casis->jml_saudara ?? 'belum diinput' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Data Orang Tua Siswa</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Nama Orang Tua</th>
                                            <td>{{ $user->casis->nama_ortu ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pendidikan Orang Tua</th>
                                            <td>{{ $user->casis->pendidikan_ortu ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat Lahir Orang Tua</th>
                                            <td>{{ $user->casis->tempat_lahir_ortu ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir Orang Tua</th>
                                            <td>
                                                @if($user->casis && $user->casis->tanggal_lahir)
                                                {{ \Carbon\Carbon::parse($user->casis->tanggal_lahir_ortu)->format('d/m/y') }}
                                                @else
                                                belum diinput
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Pekerjaan Orang Tua</th>
                                            <td>{{ $user->casis->pekerjaan_ortu ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Gaji Orang Tua</th>
                                            <td>Rp. {{ $user->casis->gaji_ortu ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>{{ $user->casis->alamat ?? 'belum diinput' }}</td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>{{ $user->casis->no_hp ?? 'belum diinput' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Berkas Calon Siswa</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @php
                                        $berkas = [
                                        'akte' => 'Akte Kelahiran',
                                        'kk' => 'Kartu Keluarga',
                                        'foto' => 'Pas Foto'
                                        ];
                                        @endphp

                                        @foreach($berkas as $key => $label)
                                        <div class="col-md-4 text-center">
                                            <h6>{{ $label }}</h6>
                                            @if(isset($user->casis) && isset($user->casis->pendaftaran) && $user->casis->pendaftaran->$key)
                                            @php
                                            $file_name = $user->casis->pendaftaran->$key;
                                            $file_path = asset('storage/berkas/' . $file_name);
                                            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                                            @endphp
                                            <a href="{{ $file_path }}" target="_blank" class="d-block mb-2">
                                                @if(in_array($file_extension, ['pdf']))
                                                <img src="{{ asset('template/dist/img/pdf.png') }}" alt="PDF Icon" style="max-height: 100px;">
                                                @elseif(in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif']))
                                                <img src="{{ $file_path }}" class="img-thumbnail" style="max-height: 100px;" alt="{{ $label }}">
                                                @else
                                                <img src="{{ asset('template/dist/img/pdf.png') }}" alt="File Icon" style="max-height: 100px;">
                                                @endif
                                            </a>
                                            <small>{{ strtoupper($file_extension) }} - Klik untuk melihat</small>
                                            @else
                                            <p>Belum Ada</p>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* CSS untuk Tampilan Keren */
    .content-wrapper {
        margin: 20px;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .card-header {
        background-color: #343a40;
        color: #fff;
        padding: 15px 20px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 20px;
    }

    .table {
        margin-bottom: 0;
    }

    .table th {
        font-weight: 600;
        color: #343a40;
        border-bottom: 2px solid #dee2e6;
    }

    .table td {
        color: #6c757d;
        border-bottom: 1px solid #dee2e6;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transform: translateY(-3px);
    }
</style>

@endsection