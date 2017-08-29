@extends('layouts.admin')

@section('content')

                  <div class="x_content">
                    <br />
                    <div class="row">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ action('AdminController@makeForm') }}" method="post">
                        {{ csrf_field() }}

                        <div class="col-md-5">
                          <div class="form-group" style="margin-top: 30px;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="team1">Team One<span class="required">*</span>
                            </label>
                            <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="team1" name="team1" required="required" class="form-control col-md-7 col-xs-12">
                            </div> -->
                            <div class="team-filter">
                              <select id="team1" name="team1" class="form-control">
                                @foreach($teams as $team)
                                  <option value="{{$team->team_name}}">{{$team->team_name}}</option>
                                  @endforeach
                              </select>
                            </div>

                          </div>
                        </div>

                        <div class="col-md-2">
                            <span style="font-size: 60px;">VS</span>
                        </div>

                        <div class="col-md-5">
                          <div class="form-group" style="margin-top: 30px;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="team2">Team Two<span class="required">*</span>
                            </label>
                            <div class="team-filter">
                              <select id="team2" name="team2" class="form-control">
                                @foreach($teams as $team)
                                  <option value="{{$team->team_name}}">{{$team->team_name}}</option>
                                  @endforeach
                              </select>
                            </div>
                            <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="team2" name="team2" required="required" class="form-control col-md-7 col-xs-12">
                            </div> -->
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="match_type" class="control-label">Match type</label>
                              <select id="match_type" name="type" class="form-control">
                                  <option value="A">Group A</option>
                                  <option value="B">Group B</option>
                                  <option value="C">Group C</option>
                                  <option value="D">Group D</option>
                                  <option value="quarter-final">Quarter Final</option>
                                  <option value="semi-final">Semi Final</option>
                                  <option value="final">Final</option>
                              </select>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Date Of Game <span class="required">*</span></label>
                              <input type="text" id="date" name="date" class="date-picker form-control" required="required" type="date">
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

                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <table class="table table-responsive table-bordered table-striped">
                          <tr>
                            <th>Team 1</th>
                            <th>Team 2</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Status</th>


                          </tr>

                          @foreach($schedules as $schedule)
                            <tr>
                              <td>{{$schedule->team_1}}</td>
                              <td>{{$schedule->team_2}}</td>
                              <td>{{$schedule->type}}</td>
                              <td>{{$schedule->date}}</td>
                              <td><a href="{!! route("updateR", $schedule->match_id) !!}">{{$schedule->status}}</a></td>
                            </tr>
                            @endforeach

                        </table>
                      </div>
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
