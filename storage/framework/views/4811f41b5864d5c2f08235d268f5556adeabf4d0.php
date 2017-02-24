<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    <?php if($errors->any()): ?>
                        <div>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <li><span><?php echo e($err); ?></span></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php echo Form::open(['url'=>'Jabatan']); ?>

                    <!--<div class="form-group">
                        <?php echo Form::label('Kode Jabatan','Kode Jabatan'); ?>

                        <?php echo Form::text('kode_jabatan',null,['class'=>'form-control','required']); ?>

                    </div>-->

                    <div class="form-group<?php echo e($errors->has('kode_jabatan') ? ' has-error' : ''); ?>">
                        <label for="kode_jabatan" class="col-md-4 control-label">Kode Jabatan</label>
                        <div class="col-md-6">
                            <input id="kode_jabatan" type="kode_jabatan" class="form-control" name="kode_jabatan" value="<?php echo e(old('kode_jabatan')); ?>" required autofocus>

                            <?php if($errors->has('kode_jabatan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kode_jabatan')); ?></strong>
                                </span>
                             <?php endif; ?>
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <?php echo Form::label('Nama Jabatan','Nama Jabatan'); ?>

                        <?php echo Form::text('nama_jabatan',null,['class'=>'form-control','required']); ?>

                    </div>-->

                    <div class="form-group<?php echo e($errors->has('nama_jabatan') ? ' has-error' : ''); ?>">
                        <label for="nama_jabatan" class="col-md-4 control-label">Nama Jabatan</label>
                        <div class="col-md-6">
                            <input id="nama_jabatan" type="nama_jabatan" class="form-control" name="nama_jabatan" value="<?php echo e(old('nama_jabatan')); ?>" required autofocus>

                            <?php if($errors->has('nama_jabatan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('nama_jabatan')); ?></strong>
                                </span>
                             <?php endif; ?>
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <?php echo Form::label('Besaran Uang','Besaran Uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control','required']); ?>

                    </div>-->

                    <div class="form-group<?php echo e($errors->has('besaran_uang') ? ' has-error' : ''); ?>">
                        <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                        <div class="col-md-6">
                            <input id="besaran_uang" type="besaran_uang" class="form-control" name="besaran_uang" value="<?php echo e(old('besaran_uang')); ?>" required autofocus>

                            <?php if($errors->has('besaran_uang')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('besaran_uang')); ?></strong>
                                </span>
                             <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
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