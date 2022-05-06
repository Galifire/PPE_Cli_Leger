@include('header')
<div class="form">
    <form method="POST">
        <label>CLINum : </label>
        <input name="CLINum"><br><br>

        <label>Nom : </label>
        <input name="nom"><br><br>

        <label>Prénom : </label>
        <input name="prenom"><br><br>

        <label>Adresse : </label>
        <input name="adresse"><br><br>

        <label>Email : </label>
        <input name="email"><br><br>
        
        <div class="footer">
            <a href={{route('clients')}}><button class="btn btn-outline-danger">Cancel</button></a>
            <a href={{route('clients')}}><button type="submit" class="btn btn-success" onclick={{\App\Http\Controllers\ClientsController::store($_POST)}}>Validate</button></a>
        </div>
    </form>
</div>
@include('footer')