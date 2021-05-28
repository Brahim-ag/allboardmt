<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Regim;
use Illuminate\Http\Request;
use App\Models\Team;
use Inertia\Inertia;

class RegimdisController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $user = $request->user();
       
        if (!$user) {
            abort(401, "vous n'avez pas assez de droit");
            ## return redirect('/employees/nohome');
        }
        else{
            $team = Team::find($user->current_team_id);
            if($user->hasTeamPermission($team, 'read')){
                
                return Inertia::render('Regim/index',[
                    'employe_id' => $id
                ]);
                
            }else{
                abort(401, "vous n'avez pas assez de droit");
            }
        }

       
    }

    public function getAll($id){
        //$employee = Employee::find($id);
        return Employee::find($id)->regims;
          

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
       
        $user = $request->user();
       
        if (!$user) {
            abort(401, "vous n'avez pas assez de droit");
            ## return redirect('/employees/nohome');
        }
        else{
            $team = Team::find($user->current_team_id);
            if($user->hasTeamPermission($team, 'read')){
                
                return Inertia::render('Regim/create',[
                    'employee_id' => $id
                ]);
                
            }else{
                abort(401, "vous n'avez pas assez de droit");
            }
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
        $request->validate([
            'degre' => 'required',
            'typef' => 'required',
            'datef' => 'required',
            'typeS' => 'required',
            'nPV' => 'required',
            'datePV' => 'required',
            'degreSonctCom' => 'required',
            'typeSonctCom' => 'required',
            'nacte' => 'required',
            'datesign' => 'required',
            'dateeff' => 'required',
            'employee_id' => 'required',
            'employee_id' => 'required'
        ]);

        return Regim::create($request->all());

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $user = $request->user();
       
        if (!$user) {
            abort(401, "vous n'avez pas assez de droit");
            ## return redirect('/employees/nohome');
        }
        else{
            $team = Team::find($user->current_team_id);
            if($user->hasTeamPermission($team, 'read')){
                $employee = Employee::findOrFail($id);
                return Inertia::render('Regim/show',[
                    'employee' => $employee,
                ]);
                
            }else{
                abort(401, "vous n'avez pas assez de droit");
            }
        }
        
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        
        $user = $request->user();
       
        if (!$user) {
            abort(401, "vous n'avez pas assez de droit");
            ## return redirect('/employees/nohome');
        }
        else{
            $team = Team::find($user->current_team_id);
            if($user->hasTeamPermission($team, 'read')){
                
                $Regim = Regim::findOrFail($id);

        return Inertia::render('Regim/edit', [
            'Regim' => $Regim,
        ]);
                
            }else{
                abort(401, "vous n'avez pas assez de droit");
            }
        }

       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'degre' => 'required',
            'typef' => 'required',
            'datef' => 'required',
            'typeS' => 'required',
            'nPV' => 'required',
            'datePV' => 'required',
            'degreSonctCom' => 'required',
            'typeSonctCom' => 'required',
            'nacte' => 'required',
            'datesign' => 'required',
            'dateeff' => 'required',
            'employee_id' => 'required',
            'employee_id' => 'required'
        ]);


        $Regim = Regim::findOrFail($request->id);
        $Regim->update($request->all());



      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Employee $employee)
    {
        $user = $request->user();
        $team = Team::find($user->current_team_id);

        if (!$user->hasTeamPermission($team, 'create')) {
            abort(401, "vous n'avez pas assez de droit");
        }
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employé supprime');
    }

    public function nohome(Request $request, Employee $employee)
    {
        $success = "Contacter votre administrateur systeme pour avoir les droits d'acces!!!";
        return view('employees.nohome', compact('employee', 'success'));
    }
}