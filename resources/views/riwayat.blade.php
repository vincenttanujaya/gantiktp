@extends('layouts.app')

@section('content')
<div class="container align-middle">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5><b>Daftar Riwayat</b></h5>
                        </div>
                        <div class="col-6">
                        </div>
                        <div class="col">
                            <a href="{{ url('/home') }}">
                                <button class="btn btn-warning float-right"><i class="fa fa-arrow-left"></i>  Kembali</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Alasan</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($DB as $item)  
                                <tr>
                                    <th scope="row">{{$item->ID_Permohonan}}</th>
                                    <td class="align-middle">{{$item->Nama}}</td>
                                    <td class="align-middle">{{$item->NIK}}</td>
                                    <td class="align-middle">{{$item->Alamat}} RT.{{$item->RT}} RW.{{$item->RW}} Kelurahan {{$item->Kelurahan}}</td>
                                    <td class="align-middle">{{$item->Alasan}}</td>
                                    <td class="align-middle"><a href="/img/fileupload/{{$item->urlFoto}}" target="_blank"><img src="/img/fileupload/{{$item->urlFoto}}" width="100px" alt=""></a></td>
                                    <td class="align-middle">{{$item->Status}}</td>
                                    <td class="align-middle">
                                        <form action="/update" action="POST">
                                            @csrf
                                            <input type="hidden" value="{{$item->ID_Permohonan}}" name="ID">
                                            <div class="row">
                                                <div class="col-8">
                                                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                                                        <option value="DIPROSES">DIPROSES</option>
                                                        <option value="SELESAI">SELESAI</option>
                                                        <option value="DITOLAK, Data KTP/Surat Tidak Sesuai">DITOLAK, Data KTP/Surat Tidak Sesuai</option>
                                                        <option value="DITOLAK, Harap Datang Langsung ke Kecamatan">DITOLAK, Harap Datang Langsung ke Kecamatan</option>
                                                        <option value="BLANKO HABIS, Harap datang langsung ke Dukcapil">BLANKO HABIS, Harap datang langsung ke Dukcapil</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        
                        {{$DB->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
