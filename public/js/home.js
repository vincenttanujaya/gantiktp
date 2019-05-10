$('#selesaiwamodal').on('show.bs.modal', function(e) {
    var noWA = $(e.relatedTarget).data('wa');
    var id = $(e.relatedTarget).data('id');
    $(e.currentTarget).find('input[name="idpermohonan"]').val(id);
    $(e.currentTarget).find('a[name="nomorwa"]').attr("href", noWA);
});

$('#selesaihpmodal').on('show.bs.modal', function(e) {
    var noHP = $(e.relatedTarget).data('hp');
    var content = 'Pemohon tidak memiliki Whatsapp. Silahkan kirimkan notifikasi melalui pesan singkat (SMS) ke nomor pemohon : +' + noHP + '. Terima permohonan?';
    var id = $(e.relatedTarget).data('id');
    $(e.currentTarget).find('div[name="content"]').html(content);
    $(e.currentTarget).find('input[name="idpermohonan"]').val(id);
});
