@extends("back.layouts.master")
@section("title","NPro")
@section('content')



<form id="myForm">
    @csrf
<div class="row justify-content-center">
    <div class="col-md-6">
        
        <label for="techizatci">Təchizatçı</label>
        <input name="techizatci" type="text" class="form-control mb-2" id="techizatci"  autofocus>
        <span class="text-danger">@error('techizatci'){{'Title sahəsi boş ola bilməz!'}}@enderror</span>
        <label for="barcod">Barcode</label>
        <input name="barcod" type="number" class="form-control mb-2" id="barcod">
        <label for="mal_adi">Malın adı</label>
        <input name="mal_adi" type="text" class="form-control mb-2" id="mal_adi">
        <label for="tip">Tipi</label>
        <input name="tip" type="text" class="form-control mb-2" id="tip">
        <label for="miqdar">Miqdar</label>
        <input name="miqdar" type="number" class="form-control mb-2" id="miqdar">
    </div>
</div>
<div class="row mt-2 justify-content-center">
    <div class="col-md-6">
        <label for="alis_qiy">Alış qiyməti</label>
        <input name="alis_qiy" type="number" class="form-control mb-2" id="alis_qiy" step="0.01" min="0.01" max="100">
        <label for="alis_meb" >Alış məbləği</label>
        <input readonly name="alis_meb" type="number" class="form-control mb-2" id="alis_meb" step="0.01" min="0.01" max="100000">
        <label for="satis_qiy">Satış qiyməti</label>
        <input name="satis_qiy" type="number" class="form-control mb-2" id="satis_qiy" step="0.01" min="0.01" max="100">
        <label  for="satis_meb" >Satış məbləği</label>
        <input readonly name="satis_meb" type="number" class="form-control mb-2" id="satis_meb" step="0.01" min="0.01" max="100000">
    </div>
</div>
<div class="row mt-2 justify-content-center mb-3">
    <div class="col-md-6">
<button class="btn-info btn-block" type="submit">Saxla</button>
</div>
</div>
</form>





@endsection
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>

$(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault(); // Formun otomatik olarak submit olmasını engelle

        var formData = $(this).serialize(); // Form verilerini al

        $.ajax({
            url: "{{route('admin.mal_alis.store')}}",
            type: 'POST',
            data: formData,
            success: function(response) {
                // AJAX yanıtını işleyin
                $('#myForm')[0].reset();
            },
            error: function(xhr) {
                // Hata durumunda işlemler
                console.log(xhr.responseText);
            }
        });
    });
});




$(document).ready(function() {
    $(document).on('change', '#alis_qiy', function() {
        var alis_qiy = parseFloat($('#alis_qiy').val());
        var miqdar = parseFloat($('#miqdar').val());

        var alis_meb = alis_qiy * miqdar;
        $('#alis_meb').val(alis_meb);
    });
});

$(document).ready(function() {
    $(document).on('change', '#satis_qiy', function() {
        var satis_qiy = parseFloat($('#satis_qiy').val());
        var miqdar = parseFloat($('#miqdar').val());

        var satis_meb = satis_qiy * miqdar;
        $('#satis_meb').val(satis_meb);
    });
});



</script>

