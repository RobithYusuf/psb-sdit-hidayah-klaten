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

            <div class="card">
                <div class="card-header bg-dark text-white">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h1><b>DATA CALON SISWA</b></h1>
                        </div>
                        <div class="col-sm-6 mb-2 mb-sm-0 text-right">
                            <form action="/data/casis" method="get" class="form-inline d-flex justify-content-end">
                                <div class="input-group input-group-sm w-100">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Calon Siswa" value="{{ $search ?? '' }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">L/P</th>
                                    <th scope="col">Nama Orang Tua</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Akte-KK-Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $no => $value)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->jenis_kelamin }}</td>
                                    <td>{{ $value->nama_ortu }}</td>
                                    <td>{{ $value->no_hp }}</td>
                                    <td>
                                        @php
                                        $documents = ['akte', 'kk', 'foto'];
                                        @endphp
                                        @foreach($documents as $doc)
                                        @if($value->$doc)
                                        @php
                                        $file_path = Storage::url($value->$doc);
                                        $file_extension = pathinfo($file_path, PATHINFO_EXTENSION);
                                        @endphp
                                        <a href="{{ $file_path }}" target="_blank" class="mr-2">
                                            @if(in_array($file_extension, ['pdf']))
                                            <img src="{{ asset('template/dist/img/pdf.png') }}" alt="PDF Icon" style="width: 40px; height: 40px;">
                                            @elseif(in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif']))
                                            <img src="{{ $file_path }}" alt="{{ ucfirst($doc) }}" style="width: 40px; height: 40px; object-fit: cover;">
                                            @else
                                            <img src="{{ asset('template/dist/img/file.png') }}" alt="File Icon" style="width: 40px; height: 40px;">
                                            @endif
                                        </a>
                                        @else
                                        <span class="text-muted mr-2">Belum Ada</span>
                                        @endif
                                        @if(!$loop->last) | @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('detailcasis', $value->id_casis) }}" class="btn btn-sm btn-info" title="Detail">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('editdata', $value->id_casis) }}" class="btn btn-sm btn-warning" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('deletecasis', $value->id_casis) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirmUserDelete('{{ $value->nama }}')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
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

<script>
    function confirmUserDelete(nama) {
        return confirm('Apakah Anda yakin ingin menghapus data ' + nama + '?');
    }
</script>

@endsection