@include('header')

<section style='padding-top:60px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        <a href={{route('add-medecin')}} class="btn btn-success">Add Client</a>
                    </div>             
                    <div class="card-body">
                        @if (Session::has('medecin_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('medecin_deleted')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">MEDNum</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Editer/Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($medecins as $m)
                            <tr>
                                <th scope="row">{{$m->MEDNum}}</th>
                                <td>{{$m->Nom}}</td>
                                <td>{{$m->Prenom}}</td>
                                <td>{{$m->Adresse}}</td>
                                <td>{{$m->Email}}</td>
                                <td>{{$m->Telephone}}</td>
                                <td>
                                    <a href={{route('edit-medecin', $m->MEDNum)}} class="btn btn-outline-warning">Edit</a>
                                    <a href={{route('delete-medecin', $m->MEDNum)}} class="btn btn-outline-danger">Delete</a>
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