<?php
include("Header.php");
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">company type Registration form</h4>
                    <p class="card-description">company type Registration form</p>
                    <form method="post" action="companytypeRegistrationaction.php" control="" class="form-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text"name="txtcompanyname" required pattern="^[A-Za_z][A-Za-z -]+$" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea  name="txtdescription" class="form-control"  id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
include("Footer.php");