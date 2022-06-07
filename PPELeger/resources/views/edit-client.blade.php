@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Update Client {{$client->CLINum}}</div>                   
                    <div class="card-body">
                        @if(Session::has('client_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('client_updated')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('update-client'), $client->CLINum}}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value={{$client->CLINum}}>
                            </div>
                            <div class="form-group">
                                <label for="Nom">Nom du client</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrez le nom du client" value={{$client->Nom}}>
                            </div>
                            <div class="form-group">
                                <label for="Prénom">Prénom du client</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Entrez le prénom du client" value={{$client->Prenom}}>
                            </div>
                            <div class="form-group">
                                <label for="Adresse">Adresse du client</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Entrez le adresse du client" value={{$client->Adresse}}>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email du client</label>
                                <input type="text" name="email" class="form-control" placeholder="Entrez l'emails du client" value={{$client->Email}}>
                            </div>
                            <div class="form-group">
                                <label for="Telephone">Téléphone du client</label>
                                <input type="text" name="telephone" class="form-control" placeholder="Entrez le numéro de téléphone du client" value={{$client->Telephone}}>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Mettre à jour le client</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')