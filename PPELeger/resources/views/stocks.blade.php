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
        <th scope="row">{{$s->PHARCode}}</th>
        <td>{{$s->MEDICCode}}</td>
        <td>{{$s->Qte}}</td>
    <tr>
@endforeach
    </tbody>
</table>