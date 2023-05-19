<!-- Modal -->
<div class="modal fade" id="best_in_long_gown" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>BEST IN LONG GOWN</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <label>Contestant:</label>
            <input list="contestant_list" id="contestant_gown" class="form-control" autocomplete="off" onchange="check_eval_gown()">
            <datalist id="contestant_list">
              <?php 
              require '../../process/conn.php';
              // $query = "SELECT contestant_name FROM contestant WHERE contestant_name NOT IN (SELECT contestant FROM best_in_prod)";
              $query = "SELECT DISTINCT contestant_name FROM contestant WHERE gender = 'gay'";
              $stmt = $conn->prepare($query);
              $stmt->execute();
              if ($stmt->rowCount() > 0) {
                  foreach($stmt->fetchALL() as $j){
                    echo '<option value="'.$j['contestant_name'].'">';
                  }
              }

              ?>
            </datalist>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-lg-12">
                
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><b>GUIDE</b></h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Description</th>
                      <th style="width: 40px">Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Elegance</td>
                      
                      <td><span class="badge bg-primary">40%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Stage Presence</td>
                      <td><span class="badge bg-info">25%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Projection and Execution</td>
                      <td><span class="badge bg-primary">25%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Audience Impact</td>
                      <td><span class="badge bg-success">10%</span></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="width: 10px; text-align: right;" colspan="2">TOTAL</th>
                      <th style="width: 40px">100%</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              </div>
            </div>

          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-lg-12">
                
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><b>Evaluation</b></h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Description</th>
                      <th>Evaluation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Elegance</td>
                      <td>
                        <input type="number" id="elegance_gown" class="form-control" onkeypress="return event.charCode >= 48" min="1" max="45">
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Stage Presence</td>
                      <td>
                        <input type="number" id="stage_presence_gown" class="form-control" onkeypress="return event.charCode >= 48" min="1" max="25">
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Projection and Execution</td>
                      <td>
                       <input type="number" id="projection_gown" class="form-control" onkeypress="return event.charCode >= 48" min="1" max="25">
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Audience Impact</td>
                      <td>
                        <input type="number" id="audience_impact_gown" class="form-control" onkeypress="return event.charCode >= 48" min="1" max="10">
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              </div>
            </div>

          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="float-left">
              <a href="#" class="btn btn-secondary" onclick="update_best_in_gown()">Update Evaluation</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="float-right">
              <a href="#" class="btn btn-primary" onclick="save_best_in_gown()">Submit Evaluation</a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>