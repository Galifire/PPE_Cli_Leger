@include('header')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">MEDICCode</th>
            <th scope="col">Nom</th>
            <th scope="col">Restrictions</th>
            <th scope="col">Caractéristiques</th>
            <th scope="col">Délai de production (jours)</th>
        </tr>
    </thead>
    <tbody>
@foreach ($medics as $m)
    <tr>
        <th scope="row">{{$m->MEDICCode}}</th>
        <td>{{$m->Nom}}</td>
        <td>{{$m->Restrictions}}</td>
        <td>{{$m->Caracteristiques}}</td>
        <td>{{$m->DelaiProduction}}</td>
    <tr>
@endforeach
    </tbody>
</table>
<button onclick="topFunction()" id="topBtn" title="topBtn">^</button>
@include('footer')