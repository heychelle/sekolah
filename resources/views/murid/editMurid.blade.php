@extends('layout.app')
@section('content')
    <div class="container" style="margin-top:20px">
        <div class="row">
            <h1 class="col">Edit Data Murid</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('murid.update', $murid) }}" method="post">
                    {{-- {{ csrf_field() }} --}}
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control" name="nama_murid" value="{{ $murid->nama_murid }}">
                    </div>
                    <div class="form-group">
                        <label>Nomor Induk Siswa (NIS):</label>
                        <input type="text" class="form-control" name="nis" value="{{ $murid->nis }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Kelas:</label>
                        <select name="kelas_id" class="custom-select">
                            @foreach ($mkelas as $kelas)

                                @if ($murid->kelas == $kelas->kelas)
                                    <option value="{{ $kelas->id }}" selected>
                                        {{ $kelas->kelas . ' (' . $kelas->jurusan_kelas . ')' }}
                                    </option>
                                @else
                                    <option value="{{ $kelas->id }}">{{ $kelas->kelas . ' (' . $kelas->jurusan_kelas . ')' }}
                                    </option>
                                    
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gender:</label><br>
                        @if ($murid->gender == 'male')
                            <input type="radio" id="male" name="gender" value="male" checked>
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            
                        @else
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female" checked>
                            <label for="female">Female</label>
                            
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{ $murid->tanggal_lahir }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat:</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $murid->alamat }}" >
                    </div>
                    <div class="form-group">
                        <label>Nomor Telpon:</label>
                        <input type="text" class="form-control" name="nomor_telp" value="{{ $murid->nomor_telp }}" >
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
