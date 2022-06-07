@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Mettre à jour la pharmacie {{$pharmacie->PHNum}}</div>                   
                    <div class="card-body">
                        @if(Session::has('pharmacie_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('pharmacie_updated')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('update-pharmacie')}}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value={{$pharmacie->PHNum}}>
                            </div>
                            <div class="form-group">
                                <label for="Adresse">Adresse</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Entrez l'adresse de la pharmacie" value={{$pharmacie->Adresse}}>
                            </div>
                            <div class="form-group">
                                <label for="Ville">Ville</label>
                                <input type="text" name="ville" class="form-control" placeholder="Entrez la ville de la pharmacie" value={{$pharmacie->Ville}}>
                            </div>
                            <div class="form-group">
                                <label for="Effectif">Effectif</label>
                                <input type="number" name="effectif" class="form-control" placeholder="Précisez l'effectif de la pharmacie" value={{$pharmacie->Effectif}}>
                            </div>
                            <div class="form-group">
                                <label for="Horaires">Horaires</label>
                                <input type="text" name="horaires" class="form-control" placeholder="Précisez les horaires de la pharmacie" value={{$pharmacie->Horaires}}>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Mettre à jour la pharmacie</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')