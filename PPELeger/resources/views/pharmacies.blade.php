@include('header')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">PHARCode</th>
            <th scope="col">Adresse</th>
            <th scope="col">Ville</th>
            <th scope="col">Effectif</th>
            <th scope="col">Liste de l'effectif</th>
        </tr>
    </thead>
    <tbody>
@foreach ($pharmacies as $p)
    <tr>
        <th scope="row">{{$p->PHARCode}}</th>
        <td>{{$p->Adresse}}</td>
        <td>{{$p->Ville}}</td>
        <td>{{$p->Effectif}}</td>
        <td><a href={{route('effectifInPharmacie', $p->PHARCode)}}><button type="button" class="btn btn-outline-success">Show List</button></a></td>
@endforeach
    </tbody>
</table>