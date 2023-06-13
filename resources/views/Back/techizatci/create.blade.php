@extends("back.layouts.master")
@section("title","Panel")
@section('content')

          
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Təchizatçı</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">

            <form  enctype="multipart/form-data" id="myForm">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="ad" class="form-label">Ad</label>
                            <input type="text" name='ad' value="{{old('name')}}" class="form-control" id="ad"
                                aria-describedby="emailHelp" placeholder='Ad'>
                                <span class="text-danger error-text ad_error "></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefon</label>
                            <input type="text" name='phone' value="{{old('phone')}}" class="form-control"
                                id="phone" aria-describedby="emailHelp" placeholder='Telefon'>
                                <span class="text-danger error-text phone_error "></span>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Əlavə et</button>
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
            url: "{{route('admin.techizatci.store')}}",
            type: 'POST',
            data: formData,
            beforeSend: function() {
                $(document).find('span.error-text').text('');
            },
            success: function(data) {
                // AJAX yanıtını işleyin

                if (data.status == 0) {
                    $.each(data.error, function(prefix, val) {
                        $('span.' +prefix + '_error').text(val[0]);
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