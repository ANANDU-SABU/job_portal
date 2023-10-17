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
                    <h4 class="card-title">location  Registration </h4>
                    <p class="card-description">location  Registration Form</p>
                    <form method="post" action="locationregistrationaction.php" control="" class="form-sample">
                      <div class="form-group">
                        <label for="exampleInputName1"> Location Name</label>
                        <input type="text"  name="txtlocationname"  required pattern="^[A-Za_z][A-Za-z -]+$" class="form-control" id="exampleInputName1" placeholder="Location Name">
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
include("Footer.php");