          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Menu /</span> Data Menu</h4>
              <!-- <hr class="my-5" /> -->
              <!-- Striped Rows -->
              <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <h5 class="card-header">
                  <a href="<?php echo site_url('menu/add');?>" class="btn rounded-pill btn-primary">Tambah Menu</a>
                </h5>
                    <?php if($this->session->flashdata('success')) :?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <?= $this->session->flashdata('success'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    <?php endif; ?>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $i=1;foreach($menu as $item) {?>
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $item->namakat;?></td>
                        <td><?php echo $item->namaMenu;?></td>
                        <td><?php echo $item->harga;?></td>
                        <td><?php echo $item->deskripsi;?></td>
                        <td><img width="100" src="<?php echo base_url(); ?>uploads/<?php echo $item->gambar; ?>"/></td>
                        <td>
                          <a href="<?php echo site_url('menu/getid/'.$item->idMenu);?>" class="btn rounded-pill btn-warning">
                          Edit</a>   
                          <a href="<?php echo site_url('menu/delete/'.$item->idMenu);?>" class="btn rounded-pill btn-danger" 
                          onclick="return confirm('Yakin Akan Hapus Data Ini?')">Hapus</a>
                        </td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
              <!--/ Striped Rows -->
            </div>
            <!-- / Content -->
