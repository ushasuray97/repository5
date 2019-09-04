<?php include("sheader.php")?>
<p>Blogs</p>
<div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                     <form action="addblog.php" method="post">
                          <div class="panel-body form-horizontal payment-form">
                              <div class="form-group">
                                  <label for="concept" class="col-md-3 control-label-left">Topic<sup><i class="fa fa-star star-color"></i></sup></label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control form-border" id="topic" name="topic" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="concept" class="col-md-3 control-label-left">Description<sup><i class="fa fa-star star-color"></i></sup></label>
                                  <div class="col-md-9">
                                      <textarea class="form-control form-border" id="description" name="description" required></textarea>
                                  </div>
                              </div>
                               <div class="form-group">
                                      <label for="amount" class="col-md-3 control-label-left"></label>
                                      <div class="col-md-9"> 
                                           <button type="submit" class="btn btn-success btn-bold">Post</button> 
                                         
                                      </div>
                               </div>
                               
                          </div>
                      </form>
                  </div>
                  <div class="col-md-3"></div>
                </div>
<?php include("footer.php")?>
