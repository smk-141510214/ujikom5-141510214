<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    <?php echo Form::open(['url'=>'KategoriLembur']); ?>


                    <!--<div class="form-group">
                        <?php echo Form::label('Kode Lembur','Kode Lembur'); ?>

                        <?php echo Form::text('kode_lembur',null,['class'=>'form-control','required']); ?>

                    </div>-->

                    <div class="form-group<?php echo e($errors->has('kode_lembur') ? ' has-error' : ''); ?>">
                        <label for="kode_lembur" class="col-md-4 control-label">Kode Lembur</label>
                        <div class="col-md-6">
                            <input id="kode_lembur" type="text" class="form-control" name="kode_lembur" placeholder="PLease Enter Keyword" value="<?php echo e(old('kode_lembur')); ?>" required autofocus>

                            <?php if($errors->has('kode_lembur')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kode_lembur')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div><br>

                    <!--<label>Nama Jabatan</label>
                    <select name="jabatan_id" class="form-control" required>
                        <option value="">Pilih Nama Jabatan</option>
                        <?php $__currentLoopData = $jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->nama_jabatan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>-->

                    <div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                        <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                                <select name="jabatan_id" class="form-control" required>
                                <option value="">-</option>
                                    <?php $__currentLoopData = $jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->nama_jabatan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                    </div><br>

                    <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                        <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
                        <div class="col-md-6">
                            <select name="golongan_id" class="form-control" required>
                                <option value="">-</option>
                                <?php $__currentLoopData = $golongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->nama_golongan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select><br>
                        </div>
                    </div><br>
                    
                    <div class="form-group<?php echo e($errors->has('besaran_uang') ? ' has-error' : ''); ?>">
                        <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                        <div class="col-md-6">
                            <input id="besaran_uang" type="besaran_uang" class="form-control" name="besaran_uang" placeholder="PLease Enter Keyword" value="<?php echo e(old('besaran_uang')); ?>" required>

                            <?php if($errors->has('besaran_uang')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div><br>

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