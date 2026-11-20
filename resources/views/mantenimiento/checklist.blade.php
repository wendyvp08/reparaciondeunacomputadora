
@extends('layouts.app')
@section('titulo','Lista de revisión')
@section('contenido')

<h1>Lista de revisión</h1>

<h2>¿Qué es una lista de revisión?</h2>
<p>
Es una herramienta que permite comprobar que todas las
actividades de mantenimiento de una computadora se hayan
realizado correctamente. Ayuda a organizar el trabajo
y evitar que se olviden tareas importantes.
</p>

<h2>1. Seguridad antes del mantenimiento</h2>
<form>
<label><input type="checkbox"> Apagué completamente el equipo.</label>
<label><input type="checkbox"> Desconecté el cargador y los cables.</label>
<label><input type="checkbox"> Retiré la batería si es extraíble.</label>
<label><input type="checkbox"> Preparé un área de trabajo limpia.</label>
<label><input type="checkbox"> Utilicé protección antiestática.</label>
</form>

<h2>2. Limpieza física</h2>
<form>
<label><input type="checkbox"> Limpié el teclado.</label>
<label><input type="checkbox"> Limpié la pantalla.</label>
<label><input type="checkbox"> Limpié las entradas de ventilación.</label>
<label><input type="checkbox"> Revisé y limpié los ventiladores.</label>
<label><input type="checkbox"> Retiré el polvo de los componentes internos.</label>
<label><input type="checkbox"> Revisé los puertos y conexiones.</label>
</form>

<h2>3. Revisión de componentes</h2>
<form>
<label><input type="checkbox"> Revisé el estado de la memoria RAM.</label>
<label><input type="checkbox"> Revisé las conexiones del disco duro o SSD.</label>
<label><input type="checkbox"> Comprobé el estado de los cables.</label>
<label><input type="checkbox"> Revisé el funcionamiento de los ventiladores.</label>
<label><input type="checkbox"> Comprobé las temperaturas del equipo.</label>
<label><input type="checkbox"> Revisé el estado de la batería.</label>
</form>

<h2>4. Mantenimiento del sistema</h2>
<form>
<label><input type="checkbox"> Actualicé el sistema operativo.</label>
<label><input type="checkbox"> Actualicé los programas necesarios.</label>
<label><input type="checkbox"> Realicé un análisis antivirus.</label>
<label><input type="checkbox"> Eliminé archivos temporales innecesarios.</label>
<label><input type="checkbox"> Revisé el espacio disponible del disco.</label>
<label><input type="checkbox"> Realicé una copia de seguridad.</label>
</form>

<h2>5. Comprobación final</h2>
<form>
<label><input type="checkbox"> Verifiqué que todos los componentes estén conectados.</label>
<label><input type="checkbox"> Comprobé que el equipo encienda correctamente.</label>
<label><input type="checkbox"> Probé el teclado y el mouse.</label>
<label><input type="checkbox"> Revisé el sonido y la pantalla.</label>
<label><input type="checkbox"> Comprobé la conexión a internet.</label>
<label><input type="checkbox"> Confirmé que el equipo funcione correctamente.</label>
</form>

<h2>Resultado del mantenimiento</h2>
<p>
Al terminar la revisión, comprueba que todas las actividades
necesarias se hayan completado y registra cualquier problema
que requiera atención o reparación.
</p>

<h2>Conclusión</h2>
<p>
La lista de revisión permite llevar un control ordenado
del mantenimiento preventivo de una computadora.
Al completar cada actividad se facilita la detección
de fallas y se ayuda a conservar el equipo en buenas
condiciones de funcionamiento.
</p>

@endsection
