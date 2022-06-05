@extends('layouts/master')

@section('content')
<div class="container">
    <div>
        <div class="col-10 offset-2">
            <button type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable" ><i class="fas fa-save"></i> Imprimer une fiche</button>
            <a type="button" href="{{asset('abonne')}}"  class="btn btn-danger ms-2"><i class="fas fa-backspace"></i> Ajouter un abonné</a>
        </div>
        <div>
        </div>
    </div>
</div>

<div class="container-flud ml-5 mr-5 mt-4">
<div class="push-top">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
@endif

	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><input type="checkbox" onclick="checkAll(this)"></th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date Naissance</th>
                <th>Niveau scolaire</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Categorie Abonnement</th>
                <th>Montant payé</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          @foreach($abonnes as $abonnee)
            <tr>
                <td><input type="checkbox" value="{{$abonnee->id}}"></td>
                <td>{{$abonnee->nom}}</td>
                <td>{{$abonnee->prenom}}</td>
                <td>{{$abonnee->date_naissance}}</td>
                <td>{{$abonnee->niveau_scolaire}}</td>
                <td>{{$abonnee->adresse}}</td>
                <td>{{$abonnee->telephone}}</td>
                <td>{{$abonnee->categorie_abonnement}}</td>
                <td>{{$abonnee->montant_paye}}</td>
                <td style="display:flex;">
                <a href="{{url('edit/'.$abonnee->id)}}" class="btn btn-succes">Modifier</a>
                <a href="{{url('delete/'.$abonnee->id)}}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
        </tfoot>
    </table>
	</div>
</div>

@endsection