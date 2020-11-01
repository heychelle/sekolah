@extends('layout.app')
@section('title')
    <title>Kelas - Add</title>
@endsection
@section('content')
    <p style="padding: 4px;margin: 20px;">In this page you can add new Kelas :)</p><span
        style="font-size: 28px;margin: 24px;">Tambah Data Kelas</span>
    <!-- <div class="btn-group" role="group"></div> -->
    <div class="container-fluid" style="margin-top: 25px;">
        <div class="row">
            <div class="col">
                <form action="{{ route('kelas.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Kelas:</label>
                        <select name="kelas" class="custom-select" required>
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="font-size:22px;color: rgb(85,86,88);">Jurusan Kelas:</label>
                        <select name="jurusan_kelas" class="custom-select" required>
                            <option>IPS</option>
                            <option>IPA</option>
                            <option>Bahasa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" style="font-size:22px;color: rgb(85,86,88);">Wali Kelas:</label>
                        <input type="text" class="form-control" name="wali_kelas" required>
                    </div>
                    <button type="submit" class="btn btn-primary"
                        style="background: rgb(251,199,193);color: rgb(85,86,88);">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
