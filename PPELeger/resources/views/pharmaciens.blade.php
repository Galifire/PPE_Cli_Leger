@include('header')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">PHNum</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Pharmacie</th>
        </tr>
    </thead>
    <tbody>
@foreach ($pharmaciens as $p)
    <tr>
        <th scope="row">{{$p->PHNum}}</th>
        <td>{{$p->Nom}}</td>
        <td>{{$p->Prenom}}</td>
        <td>{{$p->Email}}</td>
        <td>{{$p->Telephone}}</td>
        <td>{{$p->PHARCode}}, {{$p->Pharmacie->Ville}}</td>
    <tr>
@endforeach
    </tbody>
</table>
<button onclick="topFunction()" id="topBtn" title="topBtn">^</button>
@include('footer')