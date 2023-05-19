<?php include 'plugins/navbar.php';?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title m-0"><b style="font-size: 20px;">Top 4 Result</b></h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="float-right">
                      <a href="#" class="btn btn-success" onclick="print_top4()">Print Top 4</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Mr.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="top4_mr">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>


                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><b>Ms.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="top4_ms">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title"><b>Ms. Gay</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="top4_gay">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title m-0"><b style="font-size: 20px;">BEST IN PRODUCTION</b></h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="float-right">
                      <a href="#" class="btn btn-success" onclick="print_best_in_prod()">Print Best in Production</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Mr.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_prod_mr_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>


                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><b>Ms.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_prod_ms_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title"><b>Ms. Gay</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_prod_gay_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>

         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title m-0"><b style="font-size: 20px;">BEST IN CASUAL</b></h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="float-right">
                      <a href="#" class="btn btn-success" onclick="print_best_in_casual()">Print Best in Casual</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Mr.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_casual_mr_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>


                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><b>Ms.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_casual_ms_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title"><b>Ms. Gay</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_casual_gay_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title m-0"><b style="font-size: 20px;">BEST IN RAMP (MODELLING)</b></h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="float-right">
                      <a href="#" class="btn btn-success" onclick="print_best_in_ramp()">Print Best in Ramp</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Mr.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_ramp_mr_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>


                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><b>Ms.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_ramp_ms_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title"><b>Ms. Gay</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_ramp_gay_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
        
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title m-0"><b style="font-size: 20px;">BEST IN SWIM WEAR</b></h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="float-right">
                      <a href="#" class="btn btn-success" onclick="print_best_in_swim()">Print Best in Swim Wear</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Mr.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_swim_mr_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>


                 <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><b>Ms.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_swim_ms_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title m-0"><b style="font-size: 20px;">BEST IN LONG GOWN</b></h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="float-right">
                      <a href="#" class="btn btn-success" onclick="print_best_in_long()">Print Best in Long Gown</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b></b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_long_gown_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title m-0"><b style="font-size: 20px;">Mr. & Miss CLOSE-UP SMILE</b></h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="float-right">
                      <a href="#" class="btn btn-success" onclick="print_smile()">Print Mr & Miss Close-up Smile</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Mr.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_smile_mr_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>


                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><b>Ms.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_smile_ms_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title"><b>Ms. Gay</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="best_in_smile_gay_top1">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>

         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title m-0"><b style="font-size: 20px;">FINAL ROUND</b></h3>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="float-right">
                      <a href="#" class="btn btn-success" onclick="print_final()">Print Final Round</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Mr.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="final_round_top4mr">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>


                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><b>Ms.</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="final_round_top4ms">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

                 <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title"><b>Ms. Gay</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead style="text-align: center;">
                    <tr>
                      <th>#</th>
                      <th>Contestant</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody style="text-align:center;" id="final_round_top4gay">
                  </tbody>
                </table>
              </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/dashboard_script.php';?>