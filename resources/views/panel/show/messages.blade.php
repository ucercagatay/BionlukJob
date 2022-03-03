@extends("panel.layouts.app")
@section("content")
    <div class="pdf container">


        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card p-5">
                    <div class="page-header">
                        <h2 class="pageheader-title">İçecek Listesi</h2>
                    </div>
                    <table class="display nowrap dataTable cell-border" style="width:100%">
                        <thead>
                        <tr>
                            <th>Adı Soyadı</th>
                            <th>Email Adresi</th>
                            <th>Telefon Numarası</th>
                            <th>Stok Durumu</th>
                            <th>MESAJ</th>
                            <th>Güncelle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><p></p></td>
                            <td><p></p></td>
                            <td>    </td>
                            <td></td>
                            <td><img src="" alt=""></td>
                            <td><a href="" class="btn btn-info">Güncelle</a></td>
                            <td><a href="" class="btn btn-danger">Sil</a></td>
                        </tr>
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
