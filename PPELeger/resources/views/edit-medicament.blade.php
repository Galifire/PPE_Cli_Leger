@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Mettre à jour le médicament {{$medicament->MEDICNum}}</div>                   
                    <div class="card-body">
                        @if(Session::has('medicament_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('medicament_updated')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('update-medicament'), $medicament->MEDICNum}}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value={{$medicament->MEDICNum}}>
                            </div>
                            <div class="form-group">
                                <label for="Nom">Nom du médicament</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrez le nom du client" value={{$medicament->Nom}}>
                            </div>
                            <div class="form-group">
                                <label for="Restrictions">Restrictions</label>
                                <input type="text" name="restrictions" class="form-control" placeholder="Précisez les restriction" value={{$medicament->Restrictions}}>
                            </div>
                            <div class="form-group">
                                <label for="Caracteristiques">Caractéristiques</label>
                                <input type="text" name="caracteristiques" class="form-control" placeholder="Précisez les caractéristiques du médicament" value={{$medicament->Caracteristiques}}>
                            </div>
                            <div class="form-group">
                                <label for="DelaiProd">Délai de production</label>
                                <input type="text" name="delaiprod" class="form-control" placeholder="Précisez le délai de production" value={{$medicament->DelaiProduction}}>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Mettre à jour le médicament</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')