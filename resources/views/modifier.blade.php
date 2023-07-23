@extends('base')

@section('content')
    <h1>Modifier l'étudiant:</h1>

    <form method="POST" action="{{ route('update.student', $donnee->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" value="{{ $donnee->nom }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prenom :</label>
            <input type="text" name="prenom"  value="{{ $donnee->prenom }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="matricule">Matricule :</label>
            <input type="number" name="matricule"  value="{{ $donnee->matricule }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ecole">Ecole :</label>
            <input type="text" name="ecole"  value="{{ $donnee->ecole }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email"  value="{{ $donnee->email }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection
    
