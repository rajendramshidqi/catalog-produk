@extends('layouts.admin')
@section('content')
 <div class="card-body">
                   <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($merek as $data)

                        <tr>
                        <td scope="row">{{$no++}}</td>
                        <td scope="row">{{$data->nama_merek}}</td>
                        <th>
                        <form action="{{route('merek.destroy',$data->id)}}" method="POST">
                            @csrf                        
                            @method('DELETE')
                    <a href="{{route('merek.edit', $data->id)}}" class="btn btn-success">edit</a>
                    <a href="{{route('merek.show', $data->id)}}" class="btn btn-warning">show</a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin')">DELETE</button>
                    </form>
                        </th>
                        </tr>   
                        @endforeach
                    </tbody>
                    
                   </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                </div>
@endsection