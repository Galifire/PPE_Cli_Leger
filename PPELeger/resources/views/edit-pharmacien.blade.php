@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Mettre à jour le pharmacien {{$pharmacien->PHARNum}}</div>                   
                    <div class="card-body">
                        @if(Session::has('pharmacien_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('pharmacien_updated')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('update-pharmacien')}}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value={{$pharmacien->PHARNum}}>
                            </div>
                            <div class="form-group">
                                <label for="Nom">Nom du pharmacien</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrez le nom du pharmacien" value={{$pharmacien->Nom}}>
                            </div>
                            <div class="form-group">
                                <label for="Prenom">Prénom</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Entrez le prénom du pharmacien" value={{$pharmacien->Prenom}}>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Entrez l'email du pharmacien" value={{$pharmacien->Email}}>
                            </div>
                            <div class="form-group">
                                <label for="Telephone">Téléphone</label>
                                <input type="text" name="telephone" class="form-control" placeholder="Entrez le téléphone du pharmacien" value={{$pharmacien->Telephone}}>
                            </div>
                            <div class="form-group">
                                <label for="Poste">Poste</label>
                                <input type="text" name="poste" class="form-control" placeholder="Précisez le poste" value={{$pharmacien->Poste}}>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Ajouter un pharmacien</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')