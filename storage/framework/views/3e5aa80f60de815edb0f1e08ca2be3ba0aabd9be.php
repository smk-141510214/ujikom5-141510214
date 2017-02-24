<?php $__env->startSection('content'); ?>
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Pegawai</h2>   
            <h5>Welcome Jhon Deo , Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="<?php echo e(url('/Pegawai/create')); ?>" class="btn btn-primary">Tambah</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>NIP</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Nama Jabatan</b></center></td>
                                <td><center><b>Nama Golongan</b></center></td>
                                <td><center><b>Foto</b></center></td>
                                <td colspan="3"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                             ?>
                            <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><center><?php echo e($i++); ?></center></td>
                                    <td><center><?php echo e($baru->nip); ?></center></td>
                                    <td><center><?php echo e($baru->User->name); ?></center></td>
                                    <td><center><?php echo e($baru->jabatan->nama_jabatan); ?></center></td>
                                    <td><center><?php echo e($baru->golongan->nama_golongan); ?></center></td>
                                    <td>
                                        <center>
                                            <img src="<?php echo e(asset('img/'.$baru->photo.'')); ?>" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?php echo e(route('Pegawai.show',$baru->id)); ?>" class="btn btn-warning">Read</a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?php echo e(route('Pegawai.edit',$baru->id)); ?>" class="btn btn-success">Edit</a></td>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <?php echo Form::open(['method' => 'DELETE', 'route'=>['Pegawai.destroy', $baru->id]]); ?>

                                            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                                            <?php echo Form::close(); ?>

                                        </center>
                                    </td>
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