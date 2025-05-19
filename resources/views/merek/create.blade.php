@extends('layouts.admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">PENDAFTARAN</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               <form action="{{route('merek.store')}}" method="POST">
                        @csrf
                    <div class=mb-2>
                        <label for="">Nama</label>
                        <input type="text" name="nama_merek" id="" class="form-control" required>
                         <button  class="btn-secondary" type="submit">simpan</button>
                    </div>
            </div>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection