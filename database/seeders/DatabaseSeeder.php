<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Guia;
use App\Models\Herramienta;
use App\Models\Sistema;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $cat = [
            'Hardware' => Categoria::create(['nombre' => 'Hardware', 'descripcion' => 'Cambio y reparación de piezas']),
            'Mantenimiento' => Categoria::create(['nombre' => 'Mantenimiento', 'descripcion' => 'Limpieza y cuidado preventivo']),
            'Software' => Categoria::create(['nombre' => 'Software', 'descripcion' => 'Sistemas operativos y programas']),
        ];

        $datos = [
            'Desarmador Phillips' => 'Para tornillos del gabinete y de los discos',
            'Pulsera antiestática' => 'Descarga la electricidad estática del cuerpo',
            'Pasta térmica' => 'Mejora el contacto entre procesador y disipador',
            'Alcohol isopropílico' => 'Limpia pasta vieja y contactos',
            'Aire comprimido' => 'Saca el polvo sin tocar los componentes',
            'Memoria USB' => 'Para instalar un sistema operativo',
        ];
        $her = [];
        foreach ($datos as $nombre => $descripcion) {
            $her[$nombre] = Herramienta::create(['nombre' => $nombre, 'descripcion' => $descripcion]);
        }

        $guias = [
            ['Hardware', 'Cambiar el disco duro', 'Sustituye un disco por uno nuevo HDD o SSD', 'Intermedio', 30,
                ['Desarmador Phillips', 'Pulsera antiestática'],
                ['Apaga y desconecta el equipo', 'Abre el gabinete y localiza el disco', 'Retira cables y tornillos y saca el disco', 'Instala el nuevo, conecta los cables y cierra']],
            ['Hardware', 'Cambiar la memoria RAM', 'Amplía o reemplaza los módulos de memoria', 'Fácil', 10,
                ['Pulsera antiestática'],
                ['Apaga y desconecta el equipo', 'Abre las pestañas laterales del slot', 'Retira el módulo viejo', 'Inserta el nuevo hasta escuchar el clic']],
            ['Hardware', 'Cambiar el procesador', 'Reemplaza el CPU respetando el socket', 'Difícil', 45,
                ['Desarmador Phillips', 'Pulsera antiestática', 'Pasta térmica', 'Alcohol isopropílico'],
                ['Retira el disipador con cuidado', 'Levanta la palanca del socket y saca el CPU', 'Coloca el nuevo alineando el triángulo dorado', 'Aplica pasta térmica y vuelve a montar el disipador']],
            ['Hardware', 'Cambiar la pasta térmica', 'Renueva la pasta para bajar temperaturas', 'Intermedio', 25,
                ['Pasta térmica', 'Alcohol isopropílico'],
                ['Retira el disipador', 'Limpia la pasta vieja con alcohol', 'Coloca una gota del tamaño de un chícharo', 'Monta el disipador y aprieta en cruz']],
            ['Mantenimiento', 'Mantenimiento preventivo completo', 'Limpieza interna, externa y de software', 'Fácil', 40,
                ['Aire comprimido', 'Alcohol isopropílico', 'Desarmador Phillips'],
                ['Apaga y desconecta todo', 'Sopla el polvo de ventiladores y disipadores', 'Limpia el exterior con un paño', 'Actualiza el sistema y revisa el antivirus']],
            ['Software', 'Instalar un sistema operativo', 'Windows o Linux desde una memoria USB', 'Intermedio', 60,
                ['Memoria USB'],
                ['Descarga la ISO del sitio oficial', 'Crea la memoria USB booteable', 'Entra a la BIOS y elige el USB', 'Sigue el asistente de instalación']],
        ];

        foreach ($guias as $g) {
            $guia = Guia::create([
                'categoriaid' => $cat[$g[0]]->id,
                'titulo' => $g[1],
                'resumen' => $g[2],
                'nivel' => $g[3],
                'minutos' => $g[4],
            ]);
            $ids = [];
            foreach ($g[5] as $nombre) {
                $ids[] = $her[$nombre]->id;
            }
            $guia->herramientas()->attach($ids);
            foreach ($g[6] as $i => $texto) {
                $guia->pasos()->create(['numero' => $i + 1, 'instruccion' => $texto]);
            }
        }

        $sistemas = [
            ['Windows 11', 'Windows', '24H2', '6 GB', 'microsoft.com'],
            ['Windows 10', 'Windows', '22H2', '5 GB', 'microsoft.com'],
            ['Ubuntu Desktop', 'Linux', '24.04 LTS', '6 GB', 'ubuntu.com'],
            ['Linux Mint', 'Linux', '22', '3 GB', 'linuxmint.com'],
            ['Debian', 'Linux', '12', '4 GB', 'debian.org'],
            ['Fedora Workstation', 'Linux', '41', '2 GB', 'fedoraproject.org'],
        ];
        foreach ($sistemas as $s) {
            Sistema::create(['nombre' => $s[0], 'familia' => $s[1], 'version' => $s[2], 'tamano' => $s[3], 'sitio' => $s[4]]);
        }
    }
}