@extends('layouts.app')

@section('content')
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
                                                {{-- <div class="col-8">
                                                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                                                        <option value="DIPROSES">DIPROSES</option>
                                                        <option value="SELESAI">SELESAI</option>
                                                        <option value="DITOLAK, Data KTP/Surat Tidak Sesuai">DITOLAK, Data KTP/Surat Tidak Sesuai</option>
                                                        <option value="DITOLAK, Harap Datang Langsung ke Kecamatan">DITOLAK, Harap Datang Langsung ke Kecamatan</option>
                                                        <option value="BLANKO HABIS, Harap datang langsung ke Dukcapil">BLANKO HABIS, Harap datang langsung ke Dukcapil</option>
                                                    </select>
                                                </div> --}}
                                                <div class="col">
                                                @if($item->WA == null)
                                                <button type="button" id="selesai" class="btn btn-sm btn-success" value="SELESAI" data-id="{{$item->ID_Permohonan}}" data-hp="{{$item->HP}}" data-toggle="modal" data-target="#selesaihpmodal">Selesai</button>
                                                @else
                                                <button type="button" id="selesai" class="btn btn-sm btn-success" value="SELESAI" data-id="{{$item->ID_Permohonan}}" data-wa="https://api.whatsapp.com/send?phone=62{{$item->WA}}" data-toggle="modal" data-target="#selesaiwamodal">Selesai</button>
                                                @endif
                                                </div>
                                                <div class="col">
                                                <button type="button" id="tolak" class="btn btn-sm btn-danger" value="DITOLAK" data-toggle="modal" data-target="#tolakmodal">Tolak</button>
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

<div class="modal fade" id="selesaihpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi pengiriman notifikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" name="content">
        
      </div>
      <form action="/update" method="post" id="formhp">
        {{ csrf_field() }}
        <input type="hidden" name="idpermohonan" value="">
        <input type="hidden" name="status" value="DITOLAK">
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button onclick="document.getElementById('formhp').submit();" class="btn btn-primary">Lanjutkan</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="selesaiwamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi pengiriman notifikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Pemohon memiliki Whatsapp. Kirim notifikasi ke nomor Whatsapp pemohon dan terima permohonan?
      </div>
      <form action="/update" method="post" id="formwa">
        {{ csrf_field() }}
        <input type="hidden" name="idpermohonan" value="17">
        <input type="hidden" name="status" value="DITERIMA">
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <a href="" target="_blank" name="nomorwa"><button onclick="document.getElementById('formwa').submit();" class="btn btn-primary">Kirim</button></a>
      </div>
    </div>
  </div>
</div>
@endsection
