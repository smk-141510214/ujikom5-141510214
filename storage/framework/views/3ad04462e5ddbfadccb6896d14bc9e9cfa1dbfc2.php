<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                    <li><a href="<?php echo e(url('/Jabatan')); ?>">jabatan</a></li>
                    <li><a href="<?php echo e(url('/Pegawai')); ?>">pegawai</a></li>
                    <li><a href="<?php echo e(url('/Golongan')); ?>">golongan</a></li>
                    <li><a href="<?php echo e(url('/KategoriLembur')); ?>">kategori</a></li>
                    <li><a href="<?php echo e(url('/LemburPegawai')); ?>">lembur</a></li>
                    <li><a href="<?php echo e(url('/Tunjangan')); ?>">tunjangan</a></li>
                    <li><a href="<?php echo e(url('/TunjanganPegawai')); ?>">tunnjangan pegawai</a></li>
                    <li><a href="<?php echo e(url('/Penggajian')); ?>">penggajian</a></li> 
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>