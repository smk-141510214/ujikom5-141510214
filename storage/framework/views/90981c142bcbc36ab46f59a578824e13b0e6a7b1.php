<?php $__env->startSection('content'); ?>
<div id="page-inner"> 
    <div class="row">
        <div class="col-md-12">
            <h2>Data Gaji Pegawai</h2>   
            <h5>Welcome, Love to see you back. </h5>
                <hr />
                <div class="panel-body">
                    <a href="<?php echo e(url('/gajian/create')); ?>" class="btn btn-primary">Tambah Penggajian</a>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr class="bg-info">
                          <th><center>No.</center></th>
                          <th><center>Pegawai</center></th>
                          <th><center>Jumlah Jam Lembur</center></th>
                          <th><center>Jumlah Uang Lembur</center></th>
                          <th><center>Gaji Pokok</center></th>
                          <th><center>Total Gaji</center></th>
                          <th><center>Tanggal Pengambilan</center></th>
                          <th><center>Status Pengambilan</center></th>
                          <th><center>Petugas Penerima</center></th>
                          <th colspan="1"><center>Tindakan</center></th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php 
                            $no=1;
                             ?>
                            <?php $__currentLoopData = $gaji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><center><?php echo e($no++); ?></center></td>
                                    <td><center><?php echo e($data->tunjangan_pegawai->pegawai->user->name); ?></center></td>
                                    <td><center><?php echo e($data->jumlah_jam_lembur); ?> Jam</center></td>
                                    <td><center><?php echo 'Rp. '.number_format( $data->jumlah_uang_lembur, 2,",","." ); ?></center></td>
                                    <td><center><?php echo 'Rp. '.number_format( $data->gaji_pokok, 2,",","." ); ?></center></td>
                                    <td><center><?php echo 'Rp. '.number_format( $data->total_gaji, 2,",","." ); ?></center></td>
                                    <td><center><?php echo e($data->updated_at); ?></center> </td>
                                    <td><center>
                                    <?php
                                        if ($data->status_pengambilan == '0') {
                                            echo "Belum Diambil";
                                        }

                                        elseif ($data->status_pengambilan == '1') {
                                            echo "Sudah Diambil";
                                        }
                                    ?></center></td>

                                    <td><center><?php echo "Keuangan"; ?></center> </td>
                                    <td><center>
                                        <center>
                                            <a href="<?php echo e(route('gajian.show',$data->id)); ?>" class="btn btn-warning">View Detail</a>
                                        </center>
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