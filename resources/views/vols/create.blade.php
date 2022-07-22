<link rel="stylesheet" href="{{ asset('css/table.css')}}">
<fieldset class="tou">
    <div class="titre">
        <h3>La reservation est un sens anticipation</h3>
    </div>
    <form class="milieu" action="{{ route('vols.store')}}" method="post"><br><br>
       @csrf
        <label for="">Code_vol:</label><br>
        <input class="ecris" type="text" name="code_vol"><br><br>
        <label  for="">Date_depart:</label><br>
        <input class="ecris"  type="date" name="date_depart"><br><br>
        <label for="">Heure_ depart:</label><br>
        <input class="ecris" type="time" name="heure_depart"><br><br>
        <label for="">Destination:</label><br>
        <input class="ecris" type="text" name="destination"><br><br>
        <label for="">Nombre_placeA:</label><br>
        <input class="ecris" type="number" name="nbre_placeA"><br><br>
        <label for="">Nombre_placeB:</label><br>
        <input class="ecris" type="number" name="nbre_placeB"><br><br>
        <label for="">Prix_classeA:</label><br>
        <input class="ecris" type="number" name="prix_classeA"><br><br>
        <label for="">Prix_classeB:</label><br>
        <input class="ecris" type="number" name="prix_classeB"><br><br> 
        <input class="enreg" type="submit" value="Enregistrer">   
    </form>
</fieldset>
