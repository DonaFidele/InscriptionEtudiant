@extends('base')

@section('content')
    <h1>Formulaire d'inscription Etudiants</h1>

    <form method="POST" action="{{ route('student.store') }}">
        @csrf

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prenom :</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="matricule">Matricule :</label>
            <input type="number" name="matricule" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ecole">Ecole :</label>
            <input type="text" name="ecole" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
    
