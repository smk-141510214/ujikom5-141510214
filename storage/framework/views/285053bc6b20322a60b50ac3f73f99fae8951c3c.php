<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Data Tunjangan </center></b></h2></div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Tunjangan/create')); ?>" class="btn btn-primary btn-block">Create Data Tunjangan</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
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
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($baru->kode_tunjangan); ?></td>
                                    <td><?php echo e($baru->jabatan->nama_jabatan); ?></td>
                                    <td><?php echo e($baru->golongan->nama_golongan); ?></td>
                                    <td><?php echo e($baru->status); ?></td>
                                    <td><?php echo e($baru->jumlah_anak); ?></td>
                                    <td><?php echo e($baru->besaran_uang); ?></td>
                                    <td><a href="<?php echo e(route('Tunjangan.edit',$baru->id)); ?>" class="btn btn-success">Edit Data</a></td>
                                    <td>
                                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['Tunjangan.destroy', $baru->id]]); ?>

                                    <?php echo Form::submit('Delete Data', ['class' => 'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>