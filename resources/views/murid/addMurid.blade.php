@extends('layout.app')
@section('title')
    <title>Murid - Add</title>
@endsection
@section('content')
    <p style="padding: 4px;margin: 20px;">In this page you can add new Murid :)</p><span 
        style="font-size: 28px;margin: 24px;">Tambah Data Murid</span>
    <!-- <div class="btn-group" role="group"></div> -->
    <div class="container-fluid" style="margin-top: 25px;">
        <div class="row">
            <div class="col">
                <form action="{{ route('murid.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Nama:</label>
                        <input type="text" class="form-control" name="nama_murid" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Nomor Induk Siswa (NIS):</label>
                        <input type="text" class="form-control" name="nis" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Kelas:</label>
                        <select name="kelas_id" class="custom-select">
                            @foreach ($mkelas as $kelas)
                                <option value="{{ $kelas->id }}" required>
                                    {{ $kelas->kelas . ' (' . $kelas->jurusan_kelas . ')' }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Gender:</label><br>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Alamat:</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Nomor Telpon:</label>
                        <input type="text" class="form-control" name="nomor_telp" required>
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
