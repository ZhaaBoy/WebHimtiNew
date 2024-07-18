@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Mobile Legend')
@section('ml', 'active')
@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Table Lomba Mobile Legend 2023</h2>
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
                                <th>Nama Leader</th>
                                <th>Email</th>
                                <th>Anggota 1</th>
                                <th>Anggota 2</th>
                                <th>Anggota 3</th>
                                <th>Anggota 4</th>
                                <th>Anggota 5</th>
                                <th>Cadangan 1</th>
                                <th>Cadangan 2</th>
                                <th>No Telpon</th>
                                <th>Bukti Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($ml as $key => $mls)
                                <tr>
                                    <td>{{ $ml->firstItem() + $key }}</td>
                                    <td><a class="btn"
                                        href="{{ route('ml.show', $mls->id) }}">{{ $mls->nama_pendaftar }}</td>
                                    <td>{{ $mls->nama_team }}</td>
                                    <td>{{ $mls->nama_leader }}</td>
                                    <td>{{ $mls->email }}</td>
                                    <td>{{ $mls->team_1 }}</td>
                                    <td>{{ $mls->team_2 }}</td>
                                    <td>{{ $mls->team_3 }}</td>
                                    <td>{{ $mls->team_4 }}</td>
                                    <td>{{ $mls->team_5 }}</td>
                                    <td>{{ $mls->cadangan_1 }}</td>
                                    <td>{{ $mls->cadangan_2 }}</td>
                                    <td>{{ $mls->nomor_telpon }}</td>
                                    <td>
                                        <img src="{{ Storage::url($mls->pembayaran) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                                    <td>
                                        <a href="{{ route('ml.edit', $mls->id) }}"
                                            class="btn btn-success btn-sm">
                                            <i class='fas fa-edit'></i></a>
                                        <form action="{{ route('ml.destroy', $mls->id) }}" method="POST"
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
                        {{ $ml->firstItem() }}
                        of
                        {{ $ml->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $ml->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
