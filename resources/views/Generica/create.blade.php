<form action="{{url('/generica')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}


<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="pg_nombre" id="pg_nombre" value="">
<br/>
<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="pg_descripcion" id="pg_descripcion" value="">
<br/>
<label for="clave">{{'clave'}}</label>
<input type="text" name="pg_clave" id="pg_clave" value="">
<br/>
<label for="cap_id">{{'cap_id'}}</label>
<input type="text" name="cap_id" id="cap_id" value="">
<br/>
<label for="cto_id">{{'cto_id'}}</label>
<input type="text" name="cto_id" id="cto_id" value="">
<br/>
<input type="submit" value="Guardar">
</form> 