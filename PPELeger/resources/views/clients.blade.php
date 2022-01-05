@include('header')

<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#newClientModal">
    Nouveau
</button>

<div class="modal fade" id="newClientModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Créer un client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>CLINum : </label>
                <input id="id"><br><br>

                <label>Nom : </label>
                <input id="nom"><br><br>

                <label>Prénom : </label>
                <input id="prenom"><br><br>

                <label>Adresse : </label>
                <input id="Adresse"><br><br>

                <label>Email : </label>
                <input id="Email"><br><br>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Create</button>
            </div>
        </div>
    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">CLINum</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
        </tr>
    </thead>
    <tbody>
@foreach ($clients as $c)
    <tr>
        <th scope="row">{{$c->CLINum}}</th>
        <td>{{$c->Nom}}</td>
        <td>{{$c->Prenom}}</td>
        <td>{{$c->Adresse}}</td>
        <td>{{$c->Email}}</td>
        <td>{{$c->Telephone}}</td>
        <td>
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#clientModal">
                Edit
            </button>
            <div class="modal fade" id="clientModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Mettre à jour le client {{$c->CLINum}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <label>CLINum : </label>
                                <input id="id" value={{$c->CLINum}} disabled><br><br>

                                <label>Nom : </label>
                                <input id="nom" value={{$c->Nom}}><br><br>

                                <label>Prénom : </label>
                                <input id="prenom" value={{$c->Prenom}}><br><br>

                                <label>Adresse : </label>
                                <input id="Adresse" value={{$c->Adresse}}><br><br>

                                <label>Email : </label>
                                <input id="Email" value={{$c->Email}}><br><br>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    <tr>
@endforeach
    </tbody>
</table>

<button onclick="topFunction()" id="topBtn" title="topBtn">^</button>
@include('footer')