@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | HIFEST Lomba Poster 2023')
@section('pendaftaran', 'active')
@section('poster', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-5 section-body">
      <h1 class="text-center text-bold text-dark col-md-12">MOHON MAAF PENDAFTARAN SUDAH DI TUTUP SAMPAI JUMPA DI LOMBA POSTER HIFEST HIMTI UMT 2024</h1>
     <!--<h1 class="text-center text-bold text-dark col-md-12">Pendaftaran HIFEST LOMBA POSTER 2023</h1>-->
     <!--   <div class="row border card-body py-4">-->
     <!--       <div class="col-md-12">-->
     <!--           <form action="{{ route('web.store') }}" method="POST" enctype="multipart/form-data">-->
     <!--               @csrf-->
     <!--               <div class="form-group">-->
     <!--                   <label for="nama_team">Nama Lengkap</label>-->
     <!--                   <input type="text" name="nama_team" id="nama_team"-->
     <!--                       class="form-control @error('nama_team') is invalid @enderror" value="{{ old('nama_team') }}" required>-->
     <!--                   @error('nama_team')-->
     <!--                       <div class="alert alert-danger"> {{ $message }}</div>-->
     <!--                   @enderror-->
     <!--               </div>-->

     <!--               <div class="form-group">-->
     <!--                   <label for="email">Email</label>-->
     <!--                   <input type="email" name="email" id="email"-->
     <!--                       class="form-control @error('email') is invalid @enderror" value="{{ old('email') }}" required>-->
     <!--                   @error('email')-->
     <!--                       <div class="alert alert-danger"> {{ $message }}</div>-->
     <!--                   @enderror-->
     <!--               </div>-->

     <!--               <div class="form-group">-->
     <!--                   <label for="nomor_telpon">Nomor Telpon</label>-->
     <!--                   <input type="number" name="nomor_telpon" id="nomor_telpon"-->
     <!--                       class="form-control @error('nomor_telpon') is invalid @enderror"-->
     <!--                       value="{{ old('nomor_telpon') }}" required>-->
     <!--                   @error('nomor_telpon')-->
     <!--                       <div class="alert alert-danger"> {{ $message }}</div>-->
     <!--                   @enderror-->
     <!--               </div>-->

     <!--               <div class="form-group">-->
     <!--                   <label for="project">Bukti Pembayaran</label>-->
     <!--                   <input type="file" name="pembayaran" id="pembayaran" class="form-control @error('pembayaran') is invalid @enderror"-->
     <!--                       value="{{ old('pembayaran') }}" required>-->
     <!--                           @error('pembayaran')-->
     <!--                       <div class="alert alert-danger"> {{ $message }}</div>-->
     <!--                   @enderror-->
     <!--               </div>-->
     <!--               <br>-->
     <!--               <div class="form-group">-->
     <!--                   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
     <!--                   <label class="form-check-label" for="flexCheckDefault">-->
     <!--                       Dengan ini, Kami pengirimkan pendaftaraan kami untuk mengikuti lomba ini dan setuju untuk mematuhi semua peraturan dan ketentuan yang telah di tetapkan.-->
     <!--                   </label>-->
     <!--                 </div>-->
     <!--               <div class="d-flex justify-content-end">-->
     <!--                   <button type="submit" class="btn btn-primary my-4">Daftar</button>-->
     <!--               </div>-->
     <!--           </form>-->
     <!--       </div>-->
     <!--   </div>-->
    </div>

@endsection
