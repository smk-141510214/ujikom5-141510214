<?php $__env->startSection('content'); ?>
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Tunjangan</h2>   
            <h5>Welcome, Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="<?php echo e(url('/Tunjangan/create')); ?>" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Tunjangan</b></center></td>
                                <td><center><b>Nama Jabatan</b></center></td>
                                <td><center><b>Nama Golongan</b></center></td>
                                <td><center><b>Status</b></center></td>
                                <td><center><b>Jumlah Anak</b></center></td>
                                <td><center><b>Besaran Uang</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                             ?>
                            <?php $__currentLoopData = $tunjangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><center><?php echo e($i++); ?></center></td>
                                    <td><center><?php echo e($baru->kode_tunjangan); ?></center></td>
                                    <td><center><?php echo e($baru->jabatan->nama_jabatan); ?></center></td>
                                    <td><center><?php echo e($baru->golongan->nama_golongan); ?></center></td>
                                    <td><center>
                                        <?php
                                        if ( $baru->status == "2" )
                                        {             
                                            echo "Menikah";
                                        }      
                                        elseif ( $baru->status =="3")
                                        {
                                            echo "Belum Menikah";         
                                        } 
                                        ?>
                                    </center></td>
                                    <td><center><?php echo e($baru->jumlah_anak); ?> Orang Anak</center></td>
                                    <td><center>
                                        <center>
                                            <?php echo 'Rp. '.number_format( $baru->besaran_uang, 2,",","." ); ?>
                                        </center>
                                    </center></td>
                                    <td><center><a href="<?php echo e(route('Tunjangan.edit',$baru->id)); ?>" class="btn btn-success">Edit Data</a></center></td>
                                    <td><center>
                                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['Tunjangan.destroy', $baru->id]]); ?>

                                    <?php echo Form::submit('Delete Data', ['class' => 'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                    </center></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>