@extends("back.layouts.master")
@section("title","Panel")
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mal alışı</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">

            <form id="myForm">
            @method("PUT")
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <select name="techizatci" class="form-select form-select-lg mb-3"
                            aria-label=".form-select-lg example">
                            <option>Təchizatçı Secin</option>
                            @foreach($techiz as $item)
                            @if($data->techizatci == $item->id)
                            <option value="{{$item->id}}" selected>{{$item->ad}}</option>
                            @else
                            <option value="{{$item->id}}">{{$item->ad}}</option>
                            @endif
                            @endforeach
                        </select>
                        <div class="form-group">
                            <label for="sened_no">Sənəd No</label>
                            <input name="sened_no" type="number" value="{{$data->sened_no}}" class="form-control mb-2"
                                id="sened_no">
                            <span class="text-danger error-text sened_no_error "></span>
                        </div>
                        <div class="form-group">
                            <label for="barcod">Barcode</label>
                            <input name="barcod" type="number" value="{{$data->barcod}}" class="form-control mb-2"
                                id="barcod">
                            <span class="text-danger error-text barcod_error "></span>
                        </div>
                        <div class="form-group">
                            <label for="mal_adi">Malın adı</label>
                            <input name="mal_adi" type="text" value="{{$data->mal_adi}}" class="form-control mb-2"
                                id="mal_adi">
                            <span class="text-danger error-text mal_adi_error "></span>
                        </div>
                        <div class="form-group">
                            <label for="tip">Tipi</label>
                            <input name="tip" type="text" value="{{$data->tip}}" class="form-control mb-2" id="tip">
                            <span class="text-danger error-text tip_error "></span>
                        </div>
                        <div class="form-group">
                            <label for="miqdar">Miqdar</label>
                            <input name="miqdar" type="number" value="{{$data->miqdar}}" class="form-control mb-2"
                                id="miqdar">
                            <span class="text-danger error-text miqdar_error "></span>
                        </div>

                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alis_qiy">Alış qiyməti</label>
                            <input name="alis_qiy" type="number" value="{{$data->alis_qiy}}" class="form-control mb-2"
                                id="alis_qiy" step="0.01" min="0.01" max="100">
                            <span class="text-danger error-text alis_qiy_error "></span>
                        </div>
                        <div class="form-group">
                            <label for="satis_qiy">Satış qiyməti</label>
                            <input name="satis_qiy" type="number" value="{{$data->satis_qiy}}" class="form-control mb-2"
                                id="satis_qiy" step="0.01" min="0.01" max="100">
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

        </div>
    </div>

</div>

@endsection

<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault(); // Formun otomatik olarak submit olmasını engelle
        var formData = $(this).serialize(); // Form verilerini al
        $.ajax({
            url: "{{route('admin.mal_alis.update',$data->id)}}",
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
                    window.location.href = data.redirect;
                }
            },
            error: function(xhr) {
                // Hata durumunda işlemler
                console.log(xhr.responseText);
            }
        });
    });
});
</script>