@include('header')


<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Ajouter un stock</div>                   
                    <div class="card-body">
                        @if(Session::has('stock_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('stock_created')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('create-stock')}}">
                            @csrf
                            <div class="form-group">
                                <label for="MEDICNum">Numéro du médicament</label>
                                <input type="text" name="medicnum" class="form-control" placeholder="Entrez le numéro du médicament">
                            </div>
                            <div class="form-group">
                                <label for="DateProd">Date de stock</label>
                                <input type="text" name="dateprod" class="form-control" placeholder="Entrez la date de début de stock">
                            </div>
                            <div class="form-group">
                                <label for="Adresse">Quantité</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Entrez la quantité produite">
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