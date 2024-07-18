@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Bootcamp 2023')
@section('pendaftaran', 'active')
@section('bootcamp', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-5 section-body">
        <h1 class="text-center text-bold text-dark col-md-12" >SAMPAI JUMPA DI HIMTI BOOTCAMP 2024</h1>
        <!--<h1 class="text-center text-bold text-dark col-md-12">Pendaftaran HIMTI Bootcamp 2023</h1>-->
        <!--<div class="row border card-body py-4">-->
        <!--    <div class="col-md-12">-->
        <!--        <form action="{{ route('btcmps.store') }}" method="post" enctype="multipart/form-data">-->
        <!--            @csrf-->
        <!--            <div class="form-group">-->
        <!--                <label for="nama">Nama Lengkap</label>-->
        <!--                <input type="text" name="nama" id="nama"-->
        <!--                    class="form-control @error('nama') is invalid @enderror" value="{{ old('nama') }}" required>-->
        <!--                @error('nama')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->

        <!--            <div class="form-group">-->
        <!--                <label for="nim">Nim</label>-->
        <!--                <input type="number" name="nim" id="nim"-->
        <!--                    class="form-control @error('nim') is invalid @enderror" value="{{ old('nim') }}" required>-->
        <!--                @error('nim')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->

        <!--            <div class="form-group">-->
        <!--                <label for="kelas">Kelas</label>-->
        <!--                <input type="text" name="kelas" id="kelas"-->
        <!--                    class="form-control @error('kelas') is invalid @enderror"-->
        <!--                    value="{{ old('kelas') }}" required>-->
        <!--                @error('kelas')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
                    
        <!--            <div class="form-group">-->
        <!--                <label for="email">Email</label>-->
        <!--                <input type="text" name="email" id="email"-->
        <!--                    class="form-control @error('email') is invalid @enderror"-->
        <!--                    value="{{ old('email') }}" required>-->
        <!--                @error('email')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
                    
        <!--            <div class="form-group">-->
        <!--                <label for="angkatan">angkatan</label>-->
        <!--                <select class="form-control" name="angkatan" id="angkatan" required>-->
        <!--                    <option selected disabled>---Pilih Angkatan---</option>-->
        <!--                    <option>2022</option>-->
        <!--                    <option>2023</option>-->

        <!--                </select>-->
        <!--            </div>-->
                 
        <!--            <div class="form-group">-->
        <!--                <label for="tgl_lahir">Tanggal Lahir</label>-->
        <!--                <input type="date" name="tgl_lahir" id="tgl_lahir"-->
        <!--                    class="form-control @error('tgl_lahir') is invalid @enderror"-->
        <!--                    value="{{ old('tgl_lahir') }}" required>-->
        <!--                @error('tgl_lahir')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
                    
                       
        <!--            <div class="form-group">-->
        <!--                <label for="organ">Pengalaman Organisasi</label>-->
        <!--                <textarea name="organ" id="organ" rows="4"-->
        <!--                    class="form-control @error('organ') is invalid @enderror" {{ old('organ') }} required></textarea>-->
        <!--                @error('organ')-->
        <!--                    <div class="alert alert-danger"> {{ $message }} </div>-->
        <!--                @enderror-->
        <!--            </div>-->
                    
        <!--            <div class="form-group">-->
        <!--                <label for="alamat">Alamat</label>-->
        <!--                <textarea name="alamat" id="alamat" rows="4"-->
        <!--                    class="form-control @error('alamat') is invalid @enderror" {{ old('alamat') }} required></textarea>-->
        <!--                @error('alamat')-->
        <!--                    <div class="alert alert-danger"> {{ $message }} </div>-->
        <!--                @enderror-->
        <!--            </div>-->
              
        <!--            <div class="form-group">-->
        <!--                <label for="no_hp">No Handphone (Whatsapp)</label>-->
        <!--                <input type="number" name="no_hp" id="no_hp"-->
        <!--                    class="form-control @error('no_hp') is invalid @enderror"-->
        <!--                    value="{{ old('no_hp') }}" required>-->
        <!--                @error('no_hp')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
                    
        <!--            <div class="form-group">-->
        <!--                <label for="no_kel">No Handphone Keluarga (Whatsapp)</label>-->
        <!--                <input type="number" name="no_kel" id="no_kel"-->
        <!--                    class="form-control @error('no_kel') is invalid @enderror"-->
        <!--                    value="{{ old('no_kel') }}" required>-->
        <!--                @error('no_kel')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
                    
        <!--            <div class="form-group">-->
        <!--                <label for="pembayaran">Bukti Pembayaran</label>-->
        <!--                <input type="file" name="pembayaran" id="pembayaran"-->
        <!--                    class="form-control @error('pembayaran') is invalid @enderror" value="{{ old('pembayaran') }}"-->
        <!--                    required>-->
        <!--                @error('pembayaran')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        
        <!--            <div class="form-group mx-4">-->
        <!--                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>-->
        <!--                <label class="form-check-label" for="flexCheckDefault">-->
        <!--                  <p class="text-danger">Data yang dimasukkan sudah benar.</p>  -->
        <!--                </label>-->
        <!--              </div>-->
        <!--            <div class="d-flex justify-content-end">-->
        <!--                <button type="submit" class="btn btn-primary my-4">Daftar</button>-->
        <!--            </div>-->
        <!--        </form>-->
        <!--    </div>-->
        <!--</div>-->
    </div>

@endsection
