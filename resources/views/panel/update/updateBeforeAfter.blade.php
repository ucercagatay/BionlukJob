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
                        <h2 class="pageheader-title">Before After Ekle</h2>
                    </div>
                    <div class=" clearfix">
                        <div>
                            <li></li>
                        </div>
                        <form action="{{route('admin.update.postBeforeAfter')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="">Before After Resmi</label>
                                <input type="file" class="form-control" name="photo_1" >
                                <input type="file" class="form-control" name="photo_2" >
                            </div>
                            <div></div>
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
