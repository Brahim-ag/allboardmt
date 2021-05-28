<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Detachement;
use Illuminate\Http\Request;
use App\Models\Team;
use Inertia\Inertia;

class DetachementsController extends Controller
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
                
                return Inertia::render('Detachement/index',[
                    'employe_id' => $id
                ]);
                
            }else{
                abort(401, "vous n'avez pas assez de droit");
            }
        }

       
    }

    public function getAll($id){
        //$employee = Employee::find($id);
        return Employee::find($id)->detachements;
          

        
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
                
                return Inertia::render('Detachement/create',[
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
        
      
        $durre = $request->year .' Année(s)'.' - '.$request->month.' mois '.'- '.$request->day .' jour(s)';
        $request['dateEnd'] = $durre;
        $request->validate([
            'admin' => 'required',
            'motif' => 'required',
            'Number' => 'required',
            'dateSignature' => 'required',
            'dateStart' => 'required',
            'dateEnd' => 'required',
            'to'=> 'required',
        'nature'=> 'required',
            'employee_id' => 'required'
        ]);

        return Detachement::create($request->all());

      
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
                return Inertia::render('Detachement/show',[
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
                
                $Detachement = Detachement::findOrFail($id);

        return Inertia::render('Detachement/edit', [
            'Detachement' => $Detachement,
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
        $durre = $request->year .' Année(s)'.' - '.$request->month.' mois '.'- '.$request->day .' jour(s)';
        $request['dateEnd'] = $durre;
        $request->validate([
            'admin' => 'required',
            'motif' => 'required',
            'Number' => 'required',
            'dateSignature' => 'required',
            'dateStart' => 'required',
            'dateEnd' => 'required',
            'to'=> 'required',
        'nature'=> 'required',
            'employee_id' => 'required'
        ]);


        $Detachement = Detachement::findOrFail($request->id);
        $Detachement->update($request->all());



      
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