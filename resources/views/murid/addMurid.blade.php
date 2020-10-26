@extends('layout.app')
@section('content')
    <div class="container" style="margin-top:20px">
        <div class="row">
            <h1 class="col">
                Masukkan Data Murid
            </h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('murid.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control" name="nama_murid" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Induk Siswa (NIS):</label>
                        <input type="text" class="form-control" name="nis" required>
                    </div>
                    <div class="form-group">
                        <label>Kelas:</label>
                        <select name="kelas_id" class="custom-select">
                            @foreach ($mkelas as $kelas)
                                <option value="{{ $kelas->id }}" required>{{ $kelas->kelas . ' (' . $kelas->jurusan_kelas . ')' }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gender:</label><br>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat:</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telpon:</label>
                        <input type="text" class="form-control" name="nomor_telp" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
