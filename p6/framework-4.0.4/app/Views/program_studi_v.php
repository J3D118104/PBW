<section>
    <div class="container">
        <h2>Program Studi</h2>
        
        <?php 
        if (!empty($session)) {
            ?>

        <div class="alert alert-<?php echo $session['status'] ? 'success' : 'danger';?> alert-dismissible fade show" role="alert">
            <?php echo $session['message'];?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
        } ?>
        <p>
        <a href="<?php echo site_url('Program_Studi/add');?>" class="btn btn-primary btn-md">
        <i class="fa fa-plus"></i>Tambah
        </a>
        </p>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>aksi</th>
                    <th>kode</th>
                    <th>Program Studi</th>
                    <th>Ketua</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataProdi as $row) : ?>    
                    <tr>
                        <th>
                            <a href="<?php echo site_url('Program_Studi/edit/'.$row->kode_prodi);?>" class="btn btn-warning btn-md">
                            <i class="fa fa-pencil"></i>
                            Ubah</a>
                            <a href="<?php echo site_url('Program_Studi/delete/'.$row->kode_prodi);?>" class="btn btn-danger btn-md" onclick="return confirm('apakah yakin data akan dihapus?');">
                            <i class="fa fa-trash"></i>
                            Hapus</a>
                        </th>
                        <td><?php echo $row->kode_prodi;?></td>
                        
                        <td><?php echo $row->nama_prodi;?></td>
                        <td><?php echo $row->ketua_prodi;?></td>
                    </tr>
                <?php 
                endforeach ; 
                
                if (empty($dataProdi)) {
                
                ?>
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data</td>
                </tr>
                
                <?php } ?>

            </tbody>
        </table>
    </div>
</section>


