<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading"><center><h2><b>Lembur Pegawai</b></h2></center></div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/LemburPegawai/create')); ?>" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Lembur</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Jumlah Jam</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                             ?>
                            <?php $__currentLoopData = $lembur_pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($baru->kategori_lembur->kode_lembur); ?></td>
                                    <td><?php echo e($baru->pegawai->User->name); ?></td>
                                    <td><?php echo e($baru->jumlah_jam); ?></td>
                                    <td><a href="<?php echo e(route('LemburPegawai.edit',$baru->id)); ?>" class="btn btn-success">Edit Data</a></td>
                                    <td>
                                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['LemburPegawai.destroy', $baru->id]]); ?>

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