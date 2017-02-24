<?php $__env->startSection('content'); ?>
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Data Gaji Pegawai</h2>   
            <h5>Welcome, Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="<?php echo e(url('/Pegawai/create')); ?>" class="btn btn-primary">Tambah Pegawai</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <td><center><b>No</b></center></td>
                                <td><center><b>NIP</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Jabatan</b></center></td>
                                <td><center><b>Golongan</b></center></td>
                                <td><center><b>Jumlah Jam Lembur</b></center></td>
                                <td><center><b>Gaji Pokok</b></center></td>
                                <td><center><b>Foto</b></center></td>
                                <td colspan="1"><center><b>Action</b></center></td>
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
                                    <td><center><?php echo e($baru->a); ?></center></td>
                                    <td><center><?php echo e($baru->jabatan->besaran_uang + $baru->golongan->besaran_uang); ?></center></td>
                                    <td>
                                        <center>
                                            <img src="<?php echo e(asset('img/'.$baru->photo.'')); ?>" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?php echo e(route('Pegawai.show',$baru->id)); ?>" class="btn btn-warning">Detail</a>
                                        </center>
                                    </td>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>