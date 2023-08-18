                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="row">
                        <div class="col-lg-8">
                            
                            <?= form_open_multipart('user/edit3'); ?>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];?>"hidden>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'];?>" >
                                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail"hidden>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>


                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

