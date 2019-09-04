<?php include("header.php")?>
<div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                     <form action="reg.php" method="post">
                          <div class="panel-body form-horizontal payment-form">
                          
                          <div class="form-group">
                                  <label for="concept" class="col-md-3 control-label-left">Registred As<sup><i class="fa fa-star star-color"></i></sup></label>
                                  <div class="col-md-9">
                                      <select type="text" class="form-control form-border" id="usertype" name="usertype" required>
                                       <option value="">Select</option>
                                      	<option value="Farmer">Farmer</option>
                                      	<option value="Scientist">Scientist</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="concept" class="col-md-3 control-label-left">Name<sup><i class="fa fa-star star-color"></i></sup></label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control form-border" id="name" name="name" required>
                                  </div>
                              </div>
                              
                                 <div class="form-group">
                                  <label for="concept" class="col-md-3 control-label-left">Address<sup><i class="fa fa-star star-color"></i></sup></label>
                                  <div class="col-md-9">
                                      <textarea class="form-control form-border" id="address" name="address" required></textarea>
                                  </div>
                              </div>
                                 <div class="form-group">
                                  <label for="concept" class="col-md-3 control-label-left">Emailid<sup><i class="fa fa-star star-color"></i></sup></label>
                                  <div class="col-md-9">
                                      <input type="email" class="form-control form-border" id="emailid" name="emailid" required>
                                  </div>
                              </div>
                                 <div class="form-group">
                                  <label for="concept" class="col-md-3 control-label-left">Mobileno<sup><i class="fa fa-star star-color"></i></sup></label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control form-border" id="mobileno" name="mobileno" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="concept" class="col-md-3 control-label-left">Password<sup><i class="fa fa-star star-color"></i></sup></label>
                                  <div class="col-md-9">
                                      <input type="password" class="form-control form-border" id="password" name="password" required>
                                  </div>
                              </div>
                               <div class="form-group">
                                      <label for="amount" class="col-md-3 control-label-left"></label>
                                      <div class="col-md-9"> 
                                           <button type="submit" class="btn btn-success btn-bold">Registration</button> 
                                         
                                      </div>
                               </div>
                               <div class="form-group">
                                      <label for="amount" class="col-md-2 control-label-left"></label>
                                      <div class="col-md-10">  
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<u><a href="index.php">Login</a></u>
                                      </div>
                               </div>
                          </div>
                      </form>
                  </div>
                  <div class="col-md-3"></div>
                </div>
                
 <?php
   include("footer.php");
   ?>