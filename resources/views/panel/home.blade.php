@extends("panel.layouts.app")
@section("content")
    <style>
        .card{
            border-top-right-radius: 10px !important;
            border-top-left-radius: 10px !important;
            box-shadow: 0px 0px 15px -6px black;
        }
        .card .card-header{
            background-color: #0f161e;
            border-top-right-radius: 10px !important;
            border-top-left-radius: 10px !important;
        }
        .card .card-header .card-title{
            color: white;
            margin: 0;
        }
        .card-body .cardA {
            display: flex;
            position: relative;
            text-align: center;
            background-color: #0f161e;
            border-radius: 10px;
            width: calc(88% / 3);
            margin: 0 2%;
            flex-direction: column;
            align-items: center;
        }
        .card-body .cardA .iconA {
            color: white;
            margin-left: 10%;
        }
        .card-body .cardA .contentA {
            width: 100%;
            display: flex;
            color: white;
            align-items: center;
            color: white;
            margin-bottom: 2vw;
        }
        .card-body .cardA .contentA h2{
            font-size: 30px;
        }
        .card-body .cardA .contentA .numberA{
            margin-left: 28%;
        }
        .card-body .cardA .card-nameA {
            margin-top: 0.5vw;
            color: white;
            font-size: 15px;
        }
        .card-body .cardA .more-menuA {
            color: white;
            font-size: 0.85vw;
            display: flex;
            justify-content: center;
            background-color: #c6a556;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
            left: 0;
        }
        .card-body .cardA .more-menuA a{
            color: white;
            text-decoration: none;
            font-size: 13px;
        }
        .card-red{
            margin-top: 10px;
        }
        .card-red .card-header{
            background-color: #c6a556;
            border-radius: 0px !important;
        }
        .tables{
            display: flex;
        }
        @media only screen and (max-width: 800px) {
            .card-body .cardA{
                width: calc(92% / 2);
            }
        }
        @media only screen and (max-width: 500px) {
            .card-body .cardA{
                width: 96%;
            }
        }
    </style>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Veriler</h3>
            </div>
            <div class="card-body p-5" style="display: flex;flex-wrap: wrap;row-gap: 25px; ">
                <div class="cardA">
                    <div class="card-nameA">Tatlı Sayısı</div>
                    <div class="contentA">
                        <div class="iconA">
                            <i class="fad fa-pie fa-2x"></i>
                        </div>
                        <div class="numberA">
                            <h2></h2>
                        </div>
                    </div>
                    <div class="more-menuA">
                        <a href=""> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="cardA">
                    <div class="card-nameA">İçecek Sayısı </div>
                    <div class="contentA">
                        <div class="iconA">
                            <i class="fas fa-mug fa-2x"></i>
                        </div>
                        <div class="numberA">
                            <h2></h2>
                        </div>
                    </div>
                    <div class="more-menuA">
                        <a href=""> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="cardA">
                    <div class="card-nameA">Kahvaltılık Sayısı</div>
                    <div class="contentA">
                        <div class="iconA">
                            <i class="fas fa-egg-fried fa-2x"></i>
                        </div>
                        <div class="numberA">
                                <h2></h2>
                        </div>
                    </div>
                    <div class="more-menuA">
                        <a href=""> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="cardA">
                    <div class="card-nameA">Ana Yemek Sayısı </div>
                    <div class="contentA">
                        <div class="iconA">
                            <i class="fas fa-cheeseburger fa-2x"></i>
                        </div>
                        <div class="numberA">
                                <h2></h2>
                        </div>
                    </div>
                    <div class="more-menuA">
                        <a href=""> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="cardA">
                    <div class="card-nameA">Stokta Olmayan Ürün Sayısı </div>
                    <div class="contentA">
                        <div class="iconA">
                            <i class="fas fa-empty-set fa-2x"></i>
                        </div>
                        <div class="numberA">
                            <h2></h2>
                        </div>
                        <div class="more-menuA">
                            <a href=""> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="cardA">
                    <div class="card-nameA">Okunmamış Mesaj Sayısı </div>
                    <div class="contentA">
                        <div class="iconA">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <div class="numberA">
                            <h2></h2>
                        </div>
                    </div>
                    <div class="more-menuA">
                        <a href=""> Detaylara Git <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="tables">--}}
{{--        <div class="col-12">--}}
{{--            <div class="card card-red">--}}
{{--                <div class="card-header border-0">--}}
{{--                    <h3 class="card-title">En Çok Görüntülenen Laboratuvarlar</h3>--}}
{{--                </div>--}}
{{--                <div class="card-body table-responsive p-0" style="">--}}
{{--                    <table class="table table-striped table-valign-middle">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>#</th>--}}
{{--                            <th>Sorumlusu</th>--}}
{{--                            <th>Laboratuvar Adı</th>--}}
{{--                            <th>Bulunan Cihaz Sayısı</th>--}}
{{--                            <th>Yapılan Test Sayısı</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @if(   isset(\Illuminate\Support\Facades\Auth::user()->getLaboratory) )--}}
{{--                            @foreach(\Illuminate\Support\Facades\Auth::user()->getLaboratory as $key=>$lab)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$key}}</td>--}}
{{--                                    <td>{{$course->tracking_code}}</td>--}}
{{--                                    <td>{{$course->course_name}}</td>--}}
{{--                                    <td>{{$course->getUserCourses->count()}}</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
@endsection

@section('hover-control')
    <script>
        $(document).ready(function () {
            $('.nav-item').removeClass('active');
            $('.nav-item .collapse').removeClass('show');
            $('.dashboard').addClass('active');
        });
    </script>
@endsection
