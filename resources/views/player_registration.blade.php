@extends('layouts.website_2')

@section('content')
  <!-- <div id='cssmenu'>
  <ul id='ul'>
   <li><a href='http://localhost/php/new/menu/'>Home</a></li>
   <li class='active'><a href='http://localhost/php/new/loginpage.php'>Registration</a></li>
   <li><a href='http://localhost/php/Standings_table/table_versus.php'>Schedule</a></li>
   <li><a href="{!! url('table_3') !!}" >Standings</a></li>
  </ul>

  </div> -->

  <form action="{{ action('RegistrationController@doReg_1') }}" method="post">

    {{ csrf_field() }}

    <h1>Sign Up</h1>

    <fieldset>
      <legend><span class="number">1</span>Your basic info</legend>
      <label for="full">Full Name:</label>
      <input type="text" id="full" name="full_name">

      <label for="nick">Nick Name:</label>
      <input type="text" id="nick" name="nick_name">

      <label for="reg">Registration:</label>
      <input type="number" id="reg" name="registration">

  <!-- <label for="country">Country:</label>
      <input type="text" id="country" name="country"> -->


    </fieldset>

    <fieldset>
      <legend><span class="number">2</span>Your profile</legend>
      <label for="position">Position:</label>
      <input type="text" id="position" name="position">
    </fieldset>

<fieldset>
    <label for="job">Teams Preference:</label>
    <select id="job" name="preference">
      @foreach($teams as $team)
        <option value="{{$team->team_name}}">{{$team->team_name}}</option>
        @endforeach
  <option value="None">No team</option>
    </select>
</fieldset>

    <!--<input type="submit" name="signup" value="Sign Up">-->
<button type="submit" name="signup">Sign Up</button>

</form>
@endsection
