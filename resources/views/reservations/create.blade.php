<form action="{{ route('reservations.store')}}" method="post">
    @csrf
    <input type="text" name="nom">
    <input type="text" name="prenom">
    <input type="text" name="num_piece">
    <select name="sexe" id="">
        <option value="">Feminin</option>
        <option value="">Masculin</option>
    </select>
    <select name="classe" id="">
        <option value="">ClasseA</option>
        <option value="">ClasseB</option>
    </select>
    <input type="number" name="vol_id">
    <input type="submit" value="Réserver">
</form>