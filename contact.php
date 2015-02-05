<?php 
include("php/global.php");
include("php/header.php");
?>
    
     
     <div class="row">

         <div class="col-md-4">

           <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Sidebar</h3>
  </div>
  <div class="panel-body">
        <address>
        <strong>Twitter, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
        </address>

        <address>
            <strong>Full Name</strong><br>
            <a href="mailto:#">first.last@example.com</a>
        </address>
  </div>
</div>

         

         </div>


         <div class="col-md-8">

            <div class="jumbotron">

                 <div class="page-header">
  <h1><small>Contact Us</small></h1>
</div>
              <form  class="form-horizontal">
                  <div class="form-group">
                    <label for="" class="col-sm-2">First name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" placeholder="Enter your name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2">Last name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="" placeholder="Enter your name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="" placeholder="Enter your name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="" placeholder="Password" rows="8"></textarea>
                    </div>
                  </div>
                 
                  
                  <div class="checkbox">
                    <label class="col-md-offset-2 col-sm-10">
                      <input type="checkbox"> Check me out
                    </label>
                  </div>
                  <br>
                  <button type="submit" class="col-md-offset-2  btn btn-primary btn-lg">Submit</button>
                </form>

            </div>

         </div>


     </div>
     
<?php 
include("php/footer.php");
?>