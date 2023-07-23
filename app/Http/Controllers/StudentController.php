<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
            'ecole' => 'required',
            'email' => 'required|email',
        ]);
        Etudiant::create($validatedData);

        // $student = new Etudiant();
        // $student->nom = $request->input('nom');
        // $student->prenom = $request->input('prenom');
        // $student->matricule = $request->input('matricule');
        // $student->ecole = $request->input('ecole');
        // $student->email = $request->input('email');
        // $student->save();
        
        return redirect()->route('student.liste');

    }

    public function afficherEtudiants()
    {
        
        $donnees = Etudiant::all();
        return view('liste',['donnees' => $donnees ]);

    }


    public function supprimerEtudiant($id)
    {
        
        $donnee = Etudiant::findOrFail($id);
        $donnee->delete();
        return redirect()->route('student.liste');


    }

    public function editerEtudiant($id)
    {
        $donnee = Etudiant::findOrFail($id);
        return view('modifier',compact('donnee'));

    }

    public function updateEtudiant(Request $request,$id)
    {
        $donnee = Etudiant::findOrFail($id);
        
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
            'ecole' => 'required',
            'email' => 'required|email',
        ]);
        $donnee ->update($request->all());
        return redirect()->route('student.liste');
       

    }
}
