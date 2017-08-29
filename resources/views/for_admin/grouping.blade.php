@extends('layouts.admin')

@section('content')

                  <div class="x_content">
                    <br />
                    <div class="row">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ action('AdminController@makeGroup') }}" method="post">
                        {{ csrf_field() }}

                        <div class="col-md-5">
                          @foreach($teams as $team)
                          <div class="form-group" style="margin-top: 30px;">

                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="team1">{{$team->team_name}}
                              <!-- <span class="required">*</span> -->
                            </label>
                            <div class="team-filter">
                              <select  name="{{$team->team_name}}" class="form-control">

                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="C">C</option>
                                  <option value="D">D</option>

                              </select>
                            </div>

                          </div>
                          @endforeach
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
