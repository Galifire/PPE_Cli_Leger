@include('header')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nom du médicament</th>
            <th scope="col">Nom du médecin</th>
            <th scope="col">Nom & Prénom du client</th>
            <th scope="col">Date de la commande</th>
            <th scope="col">Quantité</th>
        </tr>
    </thead>
    <tbody>
@foreach ($cdes as $c)
    <tr>
        <td>{{$c->Medicament->Nom}}</td>
        <td>{{$c->Medecin->Nom}}</td>
        <td>{{$c->Client->Nom}} {{$c->Client->Prenom}}</td>
        <td>{{$c->DateCde}}</td>
        <td>{{$c->Qte}}</td>
    <tr>
@endforeach
    </tbody>
</table>
<button onclick="topFunction()" id="topBtn" title="topBtn">^</button>
@include('footer')