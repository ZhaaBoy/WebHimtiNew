@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Seminar Hifest 2023 Update')
@section('seminar', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-5 section-body">
        <h1 class="text-center text-bold text-dark col-md-12">Update Seminar Hifest 2023</h1>
        <div class="row border card-body py-4">
            <div class="col-md-12">
                <form action="{{ route('seminar.update', $seminar->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is invalid @enderror"
                            value="{{ old('nama') ?? $seminar->nama}}" required>
                        @error('nama')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is invalid @enderror" value="{{ old('email')?? $seminar->email }}" required>
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_hp">Nomor Telpon</label>
                        <input type="number" name="no_hp" id="no_hp"
                            class="form-control @error('no_hp') is invalid @enderror" value="{{ old('no_hp') ?? $seminar->no_hp}}" required>
                        @error('no_hp')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary my-4" for="flexCheckDefault">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
