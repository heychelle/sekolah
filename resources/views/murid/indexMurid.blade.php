@extends('layout.app')
@section('title')
<title>Murid - Index</title>
@endsection
@section('content')
<p @auth style="padding: 4px;margin: 20px;">In this page you can do anything :)</p><span @endauth
                    style="font-size: 28px;margin: 24px;">List Murid</span>
                <div class="btn-group" role="group"></div>
                <div class="container-fluid" style="margin-top: 25px;"><a @auth href="{{ route('murid.create') }} @endauth" <button
                        class="btn btn-primary" type="button"
                        style="margin-bottom: 15px;margin-left: 4px;background: rgb(114,203,42);">Tambah</button></a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">NIS</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Nama Murid</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Kelas</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Gender</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Tanggal Lahir</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Alamat</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Nomor Telpon</th>
                                    <th style="color: rgb(85,86,88);width: 130px;text-align: center;">Action Delete</th>
                                    <th style="color: rgb(85,86,88);width: 130px;text-align: center;">Action Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($murids as $murid)
                                    <tr>
                                        <td style="text-align: center;">{{ $murid->nis }} </a>
                                        </td>
                                        <td style="text-align: center;">{{ $murid->nama_murid }}</td>
                                        <td style="text-align: center;">
                                            {{ $murid->kelas->kelas . ' (' . $murid->kelas->jurusan_kelas . ')' }}
                                        </td>
                                        <td style="text-align: center;">{{ $murid->gender }}</td>
                                        <td style="text-align: center;">{{ $murid->tanggal_lahir }} </a>
                                        </td>
                                        <td style="text-align: center;">{{ $murid->alamat }}</td>
                                        <td style="text-align: center;">{{ $murid->nomor_telp }}</td>
                                        <td style="text-align: center;">
                                            @auth
                                            <form action="{{ route('murid.destroy', $murid) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-primary" type="submit"
                                                    style="background: rgb(234, 83, 83);">Delete</button>
                                            </form>
                                            @endauth
                                        </td>
                                        <td style="text-align: center;">
                                            @auth
                                            <form action="{{ route('murid.edit', $murid) }}">
                                                @csrf
                                                <button class="btn btn-primary" type="submit"
                                                    style="background: rgb(234,210,83);">Edit</button>
                                            </form>
                                            @endauth
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
