
<link rel="stylesheet" href="{{ asset('css/table.css')}}"><table>
    <thead>
        <th>Nom de passager</th>
        <th>Prenom</th>
        <th>Numéro de pièce de passager</th>
        <th>Sexe</th>
        <th>Choix de la classe</th>
        <th>Vol_id</th>
        <th col='3'>Action</th>
    </thead>
    <tbody>
         @foreach ($pass as $voleair)
        <tr>
        <td>{{$voleair->nom}}</td>
          <td>{{$voleair->prenom}}</td>
         <td>{{$voleair->num_piece}}</td>
         <td>{{$voleair->sexe}}</td>
         <td>{{$voleair->classe}}</td>
         <td>{{$voleair->vol_id}}</td>
         <td></td>
         <td></td>
         <td></td>
        
        </tr>
        @endforeach
    </tbody>
</table>