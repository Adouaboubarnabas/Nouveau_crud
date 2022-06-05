@extends('layouts/master')

@section('content')
<main role="main" class="container hg-2">
  <div class="">
    <h2>Veuillez remplir les champs ci dessous!</h2>
  </div>
</main>

<div class="container-flud ml-5 mr-5 mt-4">
<div class="card ">
  <div class="card-header">
    <strong>Enregistrement d'un abonneé</strong>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
     <form class="row g-3" method="post" action="{{('abonnes.store')}}">
    @csrf
                                 
        <div class="col-4">
           <label for="inputName" class="form-label">Nom(s)</label>
           <input required type="text" name="nom" class="form-control" id="inputName">
        </div>
        <div class="col-4">
            <label for="inputFirstname" class="form-label">Prénom(s)</label>
            <input required type="text" name="prenom"class="form-control" id="inputFirstname">
        </div>
        <div class="col-4">
                  <label for="inputDatenaissance" class="form-label">Date de naissance</label>
                  <input required type="date" name="date_naissance" class="form-control" id="inputDatenaissance">
        </div>
        <div class="col-4 ">
                  <label for="inputDatenaissance" class="form-label">Niveau scolaire</label>
                  <select class="form-control" name="niveau_scolaire">
                    <option >Sixième</option>
                    <option >Cinquième</option>
                    <option >Quatrième</option>
                    <option >Troisième</option>
                    <option >Seconde</option>
                    <option >Première</option>
                    <option >Terminale</option>
                  </select>
        </div>
                <div class="col-4">
                  <label for="inputDatenaissance" class="form-label">Adresse d'habitation</label>
                  <input required type="text" name="adresse" class="form-control" id="inputAdresseHabitation">
                </div>
                <div class="col-4">
                  <label for="inputDatenaissance" class="form-label">Telephone</label>
                  <input required type="text" name="telephone" class="form-control" id="inputTelephone">
                </div>

                 <div class="col-4">
                  <label for="inputDatenaissance" class="form-label">Categorie Abonnement</label>
                  <select class="form-control" name="categorie_abonnement">
                    <option >Salle de formation</option>
                    <option >Internet</option>
                    <option >Bibliothèque</option>
                    <option >Restaurant</option>
                    <option >Salle de Sport</option>
                    <option >Cours d'Appui</option>
                  </select>
                 </div>

                <div class="col-4">
                  <label for="inputDatenaissance" class="form-label">Montant</label>
                  <input required type="integer"  name="montant_paye" class="form-control" id="inputPrimeSouscription">
                </div>                                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary "><i class="fas fa-save"></i> Valider la souscription</button>
                    <a  type="button" href="{{asset('/')}}" class="btn btn-danger ms-2"><i class="fas fa-backspace"></i> Retouner à la liste</a>
                </div>
             </form>
  </div>
</div>
</div>
  
</div>
@endsection
