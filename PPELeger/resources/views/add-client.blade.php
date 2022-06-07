@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Ajouter un client</div>                   
                    <div class="card-body">
                        @if(Session::has('client_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('client_created')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('create-client')}}">
                            @csrf
                            <div class="form-group">
                                <label for="Nom">Nom du client</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrez le nom du client">
                            </div>
                            <div class="form-group">
                                <label for="Prénom">Prénom du client</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Entrez le prénom du client">
                            </div>
                            <div class="form-group">
                                <label for="Adresse">Adresse du client</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Entrez l'adresse du client">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email du client</label>
                                <input type="text" name="email" class="form-control" placeholder="Entrez l'email du client">
                            </div>
                            <div class="form-group">
                                <label for="Telephone">Téléphone du client</label>
                                <input type="text" name="telephone" class="form-control" placeholder="Entrez le numéro de téléphone du client">
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Ajouter un client</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')