@extends('layout.app')
@section('content')
    <div class="container" style="margin-top:20px">
        <div class="row">
            <h1 class="col">List Kelas</h1>
        </div>
        <div class="row">
           
                <div class="col-md-2 offset-md-8">
                <a href="{{ route('kelas.create') }}" class="btn btn-primary btn-block" role="button"
                    aria-pressed="true" style="margin-bottom: 10px">Tambah</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan Kelas</th>
                            <th scope="col">Wali Kelas</th>
                            <th scope="col">Action Delete</th>
                            <th scope="col">Action Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mkelas as $kelas)
                            <tr>
                                <td>{{ $kelas->kelas }} </a></td>
                                <td>{{ $kelas->jurusan_kelas }}</td>
                                <td>{{ $kelas->wali_kelas }}</td>
                                    <td>
                                    <form action="{{ route('kelas.destroy', $kelas) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('kelas.edit', $kelas) }}">
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
