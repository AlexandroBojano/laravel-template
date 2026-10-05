<h1>Login</h1>
<form method="POST" action="/login">
    @csrf
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Entrar</button>
    @error('email') <p>{{ $message }}</p> @enderror
</form>
<a href="/register">Criar conta</a>