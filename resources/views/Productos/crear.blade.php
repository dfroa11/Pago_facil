<h1>Crear Producto</h1>
<form action="{{url('guardarproducto')}}"method="post">
@csrf
 Nombre: <input type="text" name="nombre" />
 <br/>
 valor unitario <input type="text" name="valor"/>
 <br/>
 <button type="submit">
 Guardar
 </button>
 </form>