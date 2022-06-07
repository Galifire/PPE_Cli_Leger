@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Ajouter un pharmacien</div>                   
                    <div class="card-body">
                        @if(Session::has('pharmacien_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('pharmacien_created')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('create-pharmacien')}}">
                            @csrf
                            <div class="form-group">
                                <label for="Nom">Nom du pharmacien</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrez le nom du pharmacien">
                            </div>
                            <div class="form-group">
                                <label for="Prenom">Prénom</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Entrez le prénom du pharmacien">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Entrez l'email du pharmacien">
                            </div>
                            <div class="form-group">
                                <label for="Telephone">Téléphone</label>
                                <input type="text" name="telephone" class="form-control" placeholder="Entrez le téléphone du pharmacien">
                            </div>
                            <div class="form-group">
                                <label for="Poste">Poste</label>
                                <input type="text" name="poste" class="form-control" placeholder="Précisez le poste">
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