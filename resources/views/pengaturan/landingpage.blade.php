@extends('layout.tampilan')

@section('content')
<div class="content-wrapper">
    <div class="card">
        <h1 class="card-header bg-dark">
            <strong>Halaman untuk foto informasi pendaftaran</strong>
        </h1>
        <div class="card-body">
            <form action="{{ route('photo.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="photo">Unggah Foto Baru:</label>
                    <input type="file" class="form-control" id="photo" name="photo" required>
                </div>
                <button type="submit" class="btn btn-primary">Unggah</button>
            </form>

            <hr>
            <h2>Foto yang Sudah Ada:</h2>

            <div class="row">
                @foreach($fotos as $foto)
                <div class="col-md-4 mb-4">
                    <img src="{{asset('storage/' . $foto->foto) }}" class="img-fluid" alt="Foto">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
