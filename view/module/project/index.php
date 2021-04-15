<div class="section-body">
           <div class="container-fluid">
               <div class="d-flex justify-content-between align-items-center">
                   <ul class="nav nav-tabs page-header-tab">
                       <li class="nav-item"><a class="nav-link active" id="Project-tab" data-toggle="tab" href="#Project-OnGoing">&nbsp;</a></li>
                       <li class="nav-item"><a class="nav-link" id="Project-tab" data-toggle="tab" href="#Project-UpComing">&nbsp;</a></li>
                   </ul>

                   <div class="header-action d-md-flex">
                       <a href="./?page=project&action=add" class="btn btn-primary"><i class="fe fe-airplay"></i> New Project </a>
                   </div>
               </div>
           </div>
</div>
<?php
if ($action == 'add' || $action == 'edit'  ) {
  // code...
  include 'form.php';
}else {


 ?>

<!-- display board -->

       <div class="section-body mt-3">
           <div class="container-fluid">
               <div class="tab-content">
                   <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">
                       <div class="row">

                         <?php
                          foreach ($data->data as $obj) {

                          ?>

                           <div class="col-lg-6 col-md-12">
                               <div class="card">
                                   <div class="card-header">
                                       <h3 class="card-title"><?php echo $obj->name; ?></h3>
                                       <div class="card-options">

                                         <label class="custom-switch m-0">
                                        <a href="<?php echo "./board/project/$obj->id/".url($obj->name).""; ?>" class="fe fe-clipboard" > </a>
                                         </label>

                                         <a href=" <?php echo "./?page=$page&action=edit&id=$obj->id"; ?> " class="fe fe-edit-3" ></a>

                                       </div>
                                   </div>
                                   <div class="card-body">
                                       <!-- <span class="tag tag-blue mb-3">Web Design</span> -->
                                       <p><?php echo $obj->text; ?></p>
                                       <div class="row">
                                           <div class="col-5 py-1"><strong>Created:</strong></div>
                                           <div class="col-7 py-1"><?php echo tanggal_indo($obj->datetime); ?></div>
                                           <div class="col-5 py-1"><strong>Creator:</strong></div>
                                           <div class="col-7 py-1"> <small><?php echo $obj->email; ?></small> </div>
                                           <!-- <div class="col-5 py-1"><strong>Question:</strong></div>
                                           <div class="col-7 py-1"><strong>23</strong></div>
                                           <div class="col-5 py-1"><strong>Comments:</strong></div>
                                           <div class="col-7 py-1"><strong>32</strong></div>
                                           <div class="col-5 py-1"><strong>Bug:</strong></div>
                                           <div class="col-7 py-1"><strong>5</strong></div>
                                           <div class="col-5 py-1"><strong>Team:</strong></div>
                                           <div class="col-7 py-1">
                                               <div class="avatar-list avatar-list-stacked">
                                                   <img class="avatar avatar-sm" src="library/assets/images/xs/avatar1.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                                   <img class="avatar avatar-sm" src="library/assets/images/xs/avatar2.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                                   <img class="avatar avatar-sm" src="library/assets/images/xs/avatar3.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                                   <img class="avatar avatar-sm" src="library/assets/images/xs/avatar4.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                                   <img class="avatar avatar-sm" src="library/assets/images/xs/avatar5.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                                   <span class="avatar avatar-sm">+8</span>
                                               </div>
                                           </div> -->
                                       </div>
                                   </div>
                                   <div class="card-footer">
                                       <div class="clearfix">
                                           <div class="float-left"><strong>15%</strong></div>
                                           <div class="float-right"><small class="text-muted">Progress</small></div>
                                       </div>
                                       <div class="progress progress-xs">
                                           <div class="progress-bar bg-red" role="progressbar" style="width: 15%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                         <?php } ?>



                       </div>
                   </div>
                   <div class="tab-pane fade" id="Project-UpComing" role="tabpanel">
                       <div class="card">
                           <div class="card-body">
                               <div class="table-responsive">
                                   <table class="table table-hover table-striped table-vcenter mb-0">
                                       <thead>
                                           <tr>
                                               <th>Owner</th>
                                               <th>Milestone</th>
                                               <th class="w100">Work</th>
                                               <th class="w100">Duration</th>
                                               <th>Priority</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <tr>
                                               <td><img src="library/assets/images/xs/avatar1.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Isidore Dilao</span></td>
                                               <td>Account receivable</td>
                                               <td><span>30:00</span></td>
                                               <td>30:0 hrs</td>
                                               <td><span class="text-warning">Medium</span></td>
                                           </tr>
                                           <tr>
                                               <td><img src="library/assets/images/xs/avatar2.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Maricel Villalon</span></td>
                                               <td>Account receivable</td>
                                               <td><span>68:00</span></td>
                                               <td>105:0 hrs</td>
                                               <td><span class="text-danger">High</span></td>
                                           </tr>
                                           <tr>
                                               <td><img src="library/assets/images/xs/avatar3.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Theresa Wright</span></td>
                                               <td>Approval site</td>
                                               <td><span>74:00</span></td>
                                               <td>89:0 hrs</td>
                                               <td><span>None</span></td>
                                           </tr>
                                           <tr>
                                               <td><img src="library/assets/images/xs/avatar4.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Jason Porter</span></td>
                                               <td>Final touch up</td>
                                               <td><span>30:00</span></td>
                                               <td>30:0 hrs</td>
                                               <td><span>None</span></td>
                                           </tr>
                                           <tr>
                                               <td><img src="library/assets/images/xs/avatar5.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Annelyn Mercado</span></td>
                                               <td>Account receivable</td>
                                               <td><span>30:00</span></td>
                                               <td>30:0 hrs</td>
                                               <td><span>None</span></td>
                                           </tr>
                                           <tr>
                                               <td><img src="library/assets/images/xs/avatar6.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Sean Black</span></td>
                                               <td>Basement slab preparation</td>
                                               <td><span>88:00</span></td>
                                               <td>88:0 hrs</td>
                                               <td><span>None</span></td>
                                           </tr>
                                           <tr>
                                               <td><img src="library/assets/images/xs/avatar7.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>Scott Ortega</span></td>
                                               <td>Account receivable</td>
                                               <td><span>56:00</span></td>
                                               <td>125:0 hrs</td>
                                               <td><span class="text-warning">Medium</span></td>
                                           </tr>
                                           <tr>
                                               <td><img src="library/assets/images/xs/avatar8.jpg" alt="Avatar" class="w30 rounded-circle mr-2"> <span>David Wallace</span></td>
                                               <td>Account receivable</td>
                                               <td><span>30:00</span></td>
                                               <td>30:0 hrs</td>
                                               <td><span>None</span></td>
                                           </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

<?php } ?>

   </div>
</div>
