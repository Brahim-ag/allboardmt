<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Team;
use Inertia\Inertia;

class EmployesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
       
        if (!$user) {
            abort(401, "vous n'avez pas assez de droit");
            ## return redirect('/employees/nohome');
        }
        else{
            $team = Team::find($user->current_team_id);
            if($user->hasTeamPermission($team, 'read')){
                
                return Inertia::render('Employee/index',);
                
            }else{
                abort(401, "vous n'avez pas assez de droit");
            }
        }

       
    }

    public function getAll($id){
         
        return Employee::where('team_id', '=', $id)->paginate(15);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $user = $request->user();
       
        if (!$user) {
            abort(401, "vous n'avez pas assez de droit");
            ## return redirect('/employees/nohome');
        }
        else{
            $team = Team::find($user->current_team_id);
            if($user->hasTeamPermission($team, 'read')){
                
                return Inertia::render('Employee/create',);
                
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
        // $user = $request->user();
        // $team = Team::find($user->current_team_id);

        // if (!$user->hasTeamPermission($team, 'create')) {
        //     abort(401, "vous n'avez pas assez de droit");
        // }

        $request->validate([
            'name' => 'required',
            'nameAr' => 'required',
            'lastname' => 'required',
            'lastnameAr' => 'required',
            'sexe' => 'required',
            'dataNaiss' => 'required',
            'cityNaiss' => 'required',
            'wilaya' => 'required',
            'dairaNaiss'=>'required',
            'typeContrat'=> 'required',
            'actContrat'=> 'required',
            'timeContrat'=> 'required',
            'nameFather' => 'required',
            'nationalite' => 'required',
            'nameMother' => 'required',
            'lastnameMother' => 'required',
            'addres' => 'required',
            'NsocialSecure' => 'required',
            'NMutu' => 'required',
            'nameMutu' => 'required',
            'team_id' => 'required',
            'mutuAgence' => 'required',
            'bankNumber' => 'required',
            'bankSNumber'=> 'required',
            'bankAgency'=> 'required',
            'bankName' => 'required',
            'telephone' => 'required',
            'nin' => 'required',
            'itlvl'=> 'required',
            'bloodType' => 'required',
            'situation' => 'required'
        ]);

        return Employee::create($request->all());

      
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
                $profile =  Employee::find($id)->profile;
                $grade =  Employee::find($id)->grades;
                $recrutements =  Employee::find($id)->Recrutements;
               
                return Inertia::render('Employee/show',[
                    'employee' => $employee,
                    'profile' =>$profile ,
                    'grade' =>$grade ,
                    'recrutements' =>$recrutements ,
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
                
                $employee = Employee::findOrFail($id);

        return Inertia::render('Employee/edit', [
            #$employee = Employee::findOrFail($employee->id)
            'employee' => $employee,
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
        // $user = $request->user();
        // $team = Team::find($user->current_team_id);

        // if (!$user->hasTeamPermission($team, 'create')) {
        //     abort(401, "vous n'avez pas assez de droit");
        // }
        $request->validate([
            'name' => 'required',
            'nameAr' => 'required',
            'lastname' => 'required',
            'lastnameAr' => 'required',
            'sexe' => 'required',
            'dataNaiss' => 'required',
            'cityNaiss' => 'required',
            'dairaNaiss'=>'required',
            'wilaya' => 'required',
            'typeContrat'=> 'required',
            'actContrat'=> 'required',
            'timeContrat'=> 'required',
            'nameFather' => 'required',
            'nameMother' => 'required',
            'nationalite' => 'required',
            'lastnameMother' => 'required',
            'addres' => 'required',
            'NsocialSecure' => 'required',
            'NMutu' => 'required',
            'nameMutu' => 'required',
            'mutuAgence' => 'required',
            'bankNumber' => 'required',
            'bankName' => 'required',
            'telephone' => 'required',
            'bloodType' => 'required',
            'nin' => 'required',
            'itlvl'=> 'required',
            'situation' => 'required'
        ]);

        $employee = Employee::findOrFail($request->id);
        $employee->update($request->all());



      
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