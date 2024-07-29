@extends('layout.tampilan')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('template/dist/img/user0-128x128.jpg') }}" alt="avatar" class="img-fluid" style="width: 250px;">
                                    <h5 class="my-3"></h5>

                                    <div class="mb-4 mb-lg-0">

                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Biodata</h5>
                                    <hr>

                                    @foreach($data as $user)
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->name }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Role</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->role }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                    <hr>
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
@endsection