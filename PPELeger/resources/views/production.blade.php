@include('header')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">MEDICCode</th>
            <th scope="col">DateProd</th>
            <th scope="col">Quantité</th>
        </tr>
    </thead>
    <tbody>
@foreach ($production as $p)
    <tr>
        <th scope="row">{{$p->MEDICCode}}</th>
        <td>{{$p->DateProd}}</td>
        <td>{{$p->Qte}}</td>
    <tr>
@endforeach
    </tbody>
</table>