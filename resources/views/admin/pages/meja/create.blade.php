@extends('admin.layouts.app_main')

@section('additional_style')
{{--    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker( {
                dateFormat: 'yy-mm-dd'
            });
        } );
    </script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h4 class="card-header">Tambah WBP</h4>
                <div class="card-body">
                    <form action="{{ route('wbp.create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Kode Meja</label>
                            <input class="form-control" placeholder="kode meja">
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm float-right"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
