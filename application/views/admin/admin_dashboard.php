<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

 <div class="content-wrapper">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Datang <?php echo $user['name']?> 🎉</h5>
                          <p class="mb-4">
                            Ayo Cek Pengaajaun SIP Terbaru Hari Ini
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="<?php echo base_url()?>template/assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <a href="" class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="template/assets/img/icons/unicons/user1.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Pengajuan Baru</span>
                            <?php 
                            $role = 2;
                            $this->db->like('role_id', $role);
                            $this->db->from('user');
                            ?>
                          <h3 class="card-title mb-2"><?php echo $this->db->count_all_results();?></h3>
                          <small class="text-secondary fw-semibold"> Nakes Telah Bergabung </small>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <a href="" class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="template/assets/img/icons/unicons/cc-warning.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Perpanjangan Baru </span>
                            <?php 
                            $this->db->like('role_id');
                            $this->db->from('user');
                            ?>
                          <h3 class="card-title text-nowrap mb-1"><?php echo $this->db->count_all_results();?></h3>
                          <small class="text-secondary fw-semibold"><i class=""></i> SIP Telah Terdaftar </small>
                        </div>
                      </a>
                    </div>
                 
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <a href="" class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="template/assets/img/icons/unicons/cc-primary.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Pencabutan</span>
                          <h3 class="card-title mb-2">0</h3>
                          <small class="text-secondary fw-semibold"> SIPA </small>
                        </div>
                      </a>
                    </div>

                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <a href="" class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="template/assets/img/icons/unicons/cc-success.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">SIP Kedaluarsa </span>
                          <h3 class="card-title text-nowrap mb-1">0</h3>
                          <small class="text-secondary fw-semibold"><i class=""></i> SIP </small>
                        </div>
                      </a>
                    </div>

              </div>

              <div class="row">
                <div class="col-12 col-lg-12 col-md-12 order-1 ">
                <div class="card">
                <h5 class="card-header">Tutorial</h5>
                <div class="card-body mb-5">
                  <div class="row">
                    <!-- Custom content with heading -->
                    <div class="col-lg-12 mb-5 mb-xl-0">
                      <small class="text-light fw-semibold">Cari Tahu Caranya Yuk !!</small>
                      
                    </div>
                   
                    <!--/ Custom content with heading -->
                  </div>
                </div>
                </div>
                </div>
              </div>




  </div>
  </div>
</div>
    