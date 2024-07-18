@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Web Design Update')
@section('webdesign', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-5 section-body">
        <h1 class="text-center text-bold text-dark col-md-12">Update Lomba Startup Inovation</h1>
        <div class="row border card-body py-4">
            <div class="col-md-12">
                <form action="{{ route('sr.update', $sr->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="form-group">
                        <label for="nama_pendaftar">Nama Pendaftar</label>
                        <input type="text" name="nama_pendaftar" id="nama_pendaftar"
                            class="form-control @error('nama_pendaftar') is invalid @enderror"
                            value="{{ old('nama_pendaftar') ?? $sr->nama_pendaftar}}" required>
                        @error('nama_pendaftar')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is invalid @enderror" value="{{ old('email')?? $sr->email }}" required>
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_team">Nama Team</label>
                        <input type="text" name="nama_team" id="nama_team"
                            class="form-control @error('nama_team') is invalid @enderror" value="{{ old('nama_team')?? $sr->nama_team }}"
                            required>
                        @error('nama_team')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_sekolah">Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" id="nama_sekolah"
                            class="form-control @error('nama_sekolah') is invalid @enderror"
                            value="{{ old('nama_sekolah')?? $sr->nama_sekolah }}" required>
                        @error('nama_sekolah')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="anggota_1">anggota_1</label>
                        <input type="text" name="anggota_1" id="anggota_1"
                            class="form-control @error('anggota_1') is invalid @enderror" value="{{ old('anggota_1') ?? $sr->anggota_1}}"
                            required>
                        @error('anggota_1')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="anggota_2">anggota_2</label>
                        <input type="text" name="anggota_2" id="anggota_2"
                            class="form-control @error('anggota_2') is invalid @enderror" value="{{ old('anggota_2') ?? $sr->anggota_2}}"
                            required>
                        @error('anggota_2')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="anggota_3">anggota_3</label>
                        <input type="text" name="anggota_3" id="anggota_3"
                            class="form-control @error('anggota_3') is invalid @enderror" value="{{ old('anggota_3') ?? $sr->anggota_3}}"
                            required>
                        @error('anggota_3')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_hp">Nomor Telpon</label>
                        <input type="number" name="no_hp" id="no_hp"
                            class="form-control @error('no_hp') is invalid @enderror" value="{{ old('no_hp') ?? $sr->no_hp}}" required>
                        @error('no_hp')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pembayaran">Bukti Pembayaran</label>
                        <img src="{{ Storage::url($sr->pembayaran) }}" alt="gambar" width="50px">
                        <input type="file" name="pembayaran" id="pembayaran"
                            class="form-control @error('pembayaran') is invalid @enderror" value="{{ old('pembayaran') }}"
                            >
                        @error('pembayaran')
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
