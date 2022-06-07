@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Mettre à jour le stock {{$stock->StockNum}}</div>                   
                    <div class="card-body">
                        @if(Session::has('stock_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('stock_updated')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('update-stock')}}">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value={{$stock->StockNum}}>
                            </div>
                            <div class="form-group">
                                <label for="MEDICNum">Numéro du médicament</label>
                                <input type="text" name="medicnum" class="form-control" placeholder="Entrez le numéro du médicament" value={{$stock->MEDICNum}}>
                            </div>
                            <div class="form-group">
                                <label for="DateProd">Date de stock</label>
                                <input type="text" name="dateprod" class="form-control" placeholder="Entrez la date de début de stock" value={{$stock->DateProd}}>
                            </div>
                            <div class="form-group">
                                <label for="Adresse">Quantité</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Entrez la quantité produite" value={{$stock->Qte}}>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Ajouter un stock</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')