@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Ajouter une commande</div>                   
                    <div class="card-body">
                        @if(Session::has('commande_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('commande_created')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('create-commande')}}">
                            @csrf
                            <div class="form-group">
                                <label for="MEDICNum">MEDICNum</label>
                                <input type="number" name="medicnum" class="form-control" placeholder="Précisez le numéro du médicament">
                            </div>
                            <div class="form-group">
                                <label for="MEDNum">MEDNum</label>
                                <input type="text" name="mednum" class="form-control" placeholder="Précisez le numéro du médecin">
                            </div>
                            <div class="form-group">
                                <label for="CLINum">CLINum</label>
                                <input type="text" name="clinum" class="form-control" placeholder="Précisez le numéro du client">
                            </div>
                            <div class="form-group">
                                <label for="DateCde">Date de la commande</label>
                                <input type="date" name="datecde" class="form-control" placeholder="Entrez la date de la commande">
                            </div>
                            <div class="form-group">
                                <label for="Qte">Quantité</label>
                                <input type="text" name="qte" class="form-control" placeholder="Entrez la quantité du médicalement commandé">
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