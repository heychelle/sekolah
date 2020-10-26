@extends('layout.app')
@section('content')
    <div class="container" style="margin-top:20px">
        <div class="row">
            <h1 class="col">List Murid</h1>
        </div>
        <div class="row">
           
                <div class="col-md-2 offset-md-8">
                <a href="{{ route('murid.create') }}" class="btn btn-primary btn-block" role="button"
                    aria-pressed="true" style="margin-bottom: 10px">Tambah</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Murid</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor Telpon</th>
                            <th scope="col">Action Delete</th>
                            <th scope="col">Action Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($murids as $murid)
                            <tr>
                                <td>{{ $murid->nis }} </a></td>
                                <td>{{ $murid->nama_murid }}</td>
                                <td>{{ $murid->kelas->kelas . ' ('.$murid->kelas->jurusan_kelas . ')'}}</td>
                                <td>{{ $murid->gender }}</td>
                                <td>{{ $murid->tanggal_lahir }} </a></td>
                                <td>{{ $murid->alamat }}</td>
                                <td>{{ $murid->nomor_telp }}</td>
                                    <td>
                                    <form action="{{ route('murid.destroy', $murid) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('murid.edit', $murid) }}">
                                        @csrf
                                        {{-- <input type="hidden" name="_method" value="EDIT"> --}}
                                        <button type="submit" class="btn btn-info">Edit</button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
