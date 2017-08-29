@extends('layouts.admin')

@section('content')
<div data-parsley-validate class="form-horizontal form-label-left" class="form-group">
<table>
  <thead>
  <tr>
    <th>Team Name</th>
    <th>Contact No</th>
    <th>Email</th>
    <th>Tournament Id</th>
    <th>Status</th>
  </tr>
</thead>
<tbody>
@foreach($teams as $team)
  <tr>

    <td>{{$team->team_name}}</td>
    <td>{{$team->contact_number}}</td>
    <td>{{$team->email}}</td>
    <td>{{$team->league_id}}</td>
    <td>
      <!-- <a href="{{ url('/register') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"> -->
        <a href="" data-toggle="modal" data-target="#{{ $team->id }}">{{$team->status}}</a>
        <!-- </a> -->
        <div class="modal fade" id="{{ $team->id }}" role="dialog" tabindex="-1" aria-labelledby="ModalLabel{{ $team->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="ModalLabel{{ $team->id }}">Register This Team??</h4>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{$team->team_name}}" required autofocus>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{$team->email}}" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                  </div>

                  <div class="form-group">
                      <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                      <div class="col-md-6">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-primary">
                              Register
                          </button>
                          <a class="btn btn-default" href="">Cancel</a>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    <!-- <form id="logout-form" action="{{ url('/register') }}" method="POST" style="display: none;">
        {{ csrf_field() }}</form> -->
      </td>

      <!-- <script src="/js/app.js"></script> -->
      <!-- End of Modal -->
  </tr>
@endforeach
</tbody>

</table>

</div>


<!-- <footer>
<div class="pull-right">
Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
</div>
<div class="clearfix"></div>
</footer> -->
<!-- /footer content -->

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

    @endsection
