@extends('layouts.admin')

@section('content')

                  <div class="x_content">
                    <br />
                    <div class="col-md-6 col-md-offset-3">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ action('AdminController@makeLeague') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                          <label class="control-label" for="first-name">League Year <span class="required">*</span>
                          </label>
                          <div class="">
                            <input type="number" id="year" name="year" required="required" class="form-control">
                          </div>


                          <div class="">
                            <label class="control-label" for="first-name">Select Cover Page -> <span class="required">*</span>
                            </label>
                            <input type="file" name="image" id="image">
                          </div>

                          <label class="control-label" for="first-name">Title <span class="required">*</span>
                          </label>
                          <div class="">
                            <input type="text" id="title" name="title" required="required" class="form-control">
                          </div>

                          <label class="control-label" for="first-name">Sponsor <span class="required">*</span>
                          </label>
                          <div class="">
                            <input type="text" id="sponsor" name="sponsor" required="required" class="form-control">
                          </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="">
                            <button type="submit" class="btn btn-primary">Create</button>
                          </div>
                        </div>

                      </form>

                    </div>

                    <div class="col-md-8 col-md-offset-2">
                      <table class="table table-responsive table-bordered table-striped">
                        <tr>
                          <th>Year</th>
                          <th>Title Name</th>
                          <th>Image Name</th>
                          <th>Sponsor Name</th>


                        </tr>
                        @foreach($leagues as $league)
                          <tr>
                            <td>{{$league->year}}</td>
                            <td>{{$league->title}}</td>
                            <td>{{$league->image}}</td>
                            <td>{{$league->sponsor}}</td>

                            @endforeach

                      </table>
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

    <!-- bootstrap-daterangepicker -->
    @endsection
