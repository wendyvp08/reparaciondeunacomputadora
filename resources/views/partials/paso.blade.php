<div class="paso">
<img class="pasoimg" src="{{ asset('imagenes/'.$imagen.'.svg') }}" alt="{{ $titulo }}">
<h3><span class="num">{{ $numero }}</span>{{ $titulo }}</h3>
<p>{!! $texto !!}</p>
@if(isset($consejo))
<div class="consejo"><strong>Consejo:</strong> {!! $consejo !!}</div>
@endif
</div>