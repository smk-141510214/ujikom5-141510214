@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div class="panel-heading">Lihat Data</div>
                <div class="panel-body">
                    <center><img src="{{asset('img/'.$pegawais->photo.'')}}" width="250" height="250" class="img-circle img-responsive" alt="Responsive image"></center><br>
                    <label>NIP</label>
                    <input type="text" name="nip" placeholder="{{$pegawais->nip}}" class="form-control" disabled><br>
                    <label>Nama</label>
                    <input type="text" name="name" placeholder="{{$pegawais->User->name}}" class="form-control" disabled><br>
                    <label>Jabatan</label>
                    <input type="text" name="jabatan_id" placeholder="{{$pegawais->Jabatan->nama_jabatan}}" class="form-control" disabled><br>
                    <label>Golongan</label>
                    <input type="text" name="golongan_id" placeholder="{{$pegawais->Golongan->nama_golongan}}" class="form-control" disabled><br>
                    <label>Permission</label>
                    <input type="text" name="permission" placeholder="{{$pegawais->User->permission}}" class="form-control" disabled><br>

                    <a href="{{url('/Pegawai')}}" class="btn btn-warning btn-block">Kembali</a><br>
                </div>
            </div>
</div>
@endsection
