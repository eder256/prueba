<form action="{{url('/especifica')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="pg_id">{{'pg_id'}}</label>
<input type="text" name="pg_id" id="pg_id" value="">
<br/>
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="pe_nombre" id="pe_nombre" value="">
<br/>
<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="pe_descripcion" id="pe_descripcion" value="">
<br/>
<label for="ComprasDirectas">{{'Compras Directas'}}</label>
<input type="text" name="pe_comprasDirectas" id="pe_comprasDirectas" value="">
<br/>
<label for="clave">{{'clave'}}</label>
<input type="text" name="pe_clave" id="pe_clave" value="">
<br/>
<label for="reductible">{{'reductible'}}</label>
<input type="text" name="pe_reductible" id="pe_reductible" value="">
<br/>
<label for="cedula">{{'cedula'}}</label>
<input type="text" name="pe_cedula" id="pe_cedula" value="">
<br/>
<label for="pe_clc">{{'pe_clc'}}</label>
<input type="text" name="pe_clc" id="pe_clc" value="">
<br/>
<label for="tg_id">{{'tg_id'}}</label>
<input type="text" name="tg_id" id="tg_id" value="">
<br/>
<label for="og_id">{{'og_id'}}</label>
<input type="text" name="og_id" id="og_id" value="">
<br/>
<label for="tno_id">{{'tno_id'}}</label>
<input type="text" name="tno_id" id="tno_id" value="">
<br/>
<label for="idp_id">{{'idp_id'}}</label>
<input type="text" name="idp_id" id="idp_id" value="">
<br/>
<label for="clg_id">{{'clg_id'}}</label>
<input type="text" name="clg_id" id="clg_id" value="">
<br/>
<input type="submit" value="Guardar">
</form> 