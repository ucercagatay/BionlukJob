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
                        <h2 class="pageheader-title">Site Ayarlarını Güncelle</h2>
                    </div>
                    <div class=" clearfix">
                        <div style="background-color: yellow">
                            <li></li>
                        </div>

                        <form action="{{route('admin.update.postSiteConfig')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="">Telefon Numarası</label>
                                <input type="text" class="form-control" value="{{$site_configs->phoneNumber}}" name="phoneNumber" required>
                            </div>
                            <div>
                                <label for="" >Email Adresi</label>
                               <input type="email" class="form-control" value="{{$site_configs->email}}" name="email" required>
                            </div>

                            <div>
                                <label for="">Facebook Url</label>
                                <input type="text" name="facebook_url" value="{{$site_configs->facebook_url}}" required>
                            </div>
                            <div>
                                <label for="">Behance Url</label>
                                <input type="text" name="behance_url" value="{{$site_configs->behance_url}}" required>
                            </div>
                            <div>
                                <label for="">Twitter Url</label>
                                <input type="text" name="twitter_url" value="{{$site_configs->twitter_url}}" required>
                            </div>
                            <div>
                                <label for="">Adress</label>
                                <input type="text" name="adress" value="{{$site_configs->adress}}" required>
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
