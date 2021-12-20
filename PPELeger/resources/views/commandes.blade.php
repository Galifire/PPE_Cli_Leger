@include('header')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">MEDICCode</th>
            <th scope="col">MEDNum</th>
            <th scope="col">CLINum</th>
            <th scope="col">DateCde</th>
            <th scope="col">Quantité</th>
        </tr>
    </thead>
    <tbody>
@foreach ($cdes as $c)
    <tr>
        <th scope="row">{{$c->MEDICCode}}</th>
        <td>{{$c->MEDNum}}</td>
        <td>{{$c->CLINum}}</td>
        <td>{{$c->DateCde}}</td>
        <td>{{$c->Qte}}</td>
    <tr>
@endforeach
    </tbody>
</table>