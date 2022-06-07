@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Ajouter une pharmacie</div>                   
                    <div class="card-body">
                        @if(Session::has('pharmacie_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('pharmacie_created')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('create-pharmacie')}}">
                            @csrf
                            <div class="form-group">
                                <label for="Adresse">Adresse</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Entrez l'adresse de la pharmacie">
                            </div>
                            <div class="form-group">
                                <label for="Ville">Ville</label>
                                <input type="text" name="ville" class="form-control" placeholder="Entrez la ville de la pharmacie">
                            </div>
                            <div class="form-group">
                                <label for="Effectif">Effectif</label>
                                <input type="number" name="effectif" class="form-control" placeholder="Précisez l'effectif de la pharmacie">
                            </div>
                            <div class="form-group">
                                <label for="Horaires">Horaires</label>
                                <input type="text" name="horaires" class="form-control" placeholder="Précisez les horaires de la pharmacie">
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Ajouter une pharmacie</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')