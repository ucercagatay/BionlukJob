@extends("panel.layouts.app")
@section("content")
    <style>
        table.dataTable.display tbody tr td:nth-child(4){
            max-width: 150px;
            overflow: hidden;
        }
    </style>
    <div class="pdf container">


        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card p-5">
                    <div class="page-header">
                        <h2 class="pageheader-title">Proje Listesi</h2>
                    </div>
                    <table class="display nowrap dataTable cell-border" style="width:100%">
                        <thead>
                        <tr>
                            <th>Kategori İsmi</th>
                            <th>Başlık</th>
                            <th>Url değeri</th>
                            <th>Açıklama</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>Düzenlenme Tarihi</th>
                            <th>Pasif Et</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><p>{{$product->getCategory->name}}</p></td>
                                <td><p>{{$product->slug}}</p></td>
                                <td><p>{{$product->title}}</p></td>
                                {{--<td><img src="{{asset($category->mainpage_photo)}}" alt=""></td>--}}
                                <td><p>{{$product->description}}</p></td>
                                <td><p>{{$product->created_at}}</p></td>
                                <td>@if($product->updated_at!=Null)<p>{{$product->updated_at}}</p>@else<p>Henüz Düzenlenmedi</p>@endif</td>
                                <td><a href="{{route('admin.switch.product',$product->id)}}" class="btn btn-danger">Aktif Et</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        setTimeout(()=>{
            $("#form-elements").addClass("show")
        },1000)
    </script>
@endsection
