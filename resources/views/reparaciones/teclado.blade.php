
@extends('layouts.app')
@section('titulo','Teclado')
@section('contenido')

<h1>Cambio de teclado de laptop</h1>

<img class="imagen lado" src="{{ asset('imagenes/laptop.svg') }}" alt="Ilustración">

<h2>¿Qué es el cambio de teclado?</h2>
<p>
El cambio de teclado de una laptop es un procedimiento de mantenimiento
que consiste en retirar el teclado dañado y reemplazarlo por uno nuevo.
Se realiza cuando algunas teclas dejan de funcionar, están rotas,
se quedan presionadas o presentan problemas al escribir.
</p>

<h2>Herramientas necesarias</h2>
<ul>
<li>Desarmadores de precisión.</li>
<li>Herramientas plásticas para abrir la laptop.</li>
<li>Pinzas de precisión.</li>
<li>Teclado nuevo compatible con el modelo.</li>
<li>Pulsera antiestática.</li>
</ul>

<h2>Procedimiento para cambiar el teclado</h2>
<ol>
<li>Apaga completamente la laptop y desconecta el cargador.</li>
<li>Retira la batería si es extraíble y desconecta la alimentación interna siguiendo las indicaciones del fabricante.</li>
<li>Identifica los tornillos o seguros que sujetan el teclado.</li>
<li>Retira los tornillos correspondientes y libera los seguros con una herramienta plástica.</li>
<li>Levanta cuidadosamente el teclado sin jalarlo demasiado.</li>
<li>Localiza el cable plano que conecta el teclado con la tarjeta madre.</li>
<li>Libera el seguro del conector y desconecta el cable con cuidado.</li>
<li>Coloca el teclado nuevo y conecta correctamente su cable plano.</li>
<li>Asegura el teclado con sus tornillos o sujetadores.</li>
<li>Verifica que quede bien colocado y realiza una prueba de funcionamiento.</li>
</ol>

<h2>Recomendaciones</h2>
<ul>
<li>Utiliza un teclado compatible con la marca y modelo de la laptop.</li>
<li>No fuerces las teclas ni los seguros del teclado.</li>
<li>Evita tocar directamente los circuitos electrónicos.</li>
<li>Mantén los tornillos organizados para no perderlos.</li>
<li>Trabaja en una superficie limpia y libre de humedad.</li>
<li>Si el conector está dañado, solicita ayuda de un técnico.</li>
</ul>

<h2>¿Cómo identificar un teclado dañado?</h2>
<p>
Un teclado puede necesitar reemplazo cuando algunas teclas no responden,
escribe caracteres incorrectos, presenta teclas desprendidas o deja
de funcionar después de un derrame de líquido. Antes de cambiarlo,
es recomendable revisar que el problema no sea de software.
</p>

<h2>Prueba de funcionamiento</h2>
<p>
Después de instalar el teclado, enciende la laptop y comprueba que
todas las teclas funcionen correctamente. Prueba las letras,
números, teclas especiales, espacios y funciones.
También puedes utilizar el Bloc de notas para verificar la escritura.
</p>

<h2>Conclusión</h2>
<p>
El cambio de teclado es una reparación importante para recuperar
la comodidad y funcionalidad de una laptop. Realizar el procedimiento
con cuidado y utilizar piezas compatibles ayuda a evitar daños
y garantiza un mejor funcionamiento del equipo.
</p>

@endsection
