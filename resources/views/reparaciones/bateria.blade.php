
@extends('layouts.app')
@section('titulo','Batería')
@section('contenido')

<h1>Cambio de batería de laptop</h1>

<img class="imagen lado" src="{{ asset('imagenes/laptop.svg') }}" alt="Ilustración de una laptop">

<h2>¿Qué es la batería de una laptop?</h2>
<p>
La batería es uno de los componentes más importantes de una laptop,
ya que proporciona la energía necesaria para que funcione sin estar
conectada directamente a la corriente eléctrica. Con el paso del tiempo,
su capacidad disminuye y puede ser necesario reemplazarla.
</p>

<h2>¿Cuándo es necesario cambiar la batería?</h2>
<p>Existen diferentes señales que indican que la batería necesita ser reemplazada:</p>

<ul>
    <li>La batería se descarga demasiado rápido.</li>
    <li>La laptop se apaga aunque indique que tiene carga.</li>
    <li>El equipo solamente funciona cuando está conectado al cargador.</li>
    <li>La batería tarda demasiado tiempo en cargarse.</li>
    <li>El sistema muestra un aviso de que es necesario reemplazarla.</li>
    <li>La batería presenta deformaciones o está hinchada.</li>
</ul>

<h2>Herramientas necesarias</h2>
<ul>
    <li>Desarmador adecuado para los tornillos de la laptop.</li>
    <li>Espátula de plástico para abrir la cubierta, si es necesario.</li>
    <li>Una batería nueva compatible con el modelo del equipo.</li>
    <li>Un espacio limpio, seco y bien iluminado.</li>
</ul>

<h2>Procedimiento para cambiar la batería</h2>
<ol>
    <li>Apaga completamente la laptop y desconecta el cargador.</li>
    <li>Retira todos los dispositivos conectados, como memorias USB y cables.</li>
    <li>Voltea la laptop cuidadosamente y colócala sobre una superficie plana.</li>
    <li>Localiza los seguros, tornillos o la cubierta que protege la batería.</li>
    <li>Abre la cubierta siguiendo las indicaciones del fabricante.</li>
    <li>Desconecta cuidadosamente el conector de la batería, si corresponde.</li>
    <li>Retira la batería sin aplicar fuerza ni doblarla.</li>
    <li>Coloca la batería nueva, verificando que sea compatible con el modelo exacto.</li>
    <li>Conecta nuevamente el cable de la batería y coloca los tornillos o la cubierta.</li>
    <li>Enciende la laptop y comprueba que reconozca correctamente la nueva batería.</li>
    <li>Conecta el cargador y verifica que la batería comience a cargar normalmente.</li>
</ol>

<h2>Medidas de seguridad</h2>
<ul>
    <li>Trabaja siempre con la laptop apagada y desconectada de la corriente.</li>
    <li>No utilices objetos metálicos para hacer palanca sobre la batería.</li>
    <li>No perfores, aplastes ni dobles la batería.</li>
    <li>Evita tocar los contactos eléctricos con las manos húmedas.</li>
    <li>Utiliza únicamente baterías originales o de calidad certificada y compatibles.</li>
    <li>Si no tienes experiencia, solicita ayuda a un técnico especializado.</li>
</ul>

<h2>¿Qué hacer con una batería dañada?</h2>
<p>
Si la batería está hinchada, caliente, deformada o presenta algún daño,
deja de utilizar la laptop y no intentes retirar la batería por tu cuenta.
No la presiones ni la perfores. Solicita ayuda a un técnico especializado
para que la retire de forma segura.
</p>
<p>
Las baterías usadas deben llevarse a un centro de recolección o reciclaje
especializado. Nunca deben tirarse a la basura común.
</p>

<h2>Recomendaciones para cuidar la batería</h2>
<ul>
    <li>Evita exponer la laptop a temperaturas muy altas.</li>
    <li>Utiliza un cargador adecuado para tu equipo.</li>
    <li>No dejes la laptop en lugares donde pueda recibir golpes.</li>
    <li>Mantén actualizado el sistema operativo.</li>
    <li>Revisa periódicamente el estado de salud de la batería.</li>
</ul>

<h2>Conclusión</h2>
<p>
Cambiar la batería de una laptop permite recuperar su autonomía y mejorar
su funcionamiento cuando la batería anterior ya no conserva suficiente
energía. Es importante utilizar una batería compatible, seguir las
medidas de seguridad y realizar el procedimiento correctamente para
evitar daños en el equipo.
</p>

@endsection
