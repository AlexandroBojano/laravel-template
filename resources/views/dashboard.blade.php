<h1>Olá, {{ auth()->user()->name }}</h1>
<form method="POST" action="/logout">
    @csrf
    <button type="submit">Sair</button>
</form>