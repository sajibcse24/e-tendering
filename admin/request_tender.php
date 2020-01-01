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
                  	<h4>   Request Tender List </h4>

                    <table class="table table-responsive table-bordered table-striped ">
                      <tr>
                        <th># </th>
                        <th> Title </th>
                        <th> Short Description </th>
                        <th> File </th>
                        <th> Open Date </th>
                        <th> Money </th>
                        <th> Action </th>
                      </tr>
                      <?php require_once('../connect.php');

                      $sql = mysql_query("select * from tender where admin_approve = 0");
                      $count = mysql_num_rows($sql);
                      if($count == 0){
                        echo "<h3> Sorry Not found any request </h3>";
                      }
                      else {
                        while($data = mysql_fetch_array($sql) ) {
                          echo "<tr>";
                          echo "<td>";
                          echo $data['tender_title'];
                          echo "</td>";
                          echo "<td>";
                          echo $data['short_description'];
                          echo "</td>";
                         echo "<td>";
                          echo $data['download_file'];
                          echo "</td>";
                          echo "<td>";
                          echo $data['tender_type'];
                          echo "</td>";
                          echo "<td>";
                          echo $data['open_date'];
                          echo "</td>";
                          echo "<td>";
                          echo $data['earnest_money'];
                          echo "</td>";
                         echo "<td>";
                         $id = $data['id'];
                       echo "<a href = accept.php?id=$id> Accept </a>"; 

                         echo "</td>";
                          echo "</tr>";
                          # code...
                        }
                      ?>



                      <?php 
                      }
                      ?>
                     </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      <?php require_once('footer.php');?>