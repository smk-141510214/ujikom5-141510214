<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                <?php echo Form::open(['url'=>'Golongan']); ?>

                    <!--<div class="form-group">
                        <?php echo Form::label('Kode Golongan','Kode Golongan'); ?>

                        <?php echo Form::text('kode_golongan',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Nama Golongan','Nama Golongan'); ?>

                        <?php echo Form::text('nama_golongan',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Besaran Uang','Besaran Uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control','required']); ?>

                    </div>-->
                    
                    <div class="form-group<?php echo e($errors->has('kode_golongan') ? ' has-error' : ''); ?>">
                        <label for="kode_golongan" class="col-md-4 control-label">Kode golongan</label>
                        <div class="col-md-6">
                            <input id="kode_golongan" type="kode_golongan" class="form-control" name="kode_golongan" value="<?php echo e(old('kode_golongan')); ?>" required autofocus>

                            <?php if($errors->has('kode_golongan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('kode_golongan')); ?></strong>
                                </span>
                             <?php endif; ?>
                        </div>
                    </div>
                    <br>
                    <div class="form-group<?php echo e($errors->has('nama_golongan') ? ' has-error' : ''); ?>">
                        <label for="nama_golongan" class="col-md-4 control-label">Nama golongan</label>
                        <div class="col-md-6">
                            <input id="nama_golongan" type="nama_golongan" class="form-control" name="nama_golongan" value="<?php echo e(old('nama_golongan')); ?>" required autofocus>

                            <?php if($errors->has('nama_golongan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('nama_golongan')); ?></strong>
                                </span>
                             <?php endif; ?>
                        </div>
                    </div>
                    <br>
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
                    <br><br>
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