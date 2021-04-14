
<?php if (isset($_GET['cat'])): ?>
<?php include 'view/module/board/form.php'; ?>
<?php endif; ?>
<?php if (empty($_GET['cat'])): ?>

<div class="section-body">
    <div class="container-fluid">
        <div class="tab-content taskboard">
            <div class="tab-pane fade show active" id="TaskBoard-list" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter mb-0 table_custom spacing8 text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Task</th>
                                <th>Team</th>
                                <th>Duration</th>
                                <th>Action</th>
                                <th class="w200"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>
                                    <h6 class="mb-0">New code Update on github</h6>
                                    <span>It is a long established fact that a reader will be distracted...</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info mb-0 w150">
                                        <li><img src="library/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="text-info">Start: 3 Jun 2019</div>
                                    <div class="text-pink">End: 15 Jun 2019</div>
                                </td>
                                <td>
                                    <span class="tag tag-blue">Planned</span>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>0%</strong></div>
                                        <div class="float-right"><small class="text-muted">Progress</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-azure" role="progressbar" style="width: 0%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>
                                    <h6 class="mb-0">Design Events</h6>
                                    <span>It is a long established fact that a reader will be distracted...</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info mb-0 w150">
                                        <li><img src="library/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="text-info">Start: 02 Jun 2019</div>
                                    <div class="text-pink">End: 08 Jun 2019</div>
                                </td>
                                <td>
                                    <span class="tag tag-green">Completed</span>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>100%</strong></div>
                                        <div class="float-right"><small class="text-muted">Progress</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-green" role="progressbar" style="width: 100%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>
                                    <h6 class="mb-0">Feed Details on Dribbble</h6>
                                    <span>The point of using Lorem Ipsum is that...</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info mb-0 w150">
                                        <li><img src="library/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="text-info">Start: 3 Jun 2019</div>
                                    <div class="text-pink">End: 15 Jun 2019</div>
                                </td>
                                <td>
                                    <span class="tag tag-orange">In progress</span>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>35%</strong></div>
                                        <div class="float-right"><small class="text-muted">Progress</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>
                                    <h6 class="mb-0">New code Update on github</h6>
                                    <span>It is a long established fact that a reader will be distracted...</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info mb-0 w150">
                                        <li><img src="library/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="text-info">Start: 13 Jun 2019</div>
                                    <div class="text-pink">End: 23 Jun 2019</div>
                                </td>
                                <td>
                                    <span class="tag tag-orange">In progress</span>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>75%</strong></div>
                                        <div class="float-right"><small class="text-muted">Progress</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-green" role="progressbar" style="width: 75%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>
                                    <h6 class="mb-0">New code Update on github</h6>
                                    <span>Contrary to popular belief, Lorem Ipsum is not simply random text.</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info mb-0 w150">
                                        <li><img src="library/assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="text-info">Start: 8 Jun 2019</div>
                                    <div class="text-pink">End: 15 Jun 2019</div>
                                </td>
                                <td>
                                    <span class="tag tag-orange">In progress</span>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>35%</strong></div>
                                        <div class="float-right"><small class="text-muted">Progress</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>
                                    <h6 class="mb-0">Angular App Design bug</h6>
                                    <span>There are many variations of passages of Lorem Ipsum available...</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info mb-0 w150">
                                        <li><img src="library/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                        <li><img src="library/assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="text-info">Start: 3 Jun 2019</div>
                                    <div class="text-pink">End: 15 Jun 2019</div>
                                </td>
                                <td>
                                    <span class="tag tag-orange">Planned</span>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>35%</strong></div>
                                        <div class="float-right"><small class="text-muted">Progress</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="TaskBoard-grid" role="tabpanel">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card planned_task">
                            <div class="card-header">
                                <h3 class="card-title">Planned</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <h6>Dashbaord</h6>
                                                <span class="time"><span class="text-primary">Start: 5 Aug</span> to <span class="text-danger">Complete: 15 Aug</span></span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="library/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="library/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="library/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <h6>New project</h6>
                                                <span class="time"><span class="text-primary">Start: 6 Aug</span> to <span class="text-danger">Complete: 28 Aug</span></span>
                                                <p>It is a long established fact that a reader will be distracted.</p>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <h6>Feed Details</h6>
                                                <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card progress_task">
                            <div class="card-header">
                                <h3 class="card-title">In progress</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <h6>New Code Update</h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <h6>Meeting</h6>
                                                <span class="time"><span class="text-primary">Start: 5 Aug</span> to <span class="text-danger">Complete: 11 Aug</span></span>
                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero</p>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="library/assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="library/assets/images/xs/avatar9.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <h6>New project</h6>
                                                <p>It is a long established fact that a reader will be distracted.</p>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <h6>Feed Details</h6>
                                                <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card completed_task">
                            <div class="card-header">
                                <h3 class="card-title">Completed</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <h6>Job title</h6>
                                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="library/assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="library/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="library/assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="library/assets/images/xs/avatar8.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <h6>Event Done</h6>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <h6>New Code Update</h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>
