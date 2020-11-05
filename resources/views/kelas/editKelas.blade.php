@extends('layout.app')
@section('title')
    <title>Kelas - Edit</title>
@endsection
@section('content')
    <p style="padding: 4px;margin: 20px;">In this page you can edit Kelas :)</p><span
        style="font-size: 28px;margin: 24px;">Edit Data Kelas</span>
    <div class="container-fluid" style="margin-top: 25px;">
        <div class="row">
            <div class="col">
                <form action="{{ route('kelas.update', $kela) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="kelas" style="font-size:22px;color: rgb(85,86,88);">Kelas:</label>
                        <select name="kelas" class="custom-select">
                            {{-- @foreach ($kela as $kelas)
                                --}}
                            <option @if ($kela->kelas == 'X') selected
                            @endif>X</option>
                            <option @if ($kela->kelas == 'XI') selected </beautify
                                    end="@endif">XI</option>
                            <option @if ($kela->kelas == 'XII') selected </beautify
                                    end="@endif">XII</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label style="font-size:22px;color: rgb(85,86,88);">Jurusan Kelas:</label>
                        <select name="jurusan_kelas" class="custom-select">
                            <option @if ($kela->jurusan_kelas == 'IPA') selected </beautify
                                    end="@endif">IPA</option>
                            <option @if ($kela->jurusan_kelas == 'IPS') selected </beautify
                                    end="@endif">IPS</option>
                            <option @if ($kela->jurusan_kelas == 'Bahasa') selected </beautify
                                    end="@endif">Bahasa</option>
                        </select> 
                    </div>
                    <div class="form-group ">
                        <label style="font-size:22px;color: rgb(85,86,88);">Wali Kelas:</label>
                        <input class="form-control" name="wali_kelas" value="{{ $kela->wali_kelas }}"></input>
                    </div>

                    <button type="submit" class="btn btn-primary"
                        style="background: rgb(251,199,193);color: rgb(85,86,88);">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
