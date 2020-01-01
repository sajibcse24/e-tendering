<?php require_once('page_header.php');?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
  
                  <div class="x_content">
                             
                         
                  <div class='row'>
                  </div>

                  <div class='row'>
                  	<h4>   New Tender</h4>

                    <form method="post" action="tender_process.php" method="post" role="form" class="contactForm1" enctype="multipart/form-data">
                      <table border="1" class="table table-bordered table-responsive table-striped">

                        <tr>
                          <td> Title </td>
                          <td> <input type="text" name="tender_title" class="form-control" placeholder="Tender Title" required /> </td>
                        </tr>
                         <tr>
                          <td> Short Description </td>
                          <td> <input type="text" name="short_description" class="form-control" placeholder="Tender Short Description" required /> </td>
                        </tr>
                         <tr>
                          <td> Tender Description File </td>
                          <td> <input type="file" name="download_file" class="form-control" placeholder="Tender Details Download file " required /> </td>
                        </tr>
                         <tr>
                          <td> Tender Type </td>
                          <td> <input type="text" name="tender_type" class="form-control" placeholder="Tender Type" required /> </td>
                        </tr>
                                                <tr>
                          <td> Submission End Date </td>
                          <td> <input type="text" name="end_date" class="form-control" placeholder="Tender Submission end date" required /> </td>
                        </tr>
                                                <tr>
                          <td> Tender Open Date </td>
                          <td> <input type="text" name="open_date" class="form-control" placeholder="Tender Open Date" required /> </td>
                        </tr>
                                                <tr>
                          <td> Earnest Money ( BDT) </td>
                          <td> <input type="text" name="earnest_money"  class="form-control" placeholder="Tender Earnest Money ( BDT )" required /> </td>
                        </tr>                        <tr>
                          
                         <tr>
                          <td>  </td>
                          <td> <input type="submit" name="submit"  class="btn btn-success" /> </td>
                        </tr>
                      </table>


                    </form>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      <?php require_once('footer.php');?>