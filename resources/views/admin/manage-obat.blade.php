@extends('admin.layout.main-layout')

@section('title', 'Manajemen Obat')

<!-- @section('redeem-point', 'active') -->

@section('content')
<div class="h-vh-100 p-5" style="background-color: #21BF73; width: 83vw">
        <h1 class="fw-bold" style="color: white">Manajemen Obat</h1>
        <div style="background-color: white; color: black;" class="rounded-3 w-full p-3">
            <h3 class="fw-bold">Daftar Obat</h3>
            <button class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#modalStore">Tambah</button>
            @if (Session::has('success'))
                <div class="alert alert-success alert-lg"> {{ Session::get('success') }}</div>
            @elseif (Session::has('fail'))
                <div class="alert alert-danger alert-lg"> {{ Session::get('fail') }}</div>
            @endif
            <!-- Content -->
            <div class="col">
                <table class="table table-bordered my-4">
                    <thead class="table-light">
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Obat</th>
                            <th>Resep Obat</th>
                            <th>Nomor Antrian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_obat as $data)
                            <tr>
                                <td scope="row">{{ $loop -> iteration }}</td>
                                <td scope="row">{{ $data -> nama_obat }}</td>
                                <td scope="row">{{ $data -> resep_obat }}</td>
                                <td scope="row">{{ $data -> nomor_antrian }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Content -->


            <!-- Modal Store -->
            <div class="modal fade" id="modalStore" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Obat</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('obat.add') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nama Obat</span>
                                    <input name="nama_obat" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                        required>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Resep Obat</span>
                                    <textarea name="resep_obat" class="form-control" aria-label="With textarea"
                                        rows="10" required></textarea>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nomor Antrian</span>
                                    <input name="nomor_antrian" type="number" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                        required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Store -->

        </div>
    </div>
@endsection
