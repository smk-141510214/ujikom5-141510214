<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    <?php echo Form::open(['url'=>'TunjanganPegawai']); ?>


                    <div class="form-group">
                        <label for="kode_tunjangan_id" class="col-md-4 control-label">Kode Tunjangan</label>
                        <div class="col-md-6">
                           <select name="kode_tunjangan_id" class="form-control">
                            <option value="">Pilih Kode Tunjangan</option>
                                <?php $__currentLoopData = $tunjangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->kode_tunjangan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pegawai_id" class="col-md-4 control-label">Nama Pegawai</label>
                        <div class="col-md-6">
                           <select name="pegawai_id" class="form-control">
                            <option value="">Pilih Nama Pegawai</option>
                                <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->User->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>