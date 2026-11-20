<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('titulo') | Reparación de una Computadora</title>
<style>
body{margin:0;font:16px/1.7 Verdana,Arial;background:#f1f4f9;color:#1b2430}
img{max-width:100%;height:auto}
header{background:#0b2545;color:#fff;padding:22px 6%}
header h1{margin:0;font:bold 28px Verdana;color:#fff}
header small{color:#9fc3f0}
nav{background:#13315c;position:sticky;top:0;padding:0 6%;overflow:hidden}
nav a{float:left;color:#fff;padding:14px 18px;font:bold 14px Verdana}
nav a:hover{background:#1f5aa6}
main{width:88%;margin:25px auto;background:#fff;padding:25px 35px;border:1px solid #d5dde8}
h1{font:bold 30px Verdana;color:#0b2545;margin:0 0 12px}
h2{font:bold 21px Verdana;color:#13315c;margin:28px 0 12px;background:#eaf1fb;padding:8px 14px;border:1px solid #cbdcf2}
h3{font:bold 18px Verdana;color:#1f5aa6;margin:0 0 6px}
li{margin:0 0 8px}
a{color:#1f5aa6}
.hero{background:#0b2545;color:#fff;padding:30px;margin:0 0 25px;overflow:hidden}
.hero img{float:right;width:38%}
.hero h1{color:#fff;font:bold 34px Verdana}
.hero p{font:17px/1.6 Verdana;color:#cfe2fa}
.hero a{color:#0b2545}
.boton{display:inline-block;background:#f5a623;color:#0b2545;padding:11px 22px;font:bold 15px Verdana;margin:0 10px 10px 0;border:0;cursor:pointer}
button{background:#1f5aa6;color:#fff;padding:11px 22px;font:bold 15px Verdana;border:0;cursor:pointer}
.dato{float:left;width:27%;margin:1.5%;background:#13315c;color:#fff;padding:14px 20px}
.dato strong{font:bold 34px Verdana;color:#f5a623}
.tarjeta{float:left;width:29%;margin:1.5%;background:#fff;border:1px solid #d5dde8;padding:0 0 14px}
.tarjeta:hover{border:1px solid #1f5aa6}
.tarjeta img{width:100%}
.texto{padding:0 16px}
.imagen{width:100%;border:1px solid #d5dde8;margin:10px 0}
.lado{float:right;width:42%;margin:0 0 15px 25px}
.ficha{background:#eaf1fb;border:1px solid #cbdcf2;padding:14px 18px;margin:15px 0;overflow:hidden}
.ficha div{float:left;width:25%;font:14px/1.5 Verdana}
.consejo{background:#e3f5e8;border:1px solid #8bc79a;padding:12px 18px;margin:15px 0}
.alerta{background:#fff4d6;border:1px solid #f0c24d;padding:12px 18px;margin:15px 0}
.peligro{background:#fde2e2;border:1px solid #e39a9a;padding:12px 18px;margin:15px 0}
.aviso{background:#d9f2e0;padding:10px 18px;border:1px solid #8bc79a}
.error{background:#fde2e2;padding:10px 18px;border:1px solid #e39a9a}
table{width:100%;border:1px solid #b9c6d8;margin:12px 0}
th{background:#13315c;color:#fff;padding:9px;font:bold 14px Verdana}
td{border:1px solid #d5dde8;padding:9px;font:14px/1.5 Verdana}
tr:hover{background:#f1f4f9}
details{background:#f1f4f9;border:1px solid #d5dde8;padding:10px 16px;margin:8px 0}
summary{cursor:pointer;font:bold 15px Verdana}
blockquote{margin:15px 0;padding:8px 18px;background:#eef2f7;border:1px solid #cfd8e3}
pre{background:#1b2430;color:#fff;padding:10px;overflow:auto}
input,select,textarea{width:96%;padding:9px;margin:4px 0 14px;border:1px solid #9aa6b6;font:15px Verdana}
footer{background:#0b2545;color:#9fc3f0;padding:28px 6%;overflow:hidden}
footer div{float:left;width:30%;margin:0 3% 0 0;font:14px/1.8 Verdana}
footer h4{color:#fff;font:bold 16px Verdana;margin:0 0 8px}
footer a{color:#fff}
.limpiar{clear:both}

@media(max-width:900px){
main{width:92%;padding:20px}
.tarjeta{width:46%}
.dato{width:29%;padding:12px}
.ficha div{width:50%;padding:0 0 10px}
.lado{width:100%;float:none;margin:10px 0}
.hero img{float:none;width:100%;margin:0 0 15px}
footer div{width:46%}
}

@media(max-width:600px){
header{padding:16px 5%}
header h1{font:bold 22px Verdana}
nav{position:static;padding:0}
nav a{width:50%;box-sizing:border-box;text-align:center;padding:12px 6px;border:1px solid #0b2545}
main{width:100%;margin:0;border:0;padding:16px 5%}
h1{font:bold 24px Verdana}
h2{font:bold 18px Verdana}
.hero{padding:18px}
.hero h1{font:bold 24px Verdana}
.hero p{font:15px/1.6 Verdana}
.tarjeta,.dato{float:none;width:auto;margin:0 0 14px}
.ficha div{width:100%}
table{display:block;overflow-x:auto}
footer div{float:none;width:auto;margin:0 0 18px}
.boton,button{display:block;width:100%;box-sizing:border-box;text-align:center;margin:0 0 10px}
}
</style>
</head>
<body>
@include('partials.menu')
<main>
@if(session('mensaje'))
<p class="aviso">{{ session('mensaje') }}</p>
@endif
@yield('contenido')
<div class="limpiar"></div>
</main>
@include('partials.pie')
</body>
</html>