
<table class="table table-light">
    <thead class="thead-dark">
        <tr>
           
            <th>id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>clave</th>
            <th>cap_id</th>
            <th>cto_id</th>
        </tr>
    </thead>
    <tbody>
    @foreach($genericas as $generica)
        <tr>
            <td>{{$generica->pg_id}}</td>
            <td>{{$generica->pg_nombre}}</td>
            <td>{{$generica->pg_descripcion}}</td>
            <td>{{$generica->pg_clave}}</td>
            <td>{{$generica->cap_id}}</td>
            <td>{{$generica->cto_id}}</td>
            <td><a href="{{url('/generica/'.$generica->pg_id.'/edit')}}">
            Editar
            </a>
             | 
            
            <form method="post" action="{{url('/generica/'.$generica->pg_id)}}" >
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Desea borrar la fila?');">Borrar</button>
            </form>
            </td>      
        </tr>
    @endforeach    
    </tbody>
</table>