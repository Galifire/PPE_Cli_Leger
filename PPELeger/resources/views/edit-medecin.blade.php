@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Mettre à jour le médecin {{$medecin->MEDNum}}</div>                   
                    <div class="card-body">
                        @if(Session::has('medecin_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('medecin_updated')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('update-medecin'), $medecin->MEDNum}}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" placeholder="Entrez le nom du médecin" value={{$medecin->MEDNum}}>
                            </div>
                            <div class="form-group">
                                <label for="Nom">Nom du médecin</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrez le nom du médecin" value={{$medecin->Nom}}>
                            </div>
                            <div class="form-group">
                                <label for="Prénom">Prénom du médecin</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Entrez le prénom du médecin" value={{$medecin->Prenom}}>
                            </div>
                            <div class="form-group">
                                <label for="Adresse">Adresse du médecin</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Entrez le adresse du médecin" value={{$medecin->Adresse}}>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email du médecin</label>
                                <input type="text" name="email" class="form-control" placeholder="Entrez l'emails du médecin" value={{$medecin->Email}}>
                            </div>
                            <div class="form-group">
                                <label for="Telephone">Téléphone du médecin</label>
                                <input type="text" name="telephone" class="form-control" placeholder="Entrez le numéro de téléphone du médecin" value={{$medecin->Telephone}}>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Mettre à jour le médecin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')