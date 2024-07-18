@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Bootcamp 2023 Update')
@section('bootcamp', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-5 section-body">
        <h1 class="text-center text-bold text-dark col-md-12">Update Bootcamp 2023</h1>
        <div class="row border card-body py-4">
            <div class="col-md-12">
                <form action="{{ route('btcmp.update', $btcmp->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is invalid @enderror"
                            value="{{ old('nama') ?? $btcmp->nama}}" required>
                        @error('nama')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="number" name="nim" id="nim"
                            class="form-control @error('nim') is invalid @enderror" value="{{ old('nim')?? $btcmp->nim }}" required>
                        @error('nim')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    
                     <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" id="kelas"
                            class="form-control @error('kelas') is invalid @enderror" value="{{ old('kelas')?? $btcmp->kelas }}" required>
                        @error('kelas')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email"
                            class="form-control @error('email') is invalid @enderror"
                            value="{{ old('email') ?? $btcmp->email }}" required>
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat"
                            class="form-control @error('alamat') is invalid @enderror" value="{{ old('alamat')?? $btcmp->alamat }}" required>
                        @error('alamat')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="angkatan">angkatan</label>
                        <select class="form-control" name="angkatan" id="angkatan" required>
                            <option value="{{ old('angkatan')?? $btcmp->angkatan}}"></option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="nim"
                            class="form-control @error('tgl_lahir') is invalid @enderror" value="{{ old('tgl_lahir')?? $btcmp->tgl_lahir }}" required>
                        @error('tgl_lahir')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="organ">Pengalaman Organisasi</label>
                        <textarea name="organ" id="organ" rows="4"
                            class="form-control @error('organ') is invalid @enderror" value="{{ old('organ')?? $btcmp->organ }}" required></textarea>
                        @error('organ')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No Handphone</label>
                        <input type="number" name="no_hp" id="no_hp"
                            class="form-control @error('no_hp') is invalid @enderror" value="{{ old('no_hp') ?? $btcmp->no_hp}}" required>
                        @error('no_hp')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="no_kel">No Keluarga</label>
                        <input type="number" name="no_kel" id="no_hp"
                            class="form-control @error('no_kel') is invalid @enderror" value="{{ old('no_kel') ?? $btcmp->no_kel}}" required>
                        @error('no_kel')
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
