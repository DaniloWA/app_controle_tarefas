@auth 
    <h1>Usúario autenticado </h1>
    <p>ID: {{ Auth::user()->id }}</p>
    <p>Nome: {{ Auth::user()->name }}</p>
    <p>E-mail: {{ Auth::user()->email }}</p>
@endauth

@guest
    <h1>Olá visitante, Tudo bem ?</h1>
@endguest