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
                        <h2 class="pageheader-title">Ürün Ekle</h2>
                    </div>
                    <div class=" clearfix">
                        <div >
                            <li></li>
                        </div>
                        <form action="{{route('admin.update.postProduct',$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="">Proje Başlığı</label>
                                <input type="text" class="form-control" value="{{$product->title}}" name="title" required>
                            </div>
                            <div>
                                <label for="">Proje slugu</label>
                                <input type="text" class="form-control" value="{{$product->slug}}" name="slug" required>
                            </div>
                            <div>
                                <label for="" >Kategori Türü</label>
                                <select  name="category_id" required>
                                    <option disabled selected>Kategori Türünü seçiniz</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="">Proje Açıklaması</label>
                                <textarea id="summary-ckeditor"  cols="100" rows="100" name="description" required>{{$product->description}}</textarea>
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
    </script>
@endsection
