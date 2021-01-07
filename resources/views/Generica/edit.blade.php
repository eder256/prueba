<form action="" method="post" >


<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="pg_nombre" id="pg_nombre" value="{{$generica->pg_nombre}}">
<br/>
<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="pg_descripcion" id="pg_descripcion" value="{{$generica->pg_descripcion}}">
<br/>
<label for="clave">{{'clave'}}</label>
<input type="text" name="pg_clave" id="pg_clave" value="{{$generica->pg_clave}}">
<br/>
<label for="cap_id">{{'cap_id'}}</label>
<input type="text" name="cap_id" id="cap_id" value="{{$generica->cap_id}}">
<br/>
<label for="cto_id">{{'cto_id'}}</label>
<input type="text" name="cto_id" id="cto_id" value="{{$generica->cto_id}}">
<br/>
<input type="submit" value="Guardar">
</form> 