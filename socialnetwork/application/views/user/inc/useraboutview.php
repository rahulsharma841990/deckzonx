<div class="col-md-6">

                    <!--Friends -->
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-gray">
                            <a href="#" class="btn btn-white btn-xs pull-right edit"><i class="fa fa-pencil"></i></a>
                            <i class="fa fa-info-circle"></i> About
                        </div>
                        <form name="update_profile" id="update_profile" action="" method="post">
                        <div class="panel-body">
                            <ul class="list-unstyled profile-about">
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Username</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->username; ?></div>
                                        <div class="col-sm-7 editshow hide1 "> <input class="form-control" type="text" name="username" placeholder="Enter Your Username" value="<?php echo $user->username; ?>" /></div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Email ID</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->email_id; ?></div>
                                        <div class="col-sm-7 editshow hide1 "> <input class="form-control" type="text" name="email" placeholder="Enter Email ID"  value="<?php echo $user->email_id; ?>"/></div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Date of Birth</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->dob; ?></div>
                                        <div class="col-sm-7 editshow hide1 "> <input class="form-control" type="text" name="dob" placeholder="Date of Birth"  value="<?php echo $user->dob; ?>" /></div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Gender</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->gender; ?></div>
                                        <div class="col-sm-7 editshow hide1 ">
                                        <select class="form-control" name="gender">
                                        	<option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Contact</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->contact; ?></div>
                                        <div class="col-sm-7 editshow hide1 "> <input class="form-control" type="text" name="contact" placeholder="Enter Your contact" value="<?php echo $user->contact; ?>" /></div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">State</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->state; ?></div>
                                        <div class="col-sm-7 editshow hide1 "> <input class="form-control" type="text" name="state" placeholder="Enter your state" value="<?php echo $user->state; ?>" /></div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Pincode</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->pincode; ?></div>
                                        <div class="col-sm-7 editshow hide1 "> <input class="form-control" type="text" name="pincode" placeholder="Enter your pincode" value="<?php echo $user->pincode; ?>" /></div>
 
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">City</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->city; ?></div>
                                        <div class="col-sm-7 editshow hide1 ">
                                        <input class="form-control" type="text" name="city" placeholder="Enter your city" value="<?php echo $user->city; ?>" />
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Address</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->address; ?></div>
                                        <div class="col-sm-7 editshow hide1 "> <textarea class="form-control" name="address"><?php echo $user->address; ?></textarea></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">About Me</span>
                                        </div>
                                        <div class="col-sm-8 edithide"><?php echo $user->about_my_self; ?></div>
                                        <div class="col-sm-7 editshow hide1 "> <textarea class="form-control" name="aboutme"><?php echo $user->about_my_self; ?></textarea></div>
                                    </div>
                                </li>
                                
                                
                                <li>
                                    <div class="row">
                                        
                                     <div class="col-sm-5 editshow hide1"> <a href="#" class="btn btn-primary save">Save </a></div>
 
                                    </div>
                                </li>
                            </ul>
                        </div>
                        </form>
                    </div>
                </div>