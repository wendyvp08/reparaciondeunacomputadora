<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\GuiaController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

$i = InicioController::class;
$g = GuiaController::class;
$c = ConsultaController::class;

// InicioController (15 rutas)
Route::get('/', [$i, 'inicio'])->name('inicio');
Route::get('/acercade', [$i, 'pagina'])->defaults('vista', 'paginas.acercade')->name('acercade');
Route::get('/contacto', [$i, 'pagina'])->defaults('vista', 'paginas.contacto')->name('contacto');
Route::get('/glosario', [$i, 'pagina'])->defaults('vista', 'paginas.glosario')->name('glosario');
Route::get('/preguntas', [$i, 'pagina'])->defaults('vista', 'paginas.preguntas')->name('preguntas');
Route::get('/seguridad', [$i, 'pagina'])->defaults('vista', 'paginas.seguridad')->name('seguridad');
Route::get('/diagnostico', [$i, 'pagina'])->defaults('vista', 'paginas.diagnostico')->name('diagnostico');
Route::get('/sintomas', [$i, 'pagina'])->defaults('vista', 'paginas.sintomas')->name('sintomas');
Route::get('/pitidos', [$i, 'pagina'])->defaults('vista', 'paginas.pitidos')->name('pitidos');
Route::get('/temperaturas', [$i, 'pagina'])->defaults('vista', 'paginas.temperaturas')->name('temperaturas');
Route::get('/repuestos', [$i, 'pagina'])->defaults('vista', 'paginas.repuestos')->name('repuestos');
Route::get('/terminos', [$i, 'pagina'])->defaults('vista', 'paginas.terminos')->name('terminos');
Route::get('/recursos', [$i, 'pagina'])->defaults('vista', 'paginas.recursos')->name('recursos');
Route::get('/mapa', [$i, 'pagina'])->defaults('vista', 'paginas.mapa')->name('mapa');
Route::get('/etiquetas', [$i, 'pagina'])->defaults('vista', 'paginas.etiquetas')->name('etiquetas');

// GuiaController: base de datos (8 rutas)
Route::get('/guias', [$g, 'guias'])->name('guias.index');
Route::get('/guias/{id}', [$g, 'guia'])->name('guias.ver');
Route::get('/categorias', [$g, 'categorias'])->name('categorias.index');
Route::get('/categorias/{id}', [$g, 'categoria'])->name('categorias.ver');
Route::get('/herramientas', [$g, 'herramientas'])->name('herramientas.index');
Route::get('/herramientas/{id}', [$g, 'herramienta'])->name('herramientas.ver');
Route::get('/sistemas', [$g, 'sistemas'])->name('sistemas.index');
Route::get('/sistemas/{id}', [$g, 'sistema'])->name('sistemas.ver');

// GuiaController: sistemas operativos (7 rutas)
Route::get('/windows', [$g, 'pagina'])->defaults('vista', 'sistemas.windows')->name('windows');
Route::get('/linux', [$g, 'pagina'])->defaults('vista', 'sistemas.linux')->name('linux');
Route::get('/usbbooteable', [$g, 'pagina'])->defaults('vista', 'sistemas.usbbooteable')->name('usbbooteable');
Route::get('/instalarwindows', [$g, 'pagina'])->defaults('vista', 'sistemas.instalarwindows')->name('instalarwindows');
Route::get('/instalarlinux', [$g, 'pagina'])->defaults('vista', 'sistemas.instalarlinux')->name('instalarlinux');
Route::get('/bios', [$g, 'pagina'])->defaults('vista', 'sistemas.bios')->name('bios');
Route::get('/particiones', [$g, 'pagina'])->defaults('vista', 'sistemas.particiones')->name('particiones');

// GuiaController: mantenimiento (6 rutas)
Route::get('/mantenimiento', [$g, 'pagina'])->defaults('vista', 'mantenimiento.index')->name('mantenimiento');
Route::get('/limpiezainterna', [$g, 'pagina'])->defaults('vista', 'mantenimiento.limpiezainterna')->name('limpiezainterna');
Route::get('/limpiezaexterna', [$g, 'pagina'])->defaults('vista', 'mantenimiento.limpiezaexterna')->name('limpiezaexterna');
Route::get('/mantenimientosoftware', [$g, 'pagina'])->defaults('vista', 'mantenimiento.mantenimientosoftware')->name('mantenimientosoftware');
Route::get('/calendario', [$g, 'pagina'])->defaults('vista', 'mantenimiento.calendario')->name('calendario');
Route::get('/checklist', [$g, 'pagina'])->defaults('vista', 'mantenimiento.checklist')->name('checklist');

// GuiaController: reparaciones (9 rutas)
Route::get('/reparaciones', [$g, 'pagina'])->defaults('vista', 'reparaciones.index')->name('reparaciones');
Route::get('/discoduro', [$g, 'pagina'])->defaults('vista', 'reparaciones.discoduro')->name('discoduro');
Route::get('/ram', [$g, 'pagina'])->defaults('vista', 'reparaciones.ram')->name('ram');
Route::get('/procesador', [$g, 'pagina'])->defaults('vista', 'reparaciones.procesador')->name('procesador');
Route::get('/pastatermica', [$g, 'pagina'])->defaults('vista', 'reparaciones.pastatermica')->name('pastatermica');
Route::get('/fuente', [$g, 'pagina'])->defaults('vista', 'reparaciones.fuente')->name('fuente');
Route::get('/bateria', [$g, 'pagina'])->defaults('vista', 'reparaciones.bateria')->name('bateria');
Route::get('/pantalla', [$g, 'pagina'])->defaults('vista', 'reparaciones.pantalla')->name('pantalla');
Route::get('/teclado', [$g, 'pagina'])->defaults('vista', 'reparaciones.teclado')->name('teclado');

// ConsultaController: formulario con CRUD (8 rutas)
Route::get('/consultas', [$c, 'index'])->name('consultas.index');
Route::get('/consultas/nueva', [$c, 'crear'])->name('consultas.crear');
Route::post('/consultas', [$c, 'guardar'])->name('consultas.guardar');
Route::get('/consultas/{id}', [$c, 'ver'])->name('consultas.ver');
Route::get('/consultas/{id}/editar', [$c, 'editar'])->name('consultas.editar');
Route::put('/consultas/{id}', [$c, 'actualizar'])->name('consultas.actualizar');
Route::delete('/consultas/{id}', [$c, 'eliminar'])->name('consultas.eliminar');
Route::get('/gracias', [$c, 'pagina'])->defaults('vista', 'consultas.gracias')->name('gracias');