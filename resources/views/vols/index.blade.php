<link rel="stylesheet" href="{{ asset('css/table.css')}}">
<button type="button" style="margin-left:90%; background-color:blue; color:white; margin: top 4%;">Cliquer ici pour réserver</button>
<table>
    <thead>
        <th>Code du vol</th>
        <th>Date de depart</th>
        <th>Heure de part</th>
        <th>Destination</th>
        <th>Nombre de place A</th>
        <th>Nombre de place B</th>
        <th>Prix classe A</th>
        <th>Prix classe B</th>
        <th col='3'>Action</th>
    </thead>
    <tbody>
    
        @foreach($avion as $plane)
        <tr>
            <td>{{$plane->code_vol}}</td>
            <td>{{$plane->date_depart}}</td>
            <td>{{$plane->heure_depart}}</td>
            <td>{{$plane->destination}}</td>
            <td>{{$plane->nbre_placeA}}</td>
            <td>{{$plane->nbre_placeB}}</td>
            <td>{{$plane->prix_classeA}}</td>
            <td>{{$plane->prix_classeB}}</</td>
           <td><a href="{{ route('vols.show', $plane->id)}}">Details</a></td>
           <td><a href="{{ route('vols.edit', $plane->id)}}">Modifier</a></td>
           <td>
            <form action="{{ route('vols.destroy', $plane->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">A djochi</button>
            </form>
           </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- la variable avion on a utilisé dans volcontroller dans fonction index -->