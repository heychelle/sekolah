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
                                {{-- baca data dengan cara loop --}}
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
                                            <div><a class="btn btn-primary" type="submit" style="background: rgb(234, 83, 83);" role="button" data-toggle="modal" href="#myModal">Delete</a>
                                                <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 style="color: rgb(85,86,88);">Warning</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                            <div class="modal-body">
                                                                <p class="text-center text-muted">Apa anda yakin untuk menghapus data murid ini? </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-light" data-dismiss="modal" type="button">Tidak</button>
                                                                <form action="{{ route('murid.destroy', $murid) }}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button class="btn btn-primary" type="submit" style="background: rgb(251,199,193); color: rgb(85,86,88);">Iya</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
