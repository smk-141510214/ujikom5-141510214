<?php $__env->startSection('content'); ?>
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Lembur Pegawai</h2>   
            <h5>Welcome Jhon Deo , Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="<?php echo e(url('/LemburPegawai/create')); ?>" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Lembur</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Jabatan</b></center></td>
                                <td><center><b>Golongan</b></center></td>
                                <td><center><b>Jumlah Jam Lembur</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                             ?>
                            <?php $__currentLoopData = $lembur_pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><center><?php echo e($i++); ?></center></td>
                                    <td><center><?php echo e($baru->kategori_lembur->kode_lembur); ?></center></td>
                                    <td><center><?php echo e($baru->pegawai->User->name); ?></center></td>
                                    <td><center><?php echo e($baru->pegawai->jabatan->nama_jabatan); ?></center></td>
                                    <td><center><?php echo e($baru->pegawai->golongan->nama_golongan); ?></center></td>
                                    <td><center><?php echo e($baru->jumlah_jam); ?> Jam</center></td>
                                    <td><center><a href="<?php echo e(route('LemburPegawai.edit',$baru->id)); ?>" class="btn btn-success">Edit Data</a></center></td>
                                    <td><center>
                                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['LemburPegawai.destroy', $baru->id]]); ?>

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