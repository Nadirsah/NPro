@extends("back.layouts.master")
@section("title","NPro")
@section('content')



<form id="myForm">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-6">
            <select name="techizatci" class="form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Təchizatçı</option>
                @foreach($data as $item)
                <option value="{{$item->id}}">{{$item->ad}}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="sened_no">Sənəd No</label>
                <input name="sened_no" type="number" class="form-control mb-2" id="sened_no">
                <span class="text-danger error-text sened_no_error "></span>
            </div>
            <div class="form-group">
                <label for="barcod">Barcode</label>
                <input name="barcod" type="number" class="form-control mb-2" id="barcod">
                <span class="text-danger error-text barcod_error "></span>
            </div>
            <div class="form-group">
                <label for="mal_adi">Malın adı</label>
                <input name="mal_adi" type="text" class="form-control mb-2" id="mal_adi">
                <span class="text-danger error-text mal_adi_error "></span>
            </div>
            <div class="form-group">
                <label for="tip">Tipi</label>
                <input name="tip" type="text" class="form-control mb-2" id="tip">
                <span class="text-danger error-text tip_error "></span>
            </div>
            <div class="form-group">
                <label for="miqdar">Miqdar</label>
                <input name="miqdar" type="number" class="form-control mb-2" id="miqdar">
                <span class="text-danger error-text miqdar_error "></span>
            </div>

        </div>
    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="alis_qiy">Alış qiyməti</label>
                <input name="alis_qiy" type="number" class="form-control mb-2" id="alis_qiy" step="0.01" min="0.01"
                    max="100">
                <span class="text-danger error-text alis_qiy_error "></span>
            </div>
            <div class="form-group">
                <label for="satis_qiy">Satış qiyməti</label>
                <input name="satis_qiy" type="number" class="form-control mb-2" id="satis_qiy" step="0.01" min="0.01"
                    max="100">
                <span class="text-danger error-text satis_qiy_error "></span>
            </div>
            
        </div>
    </div>
    <div class="row mt-2 justify-content-center mb-3">
        <div class="col-md-6">
            <button class="btn-info btn-block" type="submit">Saxla</button>
        </div>
    </div>
</form>





@endsection
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault(); // Formun otomatik olarak submit olmasını engelle
        var formData = $(this).serialize(); // Form verilerini al
        $.ajax({
            url: "{{route('admin.mal_alis.store')}}",
            type: 'POST',
            data: formData,
            beforeSend: function() {
                $(document).find('span.error-text').text('');
            },
            success: function(data) {
                // AJAX yanıtını işleyin

                if (data.status == 0) {
                    $.each(data.error, function(prefix, val) {
                        $('span.' + prefix + '_error').text(val[0]);
                    });
                } else {
                    $('#myForm')[0].reset();

                }
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