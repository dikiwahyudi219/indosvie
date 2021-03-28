<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Add Movie</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Manage Movie </a>
                                        </li>
                                        <li class="active">
                                            Add Movie
                                        </li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Movie </b></h4>
                                    <hr />
                                


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  

<!---Error Message--->


                       <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">

<form name="addpost" method="post" enctype="multipart/form-data">
    <div class="form-group m-b-20">
        <label>Judul Film</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required>
    </div>

    <div class="form-group m-b-20">
        <label>Kategori</label>
        <select class="form-control" name="divisi" id="divisi"  required>
        <option value="">Pilih Kategori </option>
                <option value="1">Horor</option>
                <option value="2">Romantis</option>
                <option value="3">Komedi</option>
                </select>
    </div>

    <div class="form-group m-b-20">
        <label>Link</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
    </div>

    <div class="form-group m-b-20">
        <label>Deskripsi</label>
        <input type="text" class="form-control" name="username" placeholder="Username" required />
    </div>

    <div class="row">
    <div class="col-sm-12">
    <div class="card-box">
    <h4 class="m-b-30 m-t-0 header-title"><b>Cover Film</b></h4>
    <input type="file" class="form-control" id="image" name="image"  required>
    </div>
    </div>
    </div>
        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light" value="Register">Simpan</button>
        <button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>

 </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->