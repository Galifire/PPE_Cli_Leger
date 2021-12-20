@include('header')

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
    <tr>
@endforeach
    </tbody>
</table>