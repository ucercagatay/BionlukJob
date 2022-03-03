@extends("panel.layouts.app")
@section("content")
    <div class="pdf container">


        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card p-5">
                    <div class="page-header">
                        <h2 class="pageheader-title">Kategori Listesi</h2>
                    </div>
                    <table class="display nowrap dataTable cell-border" style="width:100%">
                        <thead>
                        <tr>
                            <th>Kategori İsmi</th>
                            <th>Url değeri</th>
                            <th>Görsel</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>Düzenlenme Tarihi</th>
                            <th>Aktif Et</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td><p>{{$category->name}}</p></td>
                                <td><p>{{$category->slug}}</p></td>
                                <td><img src="{{asset($category->mainpage_photo)}}" alt=""></td>
                                <td><p>{{$category->created_at}}</p></td>
                                <td>@if($category->updated_at!=Null)<p>{{$category->updated_at}}</p>@else<p>Henüz Düzenlenmedi</p>@endif</td>
                                <td><a href="{{route('admin.switch.category',$category->id)}}" class="btn btn-primary">AKTİF ET</a></td>
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
