@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Mettre à jour la commande {{$commande->CdeNum}}</div>                   
                    <div class="card-body">
                        @if(Session::has('commande_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('commande_created')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('create-commande')}}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value={{$commande->CdeNum}}>
                            </div>
                            <div class="form-group">
                                <label for="MEDICNum">MEDICNum</label>
                                <input type="number" name="medicnum" class="form-control" placeholder="Précisez le numéro du médicament" value={{$commande->MEDICNum}}>
                            </div>
                            <div class="form-group">
                                <label for="MEDNum">MEDNum</label>
                                <input type="text" name="mednum" class="form-control" placeholder="Précisez le numéro du médecin" value={{$commande->MEDNum}}>
                            </div>
                            <div class="form-group">
                                <label for="CLINum">CLINum</label>
                                <input type="text" name="clinum" class="form-control" placeholder="Précisez le numéro du client" value={{$commande->CLINum}}>
                            </div>
                            <div class="form-group">
                                <label for="DateCde">Date de la commande</label>
                                <input type="date" name="datecde" class="form-control" placeholder="Entrez la date de la commande" value={{$commande->DateCde}}>
                            </div>
                            <div class="form-group">
                                <label for="Qte">Quantité</label>
                                <input type="text" name="qte" class="form-control" placeholder="Entrez la quantité du médicalement commandé" value={{$commande->Qte}}>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Ajouter une commande</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')