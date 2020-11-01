@extends('layout.app')
@section('title')
    <title>Murid - Edit</title>
@endsection
@section('content')
<p style="padding: 4px;margin: 20px;">In this page you can edit Murid :)</p><span 
        style="font-size: 28px;margin: 24px;">Edit Data Murid</span>
    <!-- <div class="btn-group" role="group"></div> -->
    <div class="container-fluid" style="margin-top: 25px;">
        <div class="row">
            <div class="col">
                <form action="{{ route('murid.update', $murid) }}" method="post">
                    {{-- {{ csrf_field() }} --}}
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Nama:</label>
                        <input type="text" class="form-control" name="nama_murid" value="{{ $murid->nama_murid }}">
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Nomor Induk Siswa (NIS):</label>
                        <input type="text" class="form-control" name="nis" value="{{ $murid->nis }}" disabled>
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Kelas:</label>
                        <select name="kelas_id" class="custom-select">
                            @foreach ($mkelas as $kelas)

                                {{-- panah pertama mengarah ke function yang ada di murid.php
                                (model), panah kedua menuju kolom yg ada di table --}}
                                <option value="{{ $kelas->id }}" @if ($murid->kelas->kelas == $kelas->kelas && $murid->kelas->jurusan_kelas == $kelas->jurusan_kelas)
                                    selected
                            @endif>
                            {{ $kelas->kelas . ' (' . $kelas->jurusan_kelas . ')' }}
                            </option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Gender:</label><br>
                        @if ($murid->gender == 'male')
                            <input type="radio" id="male" name="gender" value="male" checked>
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label> @else
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female" checked>
                            <label for="female">Female</label>
                        @endif

                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{ $murid->tanggal_lahir }}">
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Alamat:</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $murid->alamat }}">
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Nomor Telpon:</label>
                        <input type="text" class="form-control" name="nomor_telp" value="{{ $murid->nomor_telp }}">
                    </div>

                    <button type="submit" class="btn btn-primary"
                        style="background: rgb(251,199,193);color: rgb(85,86,88);">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    &nbsp;
@endsection
    