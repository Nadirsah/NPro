@extends("back.layouts.master")
@section("title","NPro")
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="{{asset('back/')}}/js/mal.js"></script>




<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mal Alışı</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cedvel <span><a href="{{route('admin.mal_alis.create')}}"><i
                            class="btn btn-success fa-solid fa-circle-plus"></i></a></span><span
                    style="margin-left:10px">Excel<a href="{{route('admin.excelmal')}}"><i
                            class="btn btn-success fa-solid fa-file-excel" style="margin-left:10px"></i></a></span></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- <table>
                    <td><select data-column="1" name="techizatci" class="form-control filter-select text-dark">
                            <option value="">Təchizatçı seçin</option>
                            @foreach($techiz as $techizs)
                            <option value="{{$techizs->ad}}" class="text-dark">{{$techizs->ad}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='1'>
                    </td>
                    <td><select data-column="2" name="techizatci" class="form-control filter-select">
                            <option value="">Sənəd No seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->sened_no}}" class="text-dark">{{$items->sened_no}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='2'>
                    </td>
                    <td><select data-column="3" name="techizatci" class="form-control filter-select">
                            <option value="">Barcod seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->barcod}}" class="text-dark">{{$items->barcod}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='3'>
                    </td>
                    <td><select data-column="4" name="techizatci" class="form-control filter-select text-dark">
                            <option value="">Mal adı seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->mal_adi}}" class="text-dark">{{$items->mal_adi}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='4'>
                    </td>


                    <td><select data-column="5" name="techizatci" class="form-control filter-select">
                            <option value="">Tip seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->tip}}" class="text-dark">{{$items->tip}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='5'>
                    </td>
                    <td><select data-column="6" name="techizatci" class="form-control filter-select">
                            <option value="">Təchizatçı seçin</option>
                            @foreach($data as $items)
                            <option value="{{$items->title}}" class="text-dark">{{$items->title}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <input type="text" class="form-control filter-input" data-column='6'>
                    </td>
                </table> -->
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="searchInput" placeholder="Axtar...">
                    </div>
                </div>
                <hr>
                <div style="height: 500px; overflow-y: scroll;">
                    <table class="table table-bordered" id="mal_alis" width="100%" cellspacing="0">
                        <thead class="text-danger bg-dark" style="position: sticky; top: 0; z-index: 1;">
                            <tr>
                                <th>Say</th>
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
                        <div style="position: sticky; top: 40px; z-index: 1;">
                            <tbody style="position: relative;">
                                @foreach($data as $item)
                                <tr>
                                    <td id="say">{{ $loop->iteration }}</td>
                                    <td>{{$item->getTechizatci->ad}}</td>
                                    <td>{{$item->sened_no}}</td>
                                    <td>{{$item->barcod}}</td>
                                    <td>{{$item->mal_adi}}</td>
                                    <td>{{$item->tip}}</td>
                                    <td id="miqdar">{{$item->miqdar}}</td>
                                    <td id="alis_qiy">{{$item->alis_qiy}}</td>
                                    <td id="alis_meb">{{($item->alis_qiy)*($item->miqdar)}}</td>
                                    <td id="satis_qiy">{{$item->satis_qiy}}</td>
                                    <td id="satis_meb">{{($item->satis_qiy)*($item->miqdar)}}</td>
                                    <td> <a href="{{route('admin.mal_alis.edit',$item->id)}}"><i
                                                class="btn btn-info fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{route('admin.delete.mal',$item->id)}}"><i
                                                class="btn btn-danger fa-solid fa-trash"></i></a>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </div>
                        <tfoot class="text-danger bg-dark" style="position: sticky; bottom: 0; z-index: 1;">
                            <th id="cem"></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                                <span id="total"></span><span> ədəd</span>
                            </th>
                            <th>
                                <span id="total_alis_qiy"></span><span> azn</span>
                            </th>
                            <th>
                                <span id="total_alis_meb"></span><span> azn</span>
                            </th>
                            <th>
                                <span id="total_satis_qiy"></span><span> azn</span>
                            </th>
                            <th>
                                <span id="total_satis_meb"></span><span> azn</span>
                            </th>
                            <th></th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection


