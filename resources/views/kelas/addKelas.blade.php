@extends('layout.app')
@section('content')
    <div class="container" style="margin-top:20px">
        <div class="row">
            <h1 class="col">
                Masukkan Data Kelas
            </h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('kelas.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Kelas:</label>
                        <select name="kelas" class="custom-select" required>
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Jurusan Kelas:</label>
                        <select name="jurusan_kelas" class="custom-select" required>
                                <option>IPS</option>
                                <option>IPA</option>
                                <option>Bahasa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Wali Kelas:</label>
                        <input type="text" class="form-control" name="wali_kelas" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
