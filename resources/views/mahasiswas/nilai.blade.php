@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2" style="text-align: center">
                <h2>Kartu Hasil Studi (KHS)</h2>
            </div>
            <div class="col-12 my-4">
            <p class="m-0"><strong>Nama :</strong> {{ $mahasiswas->nama }}</p>
            <p class="m-0"><strong>NIM  :</strong> {{ $mahasiswas->nim }}</p>
            <p class="m-0"><strong>Kelas:</strong> {{ $mahasiswas->kelas->nama_kelas }}</p>
            </div>
            <div class="col-12">
            <table class="table table-bordered">
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
                @foreach ($mahasiswas->matakuliah as $matakuliah)
                    <tr>
                        <td>{{ $matakuliah->nama_matkul }}</td>
                        <td>{{ $matakuliah->sks }}</td>
                        <td>{{ $matakuliah->semester }}</td>
                        <td>{{ $matakuliah->pivot->nilai}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection