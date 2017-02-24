<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    <?php echo Form::open(['url'=>'LemburPegawai']); ?>


                    <div class="form-group<?php echo e($errors->has('kode_lembur_id') ? ' has-error' : ''); ?>">
                        <label for="kode_lembur_id" class="col-md-4 control-label">Jabatan</label>
                            <div class="col-md-6">
                                <select name="kode_lembur_id" class="form-control">
                                        <?php $__currentLoopData = $kategori_lemburs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->kode_lembur); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                    </div><br>


                    <div class="form-group<?php echo e($errors->has('pegawai_id') ? ' has-error' : ''); ?>">
                        <label for="pegawai_id" class="col-md-4 control-label">Nama Pegawai</label>
                            <div class="col-md-6">
                                <select name="pegawai_id" class="form-control">
                                        <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->User->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                    </div><br>

                    

                    <div class="form-group<?php echo e($errors->has('jumlah_jam') ? ' has-error' : ''); ?>">
                        <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>
                        <div class="col-md-6">
                            <input id="jumlah_jam" type="jumlah_jam" class="form-control" name="jumlah_jam" placeholder="PLease Enter Keyword" value="<?php echo e(old('jumlah_jam')); ?>" required autofocus>

                            <?php if($errors->has('jumlah_jam')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('jumlah_jam')); ?></strong>
                                </span>
                             <?php endif; ?>
                        </div>
                    </div>
                    <br><br>
                    
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>