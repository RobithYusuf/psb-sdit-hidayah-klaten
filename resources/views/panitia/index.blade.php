@extends('layout.tampilan')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h1><b>DATA PANITIA</b></h1>
                        </div>
                        <div class="col-sm-6 mb-2 mb-sm-0 text-right">
                            <a href="/data/panitia/add" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <form action="/data/panitia" method="get" class="form-inline">
                        <div class="input-group input-group-sm w-100">
                            <input type="text" name="search" class="form-control" placeholder="Cari Data Panitia" value="{{ $search ?? '' }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $no => $value)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->user->name }}</td>
                                    <td>{{ $value->user->email }}</td>
                                    <td>{{ $value->status }}</td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <a href="/data/panitia/edit/{{$value->id_panitia}}" class="btn btn-sm btn-warning" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('deletepanitia', $value->user->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirmUserDelete('{{ $value->user->name }}')">
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
    function confirmUserDelete(name) {
        return confirm('Apakah Anda yakin ingin menghapus data ' + name + '?');
    }
</script>

@endsection