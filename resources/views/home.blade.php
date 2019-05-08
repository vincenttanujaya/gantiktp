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
                                                <button type="button" id="selesai" class="btn btn-sm btn-success" value="SELESAI" name="status" data-toggle="modal" data-target="#selesaimodal">Selesai</button>
                                                </div>
                                                <div class="col">
                                                <button type="button" id="tolak" class="btn btn-sm btn-danger" value="DITOLAK" name="status" data-toggle="modal" data-target="#tolakmodal">Tolak</button>
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

<div class="modal fade" id="selesaimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
          $('#nik').keyup(function(){
            var maxLength = $(this).attr("maxlength");
            if(maxLength == $(this).val().length)
            {
              var id=$(this).val();
              $.ajax({
                  url : "/cekNik",
                  method : "GET",
                  data : {nik: id},
                  async : false,
                  dataType : 'json',
                  success: function(data){
                      $('#result').val(data);
                      changeFunction(data);
                  }
              });
            }
            else
            {
              changeFunction('hideall');
            }
          });
      });
</script>
@endsection
