@include('header')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">PHARCode</th>
            <th scope="col">Adresse</th>
            <th scope="col">Ville</th>
            <th scope="col">Effectif</th>
        </tr>
    </thead>
    <tbody>
@foreach ($pharmacies as $p)
    <tr onclick={{route('effectifInPharmacie', $p->PHARCode)}}>
        <th scope="row">{{$p->PHARCode}}</th>
        <td>{{$p->Adresse}}</td>
        <td>{{$p->Ville}}</td>
        <td>
            <a href={{route('effectifInPharmacie', $p->PHARCode)}}>
                <button type="button" class="btn btn-outline-success">{{$p->Effectif}}</button>
            </a>
        </td>
@endforeach
    </tbody>
</table>
<button onclick="topFunction()" id="topBtn" title="topBtn">^</button>
@include('footer')