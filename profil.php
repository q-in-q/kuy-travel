<?php include("header.php"); ?>

<br><br><br>
    <div class="container emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/61u5UW7uyjL._SL1016_.jpg" alt=""/>
                                <div class="btn btn-lg btn-primary">
                                    Change Photo
                                    <input type="file" name="file"/>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="edit">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Edit Profil
                                </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="profile-head">
                                        <h5>Eka Novitasari</h5>
                                        <h6>Informatika'17</h6>
                                        <br>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="home-tab" data-toggle="tab" role="#" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Eka Novitasari</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p >eka.novitasari@students.amikom.ac.id</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Gender</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Wanita</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of Birth</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Jakarta, 17 Juni 1999</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>0895 35920 2696</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Status</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Mahasiswa</p>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Gendingsari, Tirtomartani, Kalasan<br> Sleman, DI Yogyakarta</p>
                                    </div>
                                </div>
                                

                </form>
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control"  placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-groupr">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </div>
                <div class="form-group" action="/action_page.php">
                    <label>Date of Birth</label><br>
                    <input type="date" class="form-control" name="bday">
                </div>
                <div class=”form-group”>
                        <label for=”telpon”>Phone</label>
                        <input type="text" class="form-control"  placeholder="Enter Phone" onkeypress="return hanyaAngka(event)" />
                </div>
                <div class=”form-group”>
                    <label for=”status”>Status</label>
                    <select name='Status' class="form-control">
                        <option value='Pekerja'>Pekerja</option>
                        <option value='Pelajar'>Pelajar</option>
                        <option value='Freeland'>Freeland</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Address</label>
                    <textarea type="text" class="form-control" id="alamat"  placeholder="Enter Address"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleprofil.css">
    <script src="js/profil.js"></script>
<br><br><br>    

</div>
</div>
<?php include("footer.php"); ?>