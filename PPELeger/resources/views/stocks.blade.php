@include('header')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">PHARCode</th>
            <th scope="col">MEDICCode</th>
            <th scope="col">Qte</th>
        </tr>
    </thead>
    <tbody>
@foreach ($stocks as $s)
    <tr>
        <td>{{$s->PHARCode}}, {{$s->Pharmacie->Ville}}</td>
        <td>{{$s->Medicament->Nom}}</td>
        <td>{{$s->Qte}}</td>
    <tr>
@endforeach
    </tbody>
</table>
<button onclick="topFunction()" id="topBtn" title="topBtn">^</button>
@include('footer')