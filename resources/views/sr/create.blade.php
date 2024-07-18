@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Rakit PC 2023')
@section('pendaftaran', 'active')
@section('pc', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-5 section-body">
   <h1 class="text-center text-bold text-dark col-md-12">MOHON MAAF PENDAFTARAN SUDAH DI TUTUP SAMPAI JUMPA DI LOMBA RAKIT PC HIFEST HIMTI UMT 2024</h1>
      <!--<h1 class="text-center text-bold text-dark col-md-12">Pendaftaran HIFEST Lomba Rakit PC</h1>-->
      <!--  <div class="row border card-body py-4">-->
      <!--      <div class="col-md-12">-->
      <!--          <form action="{{ route('sris.store') }}" method="POST" enctype="multipart/form-data">-->
      <!--              @csrf-->
      <!--              <div class="form-group">-->
      <!--                  <label for="nama_pendaftar">Nama Pendaftar</label>-->
      <!--                  <input type="text" name="nama_pendaftar" id="nama_pendaftar"-->
      <!--                      class="form-control @error('nama_pendaftar') is invalid @enderror"-->
      <!--                      value="{{ old('nama_pendaftar') }}" required>-->
      <!--                  @error('nama_pendaftar')-->
      <!--                      <div class="alert alert-danger"> {{ $message }}</div>-->
      <!--                  @enderror-->
      <!--              </div>-->
      <!--              <div class="form-group">-->
      <!--                  <label for="email">Email</label>-->
      <!--                  <input type="email" name="email" id="email"-->
      <!--                      class="form-control @error('email') is invalid @enderror" value="{{ old('email') }}" required>-->
      <!--                  @error('email')-->
      <!--                      <div class="alert alert-danger"> {{ $message }}</div>-->
      <!--                  @enderror-->
      <!--              </div>-->
      <!--              <div class="form-group">-->
      <!--                  <label for="nama_team">Nama Team</label>-->
      <!--                  <input type="text" name="nama_team" id="nama_team"-->
      <!--                      class="form-control @error('nama_team') is invalid @enderror" value="{{ old('nama_team') }}"-->
      <!--                      required>-->
      <!--                  @error('nama_team')-->
      <!--                      <div class="alert alert-danger"> {{ $message }}</div>-->
      <!--                  @enderror-->
      <!--              </div>-->
      <!--              <div class="form-group">-->
      <!--                  <label for="nama_sekolah">Nama Sekolah</label>-->
      <!--                  <input type="text" name="nama_sekolah" id="nama_sekolah"-->
      <!--                      class="form-control @error('nama_sekolah') is invalid @enderror"-->
      <!--                      value="{{ old('nama_sekolah') }}" required>-->
      <!--                  @error('nama_sekolah')-->
      <!--                      <div class="alert alert-danger"> {{ $message }}</div>-->
      <!--                  @enderror-->
      <!--              </div>-->

      <!--              <div class="form-group">-->
      <!--                  <label for="anggota_1">Anggota 1</label>-->
      <!--                  <input type="text" name="anggota_1" id="anggota_1"-->
      <!--                      class="form-control @error('anggota_1') is invalid @enderror" value="{{ old('anggota_1') }}"-->
      <!--                      required>-->
      <!--                  @error('anggota_1')-->
      <!--                      <div class="alert alert-danger"> {{ $message }}</div>-->
      <!--                  @enderror-->
      <!--              </div>-->
      <!--              <div class="form-group">-->
      <!--                  <label for="anggota_2">Anggota 2</label>-->
      <!--                  <input type="text" name="anggota_2" id="anggota_2"-->
      <!--                      class="form-control @error('anggota_2') is invalid @enderror" value="{{ old('anggota_2') }}"-->
      <!--                      required>-->
      <!--                  @error('anggota_2')-->
      <!--                      <div class="alert alert-danger"> {{ $message }}</div>-->
      <!--                  @enderror-->
      <!--              </div>-->

      <!--              <div class="form-group">-->
      <!--                  <label for="no_hp">Nomor Telepon</label>-->
      <!--                  <input type="number" name="no_hp" id="no_hp"-->
      <!--                      class="form-control @error('no_hp') is invalid @enderror" value="{{ old('no_hp') }}" required>-->
      <!--                  @error('no_hp')-->
      <!--                      <div class="alert alert-danger"> {{ $message }}</div>-->
      <!--                  @enderror-->
      <!--              </div>-->

      <!--              <div class="form-group">-->
      <!--                  <label for="pembayaran">Bukti Pembayaran</label>-->
      <!--                  <input type="file" name="pembayaran" id="pembayaran"-->
      <!--                      class="form-control @error('pembayaran') is invalid @enderror" value="{{ old('pembayaran') }}"-->
      <!--                      required>-->
      <!--                  @error('pembayaran')-->
      <!--                      <div class="alert alert-danger"> {{ $message }}</div>-->
      <!--                  @enderror-->
      <!--              </div>-->

      <!--              <div class="form-group">-->
      <!--                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
      <!--                  <label class="form-check-label" for="flexCheckDefault">-->
      <!--                      Dengan ini, Kami pengirimkan pendaftaraan kami untuk mengikuti lomba ini dan setuju untuk mematuhi semua peraturan dan ketentuan yang telah di tetapkan.-->
      <!--                  </label>-->
      <!--              </div>-->
      <!--              <div class="d-flex justify-content-end">-->
      <!--                  <button type="submit" class="btn btn-primary my-4" for="flexCheckDefault">Daftar</button>-->
      <!--              </div>-->
      <!--          </form>-->
      <!--      </div>-->
      <!--  </div>-->
    </div>

@endsection
