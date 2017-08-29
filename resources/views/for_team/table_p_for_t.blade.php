@extends('layouts.admin')

@section('content')
<div class="x_content">
  <br />

<div data-parsley-validate class="form-horizontal form-label-left" class="form-group">
<table>
  <tr>
    <th>Full Name</th>
    <th>Nick Name</th>
    <th>Registration</th>
    <th>Position</th>
    <th>Team Preference</th>
    <th>Sold To</th>
    <th>Status</th>

  </tr>
@foreach($players as $player)
  <tr>
    <td>{{$player->full_name}}</td>
    <td>{{$player->nick_name}}</td>
    <td>{{$player->registration}}</td>
    <td>{{$player->position}}</td>
    <td>{{$player->team_preference}}</td>
    <td>{{$player->sold_to}}</td>
    <td>{{$player->status}}</td>
  </tr>
  
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

    @endsection
