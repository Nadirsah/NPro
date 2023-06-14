@extends("back.layouts.master")
@section("title","NPro")
@section('content')





<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mal Alışı</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cedvel <span><a href="{{route('admin.mal_alis.create')}}"><i
                            class="btn btn-success fa-solid fa-circle-plus"></i></a></span></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table >
                    <td><select data-column="0" name="techizatci" class="form-control filter-select text-dark">
                            <option value="">Təchizatçı seçin</option>
                            @foreach($techiz as $techizs)
                            <option value="{{$techizs->ad}}" class="text-dark">{{$techizs->ad}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='0'>
                    </td>
                    <td><select data-column="1" name="techizatci" class="form-control filter-select">
                            <option value="">Sənəd No seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->sened_no}}" class="text-dark">{{$items->sened_no}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='1'>
                    </td>
                    <td><select data-column="2" name="techizatci" class="form-control filter-select">
                            <option value="">Barcod seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->barcod}}" class="text-dark">{{$items->barcod}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='2'>
                    </td>
                    <td><select data-column="3" name="techizatci" class="form-control filter-select text-dark">
                            <option value="">Mal adı seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->mal_adi}}" class="text-dark">{{$items->mal_adi}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='3'>
                    </td>
                   
                    
                    <td><select data-column="4" name="techizatci" class="form-control filter-select">
                            <option value="">Tip seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->tip}}" class="text-dark">{{$items->tip}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='4'>
                    </td>
                    <td><select data-column="5" name="techizatci" class="form-control filter-select">
                            <option value="">Təchizatçı seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->title}}" class="text-dark">{{$items->title}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='5'>
                    </td>
                </table>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Təchizatçı</th>
                            <th>Sənəd No</th>
                            <th>Barcode</th>
                            <th>Mal adı</th>
                            <th>Tip</th>
                            <th>Miqdar</th>
                            <th>Alış qiyməti</th>
                            <th>Alış məbləği</th>
                            <th>Satış qiyməti</th>
                            <th>Satış məbləği</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <th>{{$item->getTechizatci->ad}}</th>
                            <th>{{$item->sened_no}}</th>
                            <th>{{$item->barcod}}</th>
                            <th>{{$item->mal_adi}}</th>
                            <th>{{$item->tip}}</th>
                            <th>{{$item->miqdar}}</th>
                            <th>{{$item->alis_qiy}}</th>
                            <th>{{($item->alis_qiy)*($item->miqdar)}}</th>
                            <th>{{$item->satis_qiy}}</th>
                            <th>{{($item->satis_qiy)*($item->miqdar)}}</th>
                            <th> <a href="{{route('admin.mal_alis.edit',$item->id)}}"><i class="btn btn-info fa-solid fa-pen-to-square"></i></a>
                            <a href="{{route('admin.delete.mal',$item->id)}}"><i class="btn btn-danger fa-solid fa-trash"></i></a>

                            </th>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>




@endsection

