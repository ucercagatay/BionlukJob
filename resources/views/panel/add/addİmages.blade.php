@extends("panel.layouts.app")
@section("content")
    <div class="container lst">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif



        <form method="post" action="{{route('admin.add.postImage')}}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="" >Proje Türü</label>
                <select  name="product_id" required>
                    <option disabled selected>Eklenecek projeyi seçiniz</option>
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group hdtuto control-group lst increment" >
                <input type="file" name="image[]" class="myfrm form-control">
                <div class="input-group-btn">
                    <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <div class="clone hide">
                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                    <input type="file" name="image[]" class="myfrm form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>

        </form>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        setTimeout(()=>{
            $("#form-elements").addClass("show")
        },1000)
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function(){
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click",".btn-danger",function(){
                $(this).parents(".hdtuto").remove();
            });
        });
    </script>
@endsection
