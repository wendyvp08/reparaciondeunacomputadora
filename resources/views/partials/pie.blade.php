<footer>
<div>
<h4>Reparación de una Computadora</h4>
<p>Guías educativas para aprender a reparar, mantener y reinstalar equipos de cómputo.</p>
</div>
<div>
<h4>Aprende</h4>
<a href="{{ route('reparaciones') }}">Reparaciones</a><br>
<a href="{{ route('mantenimiento') }}">Mantenimiento</a><br>
<a href="{{ route('sistemas.index') }}">Sistemas operativos</a><br>
<a href="{{ route('seguridad') }}">Seguridad</a>
</div>
<div>
<h4>Ayuda</h4>
<a href="{{ route('diagnostico') }}">Diagnóstico de fallas</a><br>
<a href="{{ route('preguntas') }}">Preguntas frecuentes</a><br>
<a href="{{ route('consultas.crear') }}">Enviar una consulta</a><br>
<a href="{{ route('terminos') }}">Términos de uso</a>
</div>
<p class="limpiar">&copy; {{ date('Y') }} Reparación de una Computadora. Proyecto escolar.</p>
</footer>