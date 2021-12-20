@include('header')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">MEDNum</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Email</th>
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
    <tr>
@endforeach
    </tbody>
</table>