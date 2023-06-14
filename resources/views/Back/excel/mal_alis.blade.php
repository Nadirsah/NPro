@extends("back.layouts.master")
@section("title","Panel")
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Excel</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Əlavə et <span><a href="{{route('admin.mal_alis.create')}}"><i
                            class="btn btn-success fa-solid fa-circle-plus"></i></a></span>
                <a class="btn btn-danger float-end" style="margin-left:10px"
                    href="{{ route('mal.export') }}">Məlumatları xaricə köçür <i class="fa-solid fa-arrow-up"></i></a>
            </h6>
        </div>
        <div class="card-body">
            <div class="border border-secondary rounded p-3 mb-2">
                <form action="{{ route('mal.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Excel sənədi seçin</label>
                        <input type="file" class="form-control" id="file" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Məlumatları daxil et <i
                            class="fa-solid fa-arrow-down"></i></button>
                </form>
            </div>

            <div class="table-responsive">
                
            </div>
        </div>
    </div>

</div>

@endsection