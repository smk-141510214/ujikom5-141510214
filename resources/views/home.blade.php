@extends('layouts.apps')

@section('content')
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2><center>SELAMAT DATANG</center></h2>   
            <!--<h5>Welcome, Love to see you back. </h5>-->
                <hr />
                <div class="panel-body">
                @foreach ($user as $baru)
                    <h1><center>{{ $baru->name }}</center></h1>
                    <h3><center>
                        <?php
                        if ( Auth::user()->permission == "Admin" )
                        {       
                            echo "Anda Masuk Sebagai Admin";
                        }      

                        elseif ( Auth::user()->permission == "Pegawai" )
                        {       
                                            
                            echo "Anda Masuk Sebagai Pegawai";
                        }

                        ?>
                    </center></h3>
                @endforeach
                </div>
            </div>
</div>
</div>
@endsection