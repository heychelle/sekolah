@extends('layout.app')
@section('content')
    <div class="container" style="margin-top:20px">
        <div class="row">
            <h1 class="col">Edit Data Kelas</h1>
        </div>
        <div class="row">
            <div class="col">
                {{-- {{ dd($mkelas) }} --}}
                <form action="{{ route('kelas.update', $kela) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="kelas">Kelas:</label>
                        <select name="kelas" class="custom-select">
                            {{-- @foreach ($kela as $kelas)
                                --}}
                            <option @if ($kela->kelas == 'X') selected @endif>X</option>
                            <option @if ($kela->kelas == 'XI') selected @endif>XI</option>
                            <option @if ($kela->kelas == 'XII') selected @endif>XII</option>
                            {{-- @else --}}
                            {{-- <option value="{{ $kelas->id }}">{{ $kelas->kelas }}</option>
                            --}}
                            {{-- @endif --}}
                            {{-- @endforeach
                            --}}
                        </select>
                    </div>
                    <div class="form-group ">
                        <label>Jurusan Kelas:</label>
                        <select name="jurusan_kelas" class="custom-select">
                            <option @if ($kela->jurusan_kelas == 'IPA') selected @endif>IPA</option>
                            <option @if ($kela->jurusan_kelas == 'IPS') selected @endif>IPS</option>
                            <option @if ($kela->jurusan_kelas == 'BAHASA') selected @endif>Bahasa</option>
                        </select>
                        {{-- @foreach ($kela as $kelas)
                            --}}
                        {{-- @if ($kelas->jurusan_kelas == $kelas->jurusan_kelas) --}}
                        {{-- <option value="{{ $kelas->id }}" selected>
                            {{ $kelas->jurusan_kelas }} </option> --}}
                        {{-- @else --}}
                        {{-- <option value="{{ $kelas->id }}">
                            {{ $kelas->jurusan_kelas }}</option> --}}
                        {{-- @endif --}}
                        {{-- @endforeach
                    --}}
                    </div>
                    <div class="form-group ">
                        <label>Wali Kelas:</label>
                        <input class="form-control" name="wali_kelas" value="{{ $kela->wali_kelas }}"></input>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
