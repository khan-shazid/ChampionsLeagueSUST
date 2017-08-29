<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

use App\User;
use App\League;
//use App\New;
use App\Player;
use App\Schedule;
use App\Team;



class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function showReg_1Form(){

     //return View::make('user.registerForm')->with('title','Register');
     $league = DB::table('leagues')->get()->pluck('league_id')->max();
     $teams = DB::table('teams')->where([['league_id',$league],['status','not verified']])->get();
     return \View::make('player_registration')->with('teams',$teams);

 }


    public function doReg_1(Request $request){

    $input = $request->all();
  //  return $input;
  $league = DB::table('leagues')->get()->pluck('league_id')->max();
    DB::table('players')->insert([
                ['full_name' => $input['full_name'], 'nick_name' => $input['nick_name'],'registration' => $input['registration'],
                'position' => $input['position'],'team_preference' => $input['preference'],'league_id'=>$league,'sold_to' => 'none',
                'status' => 'not verified']
              ]);
              return redirect()->to('/index');
    }
    public function showReg_2Form(){

    //return View::make('user.registerForm')->with('title','Register');


    return \View::make('team_registration');

}


   public function doReg_2(Request $request)
   {
     $league = DB::table('leagues')->get()->pluck('league_id')->max();
     $input = $request->all();
   //  return $input;
     DB::table('teams')->insert([
                 ['team_name' => $input['full_name'], 'contact_number' => $input['contact'],'email' => $input['email'],
                 'status' => 'not verified','league_id' => $league]
               ]);
               return redirect()->to('/index');

   }
   public function verifyPlayer($id){

     return $id;
     DB::table('players')->where('id', $id)->update(['status' => 'verified']);
     return redirect()->back();
   }

   public function notVerifyPlayer($id){

     return $id;
     DB::table('players')
            ->where('id', $id)
            ->update(['status' => 'not verified']);
     return redirect()->back();
   }

   public function verifyTeam(Request $request){

     $data = $request->all();
     return $data['name'];
     User::create([
         'name' => $data['name'],
         'email' => $data['email'],
         'password' => bcrypt($data['password']),
     ]);
     return redirect()->back();
   }

   public function notVerifyTeam($id){

     DB::table('teams')
            ->where('id', $id)
            ->update(['status' => 'not verified']);
     return redirect()->back();
   }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
