            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div id="detail" class="card card-success">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Tambah Materi</p>
                            <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                dibawah </p>
                            <hr>
                        </div>

                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="<?=base_url('guru/add_materi')?>">
                                <div id="" class="form-group">
                                   <label for="inputEmail4">Nama Guru</label>
                                    <input required type="text" readonly name="nama_guru" value="<?php
                                    $data['user'] = $this->db->get_where('guru', ['email' =>
                                        $this->session->userdata('email')])->row_array();
                                    echo $data['user']['nama_guru'];?>" class="form-control" id="inputEmail4">
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail4">Nama Mata Pelajaran</label>
                                    <input required type="text" readonly name="nama_mapel" value="<?php
                                    $data['user'] = $this->db->get_where('guru', ['email' =>
                                        $this->session->userdata('email')])->row_array();
                                    echo $data['user']['nama_mapel'];?>" class="form-control" id="inputEmail4">
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                            <div class="custom-file">
                                                <input required type="file" name="video" required class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Upload
                                                    Video
                                                    Materi Disini</label>
                                            </div>
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Deskripsi Materi</label>
                                        <textarea class="form-control" required name="deskripsi"
                                            id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                <div class="form-group">
                                   <label for="inputState">Kelas</label>
                                        <select required id="inputState" name="kelas" class="form-control">
                                            <option selected>Pilih disini</option>
                                            <option value="kelas 1">E-COMMERCE </option>
                                            <option value="kelas 2">PERANCANGAN WEB 2</option>
                                            <option value="kelas 3">PENGOLAHAN BASISDATA</option>

                                        </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">
                                        Tambah Materi ⭢
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
