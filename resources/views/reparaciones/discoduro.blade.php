@extends('layouts.app')
@section('titulo','Cambio de disco duro')
@section('contenido')
<h1>Cambio de disco duro</h1>
<img class="imagen lado" src="{{ asset('imagenes/discoduro.svg') }}" alt="Disco duro">
<p>El disco guarda el sistema operativo y todos tus archivos. Cambiar un disco mecánico (HDD) por uno de estado sólido (SSD) es la mejora que más se nota: el equipo enciende en segundos y los programas abren mucho más rápido.</p>
<div class="limpiar"></div>
@include('partials.ficha',['tiempo'=>'30 a 45 minutos','nivel'=>'Intermedio','costo'=>'SSD de 500 GB: de 600 a 1,000 pesos','herramientas'=>'Desarmador Phillips, pulsera antiestática'])

<h2>Cuándo conviene cambiarlo</h2>
<ul>
<li>El equipo tarda varios minutos en encender.</li>
<li>Escuchas clics o zumbidos que antes no estaban.</li>
<li>Aparecen mensajes de disco dañado o archivos que no abren.</li>
<li>El disco está casi lleno y no te alcanza el espacio.</li>
</ul>
<div class="peligro"><strong>Si el disco hace clics, respalda ya.</strong> Cada minuto encendido puede dañar más tus datos. Copia lo importante a otro disco o a la nube antes de seguir.</div>

<h2>Qué tipo de disco comprar</h2>
<table>
<thead><tr><th>Tipo</th><th>Velocidad aproximada</th><th>Precio</th><th>Ideal para</th></tr></thead>
<tbody>
<tr><td>HDD mecánico</td><td>100 MB por segundo</td><td>Bajo</td><td>Guardar muchos archivos</td></tr>
<tr><td>SSD SATA de 2.5 pulgadas</td><td>500 MB por segundo</td><td>Medio</td><td>Equipos antiguos, la mejor mejora</td></tr>
<tr><td>SSD M.2 NVMe</td><td>2,000 a 7,000 MB por segundo</td><td>Medio alto</td><td>Equipos recientes con ranura M.2</td></tr>
</tbody>
</table>
<p>Revisa el manual de tu equipo para saber si usa SATA o M.2. Un SSD M.2 no entra en una conexión SATA.</p>

<h2>Antes de empezar</h2>
<ul>
<li>Respalda tus archivos o clona el disco con un programa como Clonezilla o Macrium Reflect.</li>
<li>Ten lista una <a href="{{ route('usbbooteable') }}">USB booteable</a> si vas a instalar el sistema desde cero.</li>
<li>Lee las <a href="{{ route('seguridad') }}">reglas de seguridad</a>.</li>
</ul>

<h2>Paso a paso</h2>
<ol>
<li>Apaga el equipo, desconecta el cable de corriente y retira la batería si es laptop.</li>
<li>Presiona el botón de encendido unos segundos para descargar la energía restante.</li>
<li>Ponte la pulsera antiestática o toca una parte metálica del gabinete.</li>
<li>Abre el gabinete o la tapa de servicio del disco.</li>
<li>Desconecta con cuidado el cable de datos <strong>SATA</strong> y el de energía. Jala del conector, no del cable.</li>
<li>Quita los tornillos o el soporte y saca el disco.</li>
<li>Coloca el disco nuevo en la misma posición y atornilla.</li>
<li>Conecta de nuevo los cables y cierra el equipo.</li>
<li>Enciende, entra a la <a href="{{ route('bios') }}">BIOS</a> y confirma que reconoce el disco.</li>
<li>Restaura tu copia o <a href="{{ route('instalarwindows') }}">instala el sistema operativo</a>.</li>
</ol>

<h2>Errores comunes</h2>
<div class="alerta">
<ul>
<li>Forzar un conector: los de SATA solo entran en una posición.</li>
<li>Olvidar el respaldo antes de formatear.</li>
<li>Comprar un SSD M.2 para una laptop que solo tiene SATA.</li>
<li>No revisar la BIOS cuando el disco nuevo no aparece.</li>
</ul>
</div>

<h2>Preguntas frecuentes</h2>
<details><summary>¿Puedo conservar el disco viejo?</summary><p>Sí. Puedes usarlo como disco de respaldo con una carcasa USB externa.</p></details>
<details><summary>¿Hay que desfragmentar un SSD?</summary><p>No. La desfragmentación es solo para discos mecánicos y en un SSD reduce su vida útil.</p></details>
<details><summary>¿Cuánto espacio necesito?</summary><p>Para uso normal, 256 GB es lo mínimo. Se recomiendan 500 GB o más.</p></details>
<p>Relacionado: <a href="{{ route('ram') }}">cambio de RAM</a> | <a href="{{ route('particiones') }}">particiones</a></p>
@endsection