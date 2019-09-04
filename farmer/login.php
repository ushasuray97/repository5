<?php
   include("header.php");
   ?>
<div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                     <form action="log.php" method="post">
                          <div class="panel-body form-horizontal payment-form">
                              <div class="form-group">
                                  <label for="concept" class="col-md-3 control-label-left">User&nbsp;Id<sup><i class="fa fa-star star-color"></i></sup></label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control form-border" id="userId" name="userId" required>
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
                                           <button type="submit" class="btn btn-success btn-bold">Login</button> 
                                         
                                      </div>
                               </div>
                               <div class="form-group">
                                      <label for="amount" class="col-md-2 control-label-left"></label>
                                      <div class="col-md-10">  
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<u><a href="registration.php">New User?Signup</a></u>
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