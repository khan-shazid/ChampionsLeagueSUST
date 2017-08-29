@extends('layouts.admin')

@section('content')
<div class="x_content">
  <br />

<div data-parsley-validate class="form-horizontal form-label-left" class="form-group">
  <h1 class="text-center" style="margin-bottom: 30px;">Group Round</h1>
<table class="table table-responsive table-bordered table-striped">


  <tr>
    <th>Group</th>
    <th>Team</th>
    <th>Played</th>
    <th>Win</th>
    <th>Lose</th>
    <th>Draw</th>
    <th>Points</th>

  </tr>
@foreach($groups as $group)
  <tr>
    <td>{{$group->group}}</td>
    <td>{{$group->team_name}}</td>
    <td>{{$group->played}}</td>
    <td>{{$group->win}}</td>
    <td>{{$group->lose}}</td>
    <td>{{$group->draw}}</td>
    <td>{{$group->points}}</td>

  </tr>
@endforeach



</table>










</div>
<!-- <h1 class="text-center" style="margin-bottom: 30px;">KnockOut Rounds</h1>
<h4 class="text-center" style="margin-bottom: 30px;">No Matches Played Yet</h4> -->
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
