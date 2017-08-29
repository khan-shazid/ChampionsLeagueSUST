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

  <form action="{{ action('RegistrationController@doReg_2') }}" method="post">

    {{ csrf_field() }}

    <h1>Sign Up</h1>

    <fieldset>
      <legend><span class="number">1</span>Your basic info</legend>
      <label for="full">Team Name:</label>
      <input type="text" id="full" name="full_name">

      <label for="contact">Contact No:</label>
      <input type="number" id="contact" name="contact">

  <label for="email">Email:</label>
      <input type="email" id="email" name="email">


    </fieldset>

    <!-- <fieldset>
      <legend><span class="number">2</span>Your profile</legend>
      <label for="position">Position:</label>
      <input type="text" id="position" name="position">
    </fieldset>

<fieldset>
    <label for="job">Teams Preference:</label>
    <select id="job" name="preference">

        <option value="Manchester City">Manchester City</option>
        <option value="Arsenal">Arsenal</option>
        <option value="Manchester United">Manchester United</option>
        <option value="Chealsea">Chealsea</option>
        <option value="Juventus">Juventus</option>
        <option value="Borussia Dortmund">Borussia Dortmund</option>
  <option value="Bayern Munich">Bayern Munich</option>
  <option value="FC Schalke 04">FC Schalke 04</option>
  <option value="Real Madrid">Real Madrid</option>
  <option value="Shaktar Donetsk">Shaktar Donetsk</option>
  <option value="FC Barcelona">FC Barcelona</option>
  <option value="Paris Saint Germain">Paris Saint Germain</option>
  <option value="AC Milan">AC Milan</option>
  <option value="Napoli">Napoli</option>
  <option value="AS Roma">AS Roma</option>
  <option value="Inter Milan">Inter Milan</option>
  <option value="Inter Milan">No team</option>

    </select>
</fieldset> -->

    <!--<input type="submit" name="signup" value="Sign Up">-->
<button type="submit" name="signup">Sign Up</button>

</form>

</body>
</html>
@endsection
