@extends('layouts.apps')

@section('content')
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Kategori Lembur</h2>   
            <h5>Welcome Jhon Deo , Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="{{url('/KategoriLembur/create')}}" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Lembur</b></center></td>
                                <td><center><b>Nama Jabatan</b></center></td>
                                <td><center><b>Nama Golongan</b></center></td>
                                <td><center><b>Besaran Uang</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($kategori_lemburs as $baru)
                                <tr>
                                    <td><center>{{$i++}}</center></td>
                                    <td><center>{{ $baru->kode_lembur }}</center></td>
                                    <td><center>{{ $baru->jabatan->nama_jabatan }}</center></td>
                                    <td><center>{{ $baru->golongan->nama_golongan }}</center></td>
                                    <td><center>
                                        <center>
                                            <?php echo 'Rp. '.number_format( $baru->besaran_uang, 2,",","." ); ?>
                                        </center>
                                    </center></td>
                                    <td><center><a href="{{route('KategoriLembur.edit',$baru->id)}}" class="btn btn-success">Edit Data</a></center></td>
                                    <td><center>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['KategoriLembur.destroy', $baru->id]]) !!}
                                    {!! Form::submit('Delete Data', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    </center></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
