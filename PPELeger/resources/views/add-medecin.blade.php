@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Ajouter un médecin</div>                   
                    <div class="card-body">
                        @if(Session::has('medecin_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('medecin_created')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('create-medecin')}}">
                            @csrf
                            <div class="form-group">
                                <label for="Nom">Nom du médecin</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrez le nom du médecin">
                            </div>
                            <div class="form-group">
                                <label for="Prénom">Prénom du médecin</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Entrez le prénom du médecin">
                            </div>
                            <div class="form-group">
                                <label for="Adresse">Adresse du médecin</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Entrez le adresse du médecin">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email du médecin</label>
                                <input type="text" name="email" class="form-control" placeholder="Entrez l'emails du médecin">
                            </div>
                            <div class="form-group">
                                <label for="Telephone">Téléphone du médecin</label>
                                <input type="text" name="telephone" class="form-control" placeholder="Entrez le numéro de téléphone du médecin">
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Ajouter un médecin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')