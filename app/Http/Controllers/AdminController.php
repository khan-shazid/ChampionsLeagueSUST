<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Session;

class AdminController extends Controller
{
  //SET GLOBAL sql_mode='';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function updateResultForm($id){

       $schedule = DB::table('schedules')->where('match_id',$id)->first();

       return \View::make('for_admin.updateresult')->with('schedule',$schedule);
     }

     public function updateResult(Request $request){
       $input = $request->all();
       //return $input;
       DB::table('results')->insert([
                   ['goal_1' => $input['team1'],'goal_2' => $input['team2'],
                   'result' => $input['result'],'match_id' => $input['match_id']]
                 ]);
                 DB::table('schedules')
                        ->where('match_id', $input['match_id'])
                        ->update(['status' => 'played']);

                        if($input['result']!='draw'){
                          DB::table('groups')
                                 ->where('team_name', $input['result'])
                                 ->update([
                                   'played' => DB::raw('played + 1'),
                                   'win' => DB::raw('win + 1'),
                                   'points' => DB::raw('points + 3'),
                                 ]);

                                 if($input['result']!=$input['team_1']){
                                   DB::table('groups')
                                          ->where('team_name', $input['team_1'])
                                          ->update([
                                            'played' => DB::raw('played + 1'),
                                            'win' => DB::raw('lose + 1'),
                                            'points' => DB::raw('points + 0'),
                                          ]);

                                 }else if($input['result']!=$input['team_2']){
                                   DB::table('groups')
                                          ->where('team_name', $input['team_2'])
                                          ->update([
                                            'played' => DB::raw('played + 1'),
                                            'win' => DB::raw('lose + 1'),
                                            'points' => DB::raw('points + 0'),
                                          ]);

                                 }

                        }
                        else if($input['result']=='draw'){
                          DB::table('groups')
                                 ->where('team_name', $input['team_1'])
                                 ->update([
                                   'played' => DB::raw('played + 1'),
                                   'draw' => DB::raw('draw + 1'),
                                   'points' => DB::raw('points + 1'),
                                 ]);
                          DB::table('groups')
                                  ->where('team_name', $input['team_2'])
                                  ->update([
                                    'played' => DB::raw('played + 1'),
                                    'draw' => DB::raw('draw + 1'),
                                    'points' => DB::raw('points + 1'),
                                        ]);

                        }



                        $league = DB::table('leagues')->get()->pluck('league_id')->max();
                        $teams = DB::table('teams')->where([['league_id',$league],['status','not verified']])->get();
                        $schedules = DB::table('schedules')->where('league_id',$league)->get();
                       return \View::make('for_admin.form')->with('teams',$teams)->with('schedules',$schedules);

     }




    public function index()
    {
        //
    }
    public function showLeague()
    {
       $leagues = DB::table('leagues')->get();
       //return $league;

     return \View::make('for_admin.create_league')->with('leagues',$leagues);
    }


    public function makeLeague(Request $request)
    {
      $input = $request->all();

      $request->file('image');
      $file = $request->file('image');
      $destinationPath = 'uploads'; // upload path
      $extension = $file->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      $file->move($destinationPath, $fileName); // uploading file to given path


      DB::table('leagues')->insert([
                  ['year' => $input['year'],'title' => $input['title'],
                  'image' => $fileName,'sponsor' => $input['sponsor']]
                ]);
                return redirect()->back();
        //
    }

    public function showForm()
    {
       //$league = DB::table('leagues')->get()->pluck('year');
       //return $league;
      $league = DB::table('leagues')->get()->pluck('league_id')->max();
      $teams = DB::table('teams')->where([['league_id',$league],['status','not verified']])->get();
      $schedules = DB::table('schedules')->where('league_id',$league)->get();
     return \View::make('for_admin.form')->with('teams',$teams)->with('schedules',$schedules);
    }
    public function makeForm(Request $request)
    {


      $league = DB::table('leagues')->get()->pluck('league_id')->max();
      $input = $request->all();
      DB::table('schedules')->insert([
                  ['team_1' => $input['team1'],'team_2' => $input['team2'],
                  'status' => 'not played','type' => $input['type'],
                  'date' => $input['date'],'league_id' => $league]
                ]);
                return redirect()->back();
        //
    }

    public function showTablePlayer(){
      $league = DB::table('leagues')->get()->pluck('league_id')->max();
      $players = DB::table('players')->where('league_id',$league)->get();
      return \View::make('for_admin.table_player')->with('players',$players);
    }

    public function showTableTeam(){
      $league = DB::table('leagues')->get()->pluck('league_id')->max();
      $teams = DB::table('teams')->where('league_id',$league)->get();
      return \View::make('for_admin.table_team')->with('teams',$teams);
    }

    public function showTableSchedule(){

      $schedules = DB::table('schedules')->get();
      return \View::make('for_admin.table_schedule')->with('schedules',$schedules);
    }

    public function showGroup()
    {
       //$league = DB::table('leagues')->get()->pluck('year');
       //return $league;
      $league = DB::table('leagues')->get()->pluck('league_id')->max();
      $teams = DB::table('teams')->where([['league_id',$league],['status','not verified']])->get();
     return \View::make('for_admin.grouping')->with('teams',$teams);
    }

    public function tableGroup(){
      $groups = DB::table('groups')->orderBy('group', 'asc')
                ->get();
                return \View::make('for_admin.table_group')->with('groups',$groups);
    }

    public function makeGroup(Request $request)
    {
      $input = $request->all();
      $league = DB::table('leagues')->get()->pluck('league_id')->max();
      $teams = DB::table('teams')->where([['league_id',$league],['status','not verified']])->get();
      $i=1;
      $arr = [];
      foreach($teams as $team){
        $name = str_replace(' ', '_', $team->team_name);
        $arr = $arr+[
        $i       =>  $name];
        $i=$i+1;

      }

      $i=1;
      $j=1;


      for($i=1;$i<17;$i++){
        if($input[$arr[$i]]=='A'){
          $name = str_replace('_', ' ', $arr[$i]);
          DB::table('groups')->insert([
                      ['team_name' => $name,'group' => 'A',
                      'played' => 0,'win' => 0,
                      'lose' => 0,'draw' => 0,'points' => 0]
                    ]);
        }
        else if($input[$arr[$i]]=='B'){
          $name = str_replace('_', ' ', $arr[$i]);
          DB::table('groups')->insert([
                      ['team_name' => $name,'group' => 'B',
                      'played' => 0,'win' => 0,
                      'lose' => 0,'draw' => 0,'points' => 0]
                    ]);
        }
        else if($input[$arr[$i]]=='C'){
          $name = str_replace('_', ' ', $arr[$i]);
          DB::table('groups')->insert([
                      ['team_name' => $name,'group' => 'C',
                      'played' => 0,'win' => 0,
                      'lose' => 0,'draw' => 0,'points' => 0]
                    ]);
        }
        else if($input[$arr[$i]]=='D'){
          $name = str_replace('_', ' ', $arr[$i]);
          DB::table('groups')->insert([
                      ['team_name' => $name,'group' => 'D',
                      'played' => 0,'win' => 0,
                      'lose' => 0,'draw' => 0,'points' => 0]
                    ]);
        }

      }




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
