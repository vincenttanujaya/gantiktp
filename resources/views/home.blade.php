@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script src="{{ asset('js/sweetalert.min.js') }}" defer></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Permohonan</div>
                <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-responsive table-bordered">
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
                                        <td class="align-middle">{{$item->ID_Permohonan}}</td>
                                        <td class="align-middle">{{$item->Nama}}</td>
                                        <td class="align-middle">{{$item->NIK}}</td>
                                        <td class="align-middle">{{$item->Alamat}} RT.{{$item->RT}} RW.{{$item->RW}} Kelurahan {{$item->Kelurahan}}</td>
                                        <td class="align-middle">{{$item->Alasan}}</td>
                                        <td class="align-middle"><a href="/img/fileupload/{{$item->urlFoto}}" target="_blank"><img src="/img/fileupload/{{$item->urlFoto}}" width="100px" alt=""></a></td>
                                        <td class="align-middle">{{$item->Status}}</td>
                                        <td class="align-middle">
                                            <form id="actionForm" action="/update" action="POST">
                                                @csrf
                                                <input type="hidden" value="{{$item->ID_Permohonan}}" name="ID">
                                                <div class="row">
                                                {{-- <div class="col-8">
                                                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                                                        <option value="DIPROSES">DIPROSES</option>
                                                        <option value="SELESAI">SELESAI</option>
                                                        <option value="DITOLAK, Data KTP/Surat Tidak Sesuai">DITOLAK, Data KTP/Surat Tidak Sesuai</option>
                                                        <option value="DITOLAK, Harap Datang Langsung ke Kecamatan">DITOLAK, Harap Datang Langsung ke Kecamatan</option>
                                                        <option value="BLANKO HABIS, Harap datang langsung ke Dukcapil">BLANKO HABIS, Harap datang langsung ke Dukcapil</option>
                                                    </select>
                                                </div> --}}
                                                    <input type="hidden" value="" name="status">
                                                <div class="col">
                                                    <button type="submit" class="btn btn-sm btn-success" onclick=successClick()>Selesai</button>
                                                </div>
                                                <div class="col">
                                                <button type="submit" class="btn btn-sm btn-danger" onclick=failClick()>Tolak</button>
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
<script>
    function successClick(){
        event.preventDefault();
        swal({
            title: "Apakah Anda Yakin ?",
            text: "Apakah anda yakin mengonfirmasi permohonan ini ?",
            icon: "warning",
            showCancelButton: true,
            cancelButtonColor: '#3085d6',
            confirmButtonText: "Ya",
            cancelButtonText: "Batal",
        })
            .then(function () {
                document.getElementsByName("status")[0].value = "SELESAI";
                $('#actionForm').submit();
            })}
    function failClick(){
        event.preventDefault();
        swal({
            title: "Apakah Anda Yakin ?",
            text: "Apakah anda yakin menolak permohonan ini ?",
            icon: "warning",
            showCancelButton: true,
            cancelButtonColor: '#3085d6',
            confirmButtonText: "Ya",
            cancelButtonText: "Batal",
        })
            .then(function () {
                document.getElementsByName("status")[0].value = "DITOLAK";
                $('#actionForm').submit();
            })}
</script>

@endsection
