@include('header')
@foreach($client ?? '' as $c)
<div>
    <form method="POST">
        <label>CLINum : </label>
        @if(isset($c->CLINum))
        <input name="CLINum" value={{$c->CLINum}} disabled><br><br>
            @else
            <input name="CLINum" value={{$c->CLINum}}><br><br>
        @endif

        <label>Nom : </label>
        <input name="nom" value={{$c->Nom}}><br><br>

        <label>Prénom : </label>
        <input name="prenom" value={{$c->Prenom}}><br><br>

        <label>Adresse : </label>
        <input name="adresse" value={{$c->Adresse}}><br><br>

        <label>Email : </label>
        <input name="email"value={{$c->Email}}><br><br>

        <div class="footer">
            <a href={{route('clients')}}><button class="btn btn-outline-danger">Cancel</button></a>
            <a href={{route('clients')}}><button type="submit" class="btn btn-success">Validate</button></a>
        </div>
    </form>
</div>
@endforeach
@include('footer')