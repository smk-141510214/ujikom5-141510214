<?php $__env->startSection('content'); ?>
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2><center>SELAMAT DATANG</center></h2>   
            <!--<h5>Welcome, Love to see you back. </h5>-->
                <hr />
                <div class="panel-body">
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <h1><center><?php echo e($baru->name); ?></center></h1>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </div>
            </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>