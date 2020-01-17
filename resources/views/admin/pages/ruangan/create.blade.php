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
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" placeholder="nama" required>
                            </div>

                            <label class="col-sm-2 col-form-label">Perkara</label>
                            <div class="col-sm-4">
                                <textarea name="perkara" class="form-control" rows="2" cols="53"  placeholder="perkara" required="required"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                            <div class="form-group col-sm-2">
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat lahir">
                            </div>
                            <div class="form-group col-sm-2">
                                <input type="text" class="form-control" id="datepicker" name="tanggal_lahir" placeholder="yyyy-mm-dd" readonly>
                            </div>
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-4">
                                <select class="form-control single-select" name="status" required>
                                    <option value="">Pilih</option>
                                    <option value="Tahanan Kepolisian">Tahanan Kepolisian</option>
                                    <option value="Tahanan Kejaksaan">Tahanan Kejaksaan</option>
                                    <option value="Tahanan Pengadilan">Tahanan Pengadilan</option>
                                    <option value="Narapidana">Narapidana</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-4">
                                <textarea name="alamat" class="form-control" rows="2" cols="53" placeholder="alamat" required="required"></textarea>
                            </div>
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
