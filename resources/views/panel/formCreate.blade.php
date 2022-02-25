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
                        <div style="background-color: yellow">
                                <li></li>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="">Ürün Adı</label>
                                <input type="text" class="form-control" name="product_name" required>
                            </div>
                            <div>
                                <label for="" >Ürün Türü</label>
                                <select id="" name="product_type" required>
                                    <option disabled selected>Ürün Türünü seçiniz</option>
                                    <option value="1">Tatlı</option>
                                    <option value="2">İçecek</option>
                                    <option value="3">Kahvaltılık</option>
                                    <option value="4">Ana Yemek</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Ürün Fiyatı</label>
                                <input type="number" name="price" required>
                            </div>
                            <div class="flex">
                                <label for="">Ürün Stok Durumu</label>
                                <input type="checkbox"  name="activity">
                            </div>
                            <div>
                                <label for="">Ürün Açıklaması</label>
                                <textarea id="" cols="10" rows="10" name="description" required></textarea>
                            </div>
                            <div>
                                <label for="">Ürün Resmi</label>
                                <input type="file" class="form-control" name="image" >
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
