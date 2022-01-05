@include('header')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nom du Médicament</th>
            <th scope="col">Date de production</th>
            <th scope="col">Quantité</th>
        </tr>
    </thead>
    <tbody>
@foreach ($production as $p)
    <tr>
        <td>{{$p->Medicament->Nom}}</td>
        <td>{{$p->DateProd}}</td>
        <td>{{$p->Qte}}</td>
    <tr>
@endforeach
    </tbody>
</table>
<button onclick="topFunction()" id="topBtn" title="topBtn">^</button>
@include('footer')