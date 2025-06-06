<h1>Vista de Prueba</h1>
@auth
<!-- <h1>Mi titulo de prueba</h1>
<h2>Mi subtitulo de prueba</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, at iure mollitia aperiam unde provident perferendis facere cumque dicta in veritatis consectetur corporis fuga animi, est repellendus? Saepe, eos vero.</p>
<form action="/logout" method="post"> -->

<h1>{{ Auth::user()->name}}</h1>
    @csrf
    <input type="submit" value="Cerrar Sesion">

</form>
@else
<h1>No estoy logueado</h1>
<a href="/login">Iniciar Sesion</a>
@endauth
