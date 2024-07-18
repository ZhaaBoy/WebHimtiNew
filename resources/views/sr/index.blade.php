@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Lomba Rakit PC')
@section('pc', 'active')
@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Table Lomba Rakit PC</h2>
                </div>
                <div class="text-right my-4">
                    <a href="" class="btn btn-success">Excel</a>
                    <a href="" class="btn btn-danger">PDF</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pendaftar</th>
                                <th>Nama Team</th>
                                <th>Anggota 1</th>
                                <th>Anggota 2</th>
                                <th>Email</th>
                                <th>Nama Sekolah</th>
                                <th>No Telpon</th>
                                <th>Bukti Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sr as $key => $srs)
                                <tr>
                                    <td>{{ $sr->firstItem() + $key }}</td>
                                    <td>{{ $srs->nama_pendaftar }}</td>
                                    <td>{{ $srs->nama_team }}</td>
                                    <td>{{ $srs->anggota_1 }}</td>
                                    <td>{{ $srs->anggota_2 }}</td>
                                    <td>{{ $srs->email }}</td>
                                    <td>{{ $srs->nama_sekolah }}</td>
                                    <td>{{ $srs->no_hp }}</td>
                                    <td>
                                        <img src="{{ Storage::url($srs->pembayaran) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                                    <td>
                                        <a href="{{ route('sr.edit', $srs->id) }}"
                                            class="btn btn-success btn-sm">
                                            <i class='fas fa-edit'></i></a>
                                        <form action="{{ route('sr.destroy', $srs->id) }}" method="POST"
                                            class="pt-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete_confirm">
                                                <i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        showing
                        {{ $sr->firstItem() }}
                        of
                        {{ $sr->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $sr->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
