@extends('base')

@section('content')
    <h1>Liste des étudiants inscrits</h1>


       
            <div class="col-12">
                <div class="card">
                   <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Matricule</th>
                                <th>Ecole</th>
                                <th>Email</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($donnees as $donnee)
                            <tr>
                                <td>{{ $donnee->nom }}</td>
                                <td>{{ $donnee->prenom }}</td>
                                <td>{{ $donnee->matricule }}</td>
                                <td>{{ $donnee->ecole }}</td>
                                <td>{{ $donnee->email }}</td>
                    
                                <td>
                                    <form action="{{ route('delete.student',$donnee->id) }}" method="POST"
                                        onsubmit=" return confirm('Voulez-vous vraiment supprimer cette prospection?');">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" title="Supprimer"><i
                                                class="bx bx-trash"></i></button>
                                    </form>
                                </td>
                                    <td>
                                        <a href="{{ route('edit.student', $donnee->id) }}" class="btn btn-primary" title="Editer"> <i class=" bx bxs-edit-alt"></i>
                                        </a> 
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   </div>
                    
                </div>
            </div>
       
@endsection