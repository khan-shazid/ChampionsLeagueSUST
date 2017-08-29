@extends('layouts.admin')

@section('content')

                  <div class="x_content">
                    <br />
                    <div class="row">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ action('AdminController@updateResult') }}" method="post">
                        {{ csrf_field() }}

                        <div class="col-md-5">
                          <div class="form-group" style="margin-top: 30px;">
                            <label  for="team1">{{$schedule->team_1}} Goal
                            </label>
                            <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="team1" name="team1" required="required" class="form-control col-md-7 col-xs-12">
                            </div> -->

                              <input type="number"  name="team1" class="form-control">

                            </input>

                      <input type="hidden" name="match_id" value="{{$schedule->match_id}}">
                      <input type="hidden" name="team_1" value="{{$schedule->team_1}}">
                      <input type="hidden" name="team_2" value="{{$schedule->team_2}}">
                          </div>
                        </div>

                        <div class="col-md-2">
                            <span style="font-size: 60px;">VS</span>
                        </div>

                        <div class="col-md-5">
                          <div class="form-group" style="margin-top: 30px;">
                            <label  for="team2">{{$schedule->team_2}} Goal
                            </label>
                            <div class="team-filter">
                              <input type="number" name="team2" class="form-control">

                            </input>
                            </div>
                            <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="team2" name="team2" required="required" class="form-control col-md-7 col-xs-12">
                            </div> -->
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="match_type" class="control-label">Match type</label>
                              <select id="match_type" name="result" class="form-control">
                                  <option value="{{$schedule->team_1}}">{{$schedule->team_1}} Won</option>
                                  <option value="{{$schedule->team_2}}">{{$schedule->team_2}} Won</option>
                                  <option value="draw">Draw</option>
                              </select>
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="col-md-12 text-center" style="margin-top: 30px;">
                          <div class="form-group">
                              <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>

                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </div>



        <!-- <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-multiselect.js"></script>

    <script type="text/javascript">
        $('#team1').multiselect();
        $('#team2').multiselect();
    </script>

    <!-- bootstrap-daterangepicker -->
    @endsection
