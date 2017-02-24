@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">
               <div class="panel-heading">Rincian Gaji</div>
               <div class="panel-body">
               <div class="">
                   <div class="col-md-12">
                       
                       
                   </div>
                   <table>
                   <center>
                           <p><img width="120px" height="100px" src="{{asset('img/'.$gaji->tunjangan_pegawai->pegawai->photo.'')}}" class="img-circle" alt="Cinque Terre" ></p>
                       </center>
                       <h4>
                           <td>
                               NIP : <br><b> {{$gaji->tunjangan_pegawai->pegawai->nip}} </b>
                               <br><br>
                               Nama Pegawai : <br><b> {{$gaji->tunjangan_pegawai->pegawai->User->name}} </b>
                           </td>
                           <td>
                               <b>
                                   @if($gaji->tanggal_pengambilan == ""&&$gaji->status_pengambilan == "0")
                                       Belum Diambil

                                   @elseif($gaji->tanggal_pengambilan == ""||$gaji->status_pengambilan == "0")
                                       Belum Diambil

                                   @else
                                       Sudah Diambil / {{$gaji->tanggal_pengambilan}}
                                   @endif
                               </b>
                           </td>
                       </h4>
                   </table>

                   <table class="table table-striped table-hover ">
                       <div class="col-md-12">
                       <h4>
                           <td>
                               Gaji Lembur :  <?php echo 'Rp. '.number_format( $gaji->jumlah_uang_lembur, 2,",","." ); ?><br>
                               Gaji Pokok &nbsp;&nbsp; : <?php echo 'Rp. '.number_format( $gaji->gaji_pokok, 2,",","." ); ?><br>
                           </td>
                           <td>
                               Tunjangan : <?php echo 'Rp. '.number_format( $gaji->tunjangan_pegawai->tunjangan->besaran_uang, 2,",","." ); ?><br>
                               Total Gaji &nbsp;&nbsp;: <?php echo 'Rp. '.number_format( $gaji->total_gaji, 2,",","." ); ?>
                           <td>
                       </h4>
                       </div> 
                   </table>
                    <a class="btn btn-primary col-md-12" href="{{url('Penggajian')}}">Kembali</a>
               </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

