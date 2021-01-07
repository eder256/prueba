<table class="table table-light">
    <thead class="thead-light">
        <tr>
            
            <th>pe_id</th>
            <th>pg_id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Compras Directas</th>
            <th>clave</th>
            <th>reductible</th>
            <th>cedula</th>
            <th>clc</th>
            <th>tg_id</th>
            <th>og_id</th>
            <th>tno_id</th>
            <th>idp_id</th>
            <th>clg_id</th>
        </tr>
    </thead>
    <tbody>
    @foreach($especificas as $especifica)
        <tr>
            <td>{{$especifica->pe_id}}</td>
            <td>{{$especifica->pg_id}}</td>
            <td>{{$especifica->pe_nombre}}</td>
            <td>{{$especifica->pe_comprasDirectas}}</td>
            <td>{{$especifica->pe_descripcion}}</td>
            <td>{{$especifica->pe_clave}}</td>
            <td>{{$especifica->pe_reductible}}</td>
            <td>{{$especifica->pe_cedula}}</td>
            <td>{{$especifica->pe_clc}}</td>
            <td>{{$especifica->tg_id}}</td>
            <td>{{$especifica->og_id}}</td>
            <td>{{$especifica->tno_id}}</td>
            <td>{{$especifica->idp_id}}</td>
            <td>{{$especifica->clg_id}}</td>
            <td>
            <a href="{{url('/especifica/'.$especifica->pe_id.'/edit')}}">
            Editar
            </a>
             | 
            
            <form method="post" action="{{url('/especifica/'.$especifica->pe_id)}}" >
            {{csrf_field()}} 
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Desea borrar la fila?');">Borrar</button>
            </form>
            </td>      
        </tr>
    @endforeach    
    </tbody>
</table>