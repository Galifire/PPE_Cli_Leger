@include('header')

<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        <a href={{route('add-stock')}} class="btn btn-success">Ajouter un stock</a>
                    </div>             
                    <div class="card-body">
                        @if (Session::has('stock_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('stock_deleted')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">PRODNum</th>
                                    <th scope="col">MEDICNum</th>
                                    <th scope="col">Date de stock</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Editer/Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($stock as $s)
                            <tr>
                                <th scope="row">{{$s->PRODNum}}</th>
                                <td>{{$s->MEDICNum}}</td>
                                <td>{{$s->DateProd}}</td>
                                <td>{{$s->Qte}}</td>
                                <td>
                                    <a href={{route('edit-stock', $s->PRODNum)}} class="btn btn-outline-warning">Edit</a>
                                    <a href={{route('delete-stock', $s->PRODNum)}} class="btn btn-outline-danger">Delete</a>
                                </td>
                            <tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 


<button onclick="topFunction()" id="topBtn" title="topBtn">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
</button>
@include('footer')