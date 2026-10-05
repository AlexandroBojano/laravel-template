<h1>Registrar</h1>
<form method="POST" action="/register">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome">
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    <input type="password" name="password" placeholder="Senha">
    <input type="password" name="password_confirmation" placeholder="Confirmar senha">
    <button type="submit">Registrar</button>
    @foreach ($errors->all() as $error) <p>{{ $error }}</p> @endforeach
</form>
<a href="/login">Já tenho conta</a>