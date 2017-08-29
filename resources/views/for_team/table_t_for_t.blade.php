@extends('layouts.admin')

@section('content')
<div data-parsley-validate class="form-horizontal form-label-left" class="form-group">
<table>
  <tr>
    <th>Team Name</th>
    <th>Contact No</th>
    <th>Email</th>
    <th>Tournament Id</th>
    <th>Status</th>

  </tr>
@foreach($teams as $team)
  <tr>

    <td>{{$team->team_name}}</td>
    <td>{{$team->contact_number}}</td>
    <td><a href="{{ url('/register') }}">{{$team->email}}</a></td>
    <td>{{$team->league_id}}</td>
    <td><a href="{{ url('/register') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        {{$team->status}}
    </a>

    <form id="logout-form" action="{{ url('/register') }}" method="POST" style="display: none;">
        {{ csrf_field() }}</form>
      </td>
  </tr>
@endforeach

</table>

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

    @endsection
