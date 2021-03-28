<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title"><?= $judul ?></h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Manage Member </a>
                                        </li>
                                        <li class="active">
                                           Manage Member
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


<div class="row">
<div class="col-sm-6">  
 



</div>
                                 
                                 
                                    


                                   


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="demo-box m-t-20">
<div class="m-b-30">
<a href="<?= base_url('manage_member/add')?>">
<button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline" ></i></button>
</a>
 </div>

                                                <div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Division</th>
                                                          
                                                                <th>Email</th>
                                                                  <th>Username</th>
                                                                <th>Created</th>
                                                                <th>Updated</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

 <tr>
<th scope="row">1</th>
<td>farhan</td>
<td>3</td>
<td>farhanhaq625@gmail.com</td>
<td>farhan</td>
<td>2019-07-17 12:13:30</td>
<td>2019-07-18 09:45:29</td>
<td><a href="edit-member.php?cid=6"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
    &nbsp;<a href="manage-member.php?rid=6&&action=del"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
</tr>
</tbody>
                                                  
                                                    </table>
                                                </div>




                                            </div>

                                        </div>

                            
                                    </div>
                                    <!--- end row -->


                                    
<div class="row">
<div class="col-md-12">
<div class="demo-box m-t-20">
<div class="m-b-30">

 <h4><i class="fa fa-trash-o" ></i> Deleted Member</h4>

 </div>

<div class="table-responsive">
<table class="table m-0 table-colored-bordered table-bordered-danger">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Division</th>
                                                          
                                                                <th>Email</th>
                                                                  <th>Username</th>
                                                                <th>Created</th>
                                                                <th>Updated</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

 <tr>
<th scope="row">1</th>
<td>diki</td>
<td>3</td>
<td>dikiwahyudi992211@gmail.com</td>
<td>diki</td>
<td>2019-07-18 09:47:48</td>
<td>2019-07-18 23:07:38</td>
<td><a href="manage-member.php?resid=7"><i class="ion-arrow-return-right" title="Restore this Member"></i></a> 
    &nbsp;<a href="manage-member.php?rid=7&&action=parmdel" title="Delete forever"> <i class="fa fa-trash-o" style="color: #f05050"></i> </td>
</tr>
</tbody>
                                                  
                                                    </table>
                                                </div>



                                                
                                            </div>

                                        </div>

                            
                                    </div>  