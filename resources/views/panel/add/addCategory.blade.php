@extends("panel.layouts.app")
@section("content")
    <style>
        .clearfix form div:nth-child(even){
            margin-right: 4%;
        }
        .clearfix form div:nth-child(odd){
            margin-right: 0;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card p-5">
                    <div class="page-header">
                        <h2 class="pageheader-title">Kategori Ekle</h2>
                    </div>
                    <div class=" clearfix">
                        <div style="background-color: yellow">
                            <li></li>
                        </div>
                        <form action="{{route('admin.add.postCategory')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="">Ürün Adı</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div>
                                <label for="">Url Değeri</label>
                                <input type="text" name="slug" required>
                            </div>
                            <div>
                                <label for="">Ansayfadaki Kategori Resmi</label>
                                <input type="file" class="form-control" name="mainpage_photo" >
                            </div>
                            <button type="submit" class="btn btn-success float-left">Ekle</button>
                        </form>
                    </div>
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
