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
                          <?php echo $this->session->flashdata('message');?>
                          <?php 
                            $id = $this->uri->segment(3);
                            $datavalidasi = $this->db->query("SELECT * FROM data_sip WHERE id =$id ");
                            $datasip = $datavalidasi->row_array();
                          ?>
                          <h5 class="card-title text-primary">Form Validasi SIP🎉</h5>
                          <p class="mb-4">
                            SIP : <?php echo $datasip['jenis_sip'];?>
                          </p>
                          <?php
                            $id_user = $datasip['id_user'];
                            $datapemohon = $this->db->query("SELECT * FROM user WHERE id = $id_user ");
                            $datauser= $datapemohon->row_array();
                          ?>
                          <p class="mb-4">
                            PEMOHON : <?php echo $datauser['name'];?>
                          </p>

                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="<?php echo base_url()?>template/assets/img/illustrations/ai1.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-6">
                      <div class="card-body">

                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Jenis SIP</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-note"></i
                            ></span>
                            <input type="text" id="basic-icon-default-company" class="form-control" name="no_str" value="&nbsp;&nbsp;<?php echo $datasip['jenis_sip']?>" placeholder=""
                              aria-describedby="basic-icon-default-company2" disabled />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Nomor Ijazah</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-barcode"></i
                            ></span>
                            <input type="text" id="copyIJZ" class="form-control" name="no_ijazah" value="&nbsp;&nbsp;<?php echo $datasip['no_ijazah']?>" placeholder=""
                              aria-describedby="basic-icon-default-company2" readonly />
                              <button class="btn btn-outline-primary" type="button" id="buttonIJZ"><i class="bx bx-paste"></i
                            ></button>
                            <a class="btn btn-outline-primary" href="" id="button-addon2">Cek IJZH</a>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Nomor STR</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-barcode"></i
                            ></span>
                            <input type="text" id="copySTR" class="form-control" name="no_str" value="&nbsp;&nbsp;<?php echo $datasip['no_str']?>" placeholder=""
                              aria-describedby="basic-icon-default-company2" readonly />
                            <button class="btn btn-outline-primary" type="button" id="buttonSTR"><i class="bx bx-paste"></i
                            ></button>
                            <a class="btn btn-outline-primary" href="Https://kki.go.id/cekdokter/form" target="_blank" rel="follow" type="button" >Cek STR</a>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email" >Masa Berlaku STR</label>
                          <div class="input-group">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-calendar"></i
                            ></span>
                            <input type="text" aria-label="First" name="masa_berlaku_str" value="<?php echo $datasip['masa_berlaku_str']?>" class="form-control" disabled/>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-address">Tempat Praktek</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-address" class="input-group-text">
                              <i class="bx bx-buildings"></i>
                            </span>
                            <input type="text" aria-label="Last name" class="form-control" name="tempat_praktek" value="&nbsp;&nbsp;<?php echo $datasip['tempat_praktek']?>" placeholder="Klinik" disabled />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-address">Alamat Praktek</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-address" class="input-group-text">
                              <i class="bx bxs-building-house" type="solid"></i>
                            </span>
                            <input type="text" name="alamat_praktek" class="form-control" placeholder="" value="&nbsp;&nbsp;<?php echo $datasip['alamat_praktek']?>" disabled />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-address">Jenis Praktek</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-address" class="input-group-text"
                              ><i class="bx bx-user-pin"></i
                            ></span>
                            <input type="text" name="jenis_praktek" class="form-control" placeholder="" value="&nbsp;&nbsp;<?php echo $datasip['jenis_praktek']?>" disabled />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-address">Hari Praktek</label>
                          <div class="input-group input-group-merge">
                             <span id="basic-icon-address" class="input-group-text"
                              ><i class="bx bx-calendar"></i
                            ></span>
                            <input type="text" name="jenis_praktek" class="form-control" placeholder="" value="&nbsp;&nbsp;<?php echo $datasip['hari_awal_praktek']?>" disabled />
                          </div>
                        </div>
                        <button
                          type="button"
                          class="btn btn-lg btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalApprove"
                        >
                       Terbitkan SIP
                        </button>
                        <button  onclick="goBack()" class="btn btn-lg btn-secondary" >Kembali</button>
                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>

                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script>
                            const buttonIJZ = document.getElementById('buttonIJZ')
                            const copyIJZ = document.getElementById('copyIJZ')
                            
                            buttonIJZ.onclick = () => {
                                copyIJZ.select();    // Selects the text inside the input
                                document.execCommand('copy');    // Simply copies the selected text to clipboard 
                                 Swal.fire({         //displays a pop up with sweetalert
                                    icon: 'success',
                                    title: 'No ijazah Berhasil Di Copy',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }

                            const buttonSTR = document.getElementById('buttonSTR')
                            const copySTR = document.getElementById('copySTR')
                            
                            buttonSTR.onclick = () => {
                                copySTR.select();    // Selects the text inside the input
                                document.execCommand('copy');    // Simply copies the selected text to clipboard 
                                 Swal.fire({         //displays a pop up with sweetalert
                                    icon: 'success',
                                    title: 'No STR Berhasil Di Copy',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }



                        </script>




                        <!-- Modal -->
                        <div class="modal fade" id="modalApprove" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content ">
                              <div class="modal-header">
                                <h5 class="modal-title " id="modalCenterTitle" >Konfirmasi Berkas</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body"> 
                                <div class="row">
                                  <div class="col mb-3 align-center">
                                    <div class="card-body text-center">
                                    <p class="card-text" ><font size="5">Anda yakin untuk approval ?</font></p>
                                    <p>Pastikan data sudah sesuai yaa...</p>
                                    <br>
                                    <br>
                                    <form method="POST" action="<?php echo base_url();?>kadin/aksi_terbitkan_sip/<?php echo $this->uri->segment(3);?>/<?php echo $datasip['id_user'];?>">
                                      <input type="hidden" value="1" name="status_validasi">
                                      <input type="hidden" value="diterbitkan" name="keterangan">
                                      <input type="hidden" value="valid" name="validasi_kadin">
                                      <input type="hidden" name="status_sip" value="3">
                                      <input type="text" class="form-control" name="nomor_sip" value="<?php echo $datasip['nomor_sip'] ?>">
                                      <br>
                                      <input type="text" class="form-control" name="catatan" value="<?php echo $datasip['catatan'] ?>">
                                      <input type="hidden" name="title_validasi" value='<div class="alert alert-success" role="alert"><b> Data Telah Di Approve </b></div>'>
                                      <BR>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                      Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Terbitkan SIP</button>
                                    </form>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Modal Revisi -->
                        <div class="modal fade" id="modalRevisi" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content ">
                              <div class="modal-header">
                                <h5 class="modal-title " id="modalCenterTitle" >Konfirmasi Revisi</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="<?php echo base_url();?>administrator/aksi_revisi_validasi_sip/<?php echo $this->uri->segment(3);?>/<?php echo $datasip['id_user'];?>">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Keterangan</label>
                                    <input type="hidden" value="2" name="status_validasi">
                                    <input type="hidden" name="status_sip" value="4">
                                    <input type="hidden" name="title_validasi" value='<div class="alert alert-info" role="alert"><b> Permohonan Revisi Selesai </b></div>'>
                                    <input
                                      type="text"
                                      id="nameWithTitle"
                                      class="form-control"
                                      placeholder="Maukan Keterangan Revisi"
                                      name="keterangan"
                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        


                        </div>
                      </div>

                      <div class="col-md-6 col-sm-12 ">
                      <div class="card-body" >
                        
                        <div class="accordion mt-3" id="accordionExample">
                            <div class="card accordion-item active">
                              <h2 class="accordion-header" id="headingOne">
                                <button
                                  type="button"
                                  class="accordion-button"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionOne"
                                  aria-expanded="true"
                                  aria-controls="accordionOne"
                                >
                                Pas Foto
                                </button>
                              </h2>

                              <div
                                id="accordionOne"
                                class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="accordion-body">
                                  <?php if(empty($datauser['pict'])){
                                    echo "data belum disi";
                                  }

                                  else{
                                    echo '<img src="'.base_url().'document/foto_user/'.$datauser['pict'].'.jpg" width="550" height="500">';
                                  }

                                  ?>
                                  
                                </div>
                              </div>
                            </div>
                            <div class="card accordion-item">

                              <h2 class="accordion-header" id="headingTwo">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionTwo"
                                  aria-expanded="false"
                                  aria-controls="accordionTwo"
                                >
                                 Foto KTP 
                                </button>
                              </h2>
                              <div
                                id="accordionTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="accordion-body">
                                  <?php if(empty($datasip['foto_ktp'])){
                                    echo "data belum disi";
                                  }

                                  else{
                                    echo '<embed src="'.base_url().'document/foto_ktp/'.$datasip['foto_ktp'].'.pdf" width="550" height="500"> </embed>';
                                  }

                                  ?>
                                </div>
                              </div>
                            </div>

                            <div class="card accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionThree"
                                  aria-expanded="false"
                                  aria-controls="accordionThree"
                                >
                                  STR
                                </button>
                              </h2>
                              <div
                                id="accordionThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="accordion-body">
                                  <?php if(empty($datasip['foto_str'])){
                                    echo "data belum disi";
                                  }

                                  else{
                                    echo '<embed src="'.base_url().'document/str/'.$datasip['foto_str'].'.pdf" width="550" height="500"> </embed>';
                                  }

                                  ?>
                                </div>
                              </div>
                            </div>

                            <div class="card accordion-item">
                              <h2 class="accordion-header" id="headingFour">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionFour"
                                  aria-expanded="false"
                                  aria-controls="accordionFour"
                                >
                                  Rekomendasi Organisai Profesi
                                </button>
                              </h2>
                              <div
                                id="accordionFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="accordion-body">
                                  <?php if(empty($datasip['rekomendasi_org_p'])){
                                    echo "data belum disi";
                                  }

                                  else{
                                    echo '<embed src="'.base_url().'document/rop/'.$datasip['rekomendasi_org_p'].'.pdf" width="550" height="500"> </embed>';
                                  }

                                  ?>
                                </div>
                              </div>
                            </div>

                            <div class="card accordion-item">
                              <h2 class="accordion-header" id="headingFive">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionFive"
                                  aria-expanded="false"
                                  aria-controls="accordionFive"
                                >
                                  Rekomendasi Tempat Praktek
                                </button>
                              </h2>
                              <div
                                id="accordionFive"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="accordion-body">
                                  <?php if(empty($datasip['rekomendasi_tmpt_p'])){
                                    echo "data belum disi";
                                  }

                                  else{
                                    echo '<embed src="'.base_url().'document/rtp/'.$datasip['rekomendasi_tmpt_p'].'.pdf" width="550" height="500"> </embed>';
                                  }

                                  ?>
                                </div>
                              </div>
                            </div>

                            <div class="card accordion-item">
                              <h2 class="accordion-header" id="headingSix">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionSix"
                                  aria-expanded="false"
                                  aria-controls="accordionSix"
                                >
                                  Ijazah
                                </button>
                              </h2>
                              <div
                                id="accordionSix"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="accordion-body">
                                  <?php if(empty($datasip['ijazah'])){
                                    echo "data belum disi";
                                  }

                                  else{
                                    echo '<embed src="'.base_url().'document/ijazah/'.$datasip['ijazah'].'.pdf" width="550" height="500"> </embed>';
                                  }

                                  ?>
                                </div>
                              </div>
                            </div>

                            <div class="card accordion-item">
                              <h2 class="accordion-header" id="headingSeven">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionSeven"
                                  aria-expanded="false"
                                  aria-controls="accordionSeven"
                                >
                                  Surat Sehat
                                </button>
                              </h2>
                              <div
                                id="accordionSeven"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="accordion-body">
                                  <?php if(empty($datasip['surat_sehat'])){
                                    echo "data belum disi";
                                  }

                                  else{
                                    echo '<embed src="'.base_url().'document/surat_sehat/'.$datasip['surat_sehat'].'.pdf" width="550" height="500"> </embed>';
                                  }

                                  ?>
                                </div>
                              </div>
                            </div>

                            <div class="card accordion-item">
                              <h2 class="accordion-header" id="headingEight">
                                <button
                                  type="button"
                                  class="accordion-button collapsed"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#accordionEight"
                                  aria-expanded="false"
                                  aria-controls="accordionEight"
                                >
                                  Surat Pernyataan
                                </button>
                              </h2>
                              <div
                                id="accordionEight"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample"
                              >
                                <div class="accordion-body">
                                  <?php if(empty($datasip['pernyataan'])){
                                    echo "data belum disi";
                                  }

                                  else{
                                    echo '<embed src="'.base_url().'document/surat_pernyataan/'.$datasip['pernyataan'].'.pdf" width="550" height="500"> </embed>';
                                  }

                                  ?>
                                </div>
                              </div>
                            </div>

                          </div>

                      
                      </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                      <div class="card-body">
                        
                      </div>
                      </div>

                    </div>



                  </div>
                </div>
              </div>





  </div>
  </div>
</div>
    