<header>
    <h1>Header</h1>

    @auth
        <h1>Hello {{Auth::user() -> name}}</h1>

        <a href="{{route('logout')}}">Logout</a>

    @else
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">

            @method('POST')
            @csrf

            <label for="email">E-mail</label>
            <input type="text" name="email"> <br>
            <label for="password">Password</label>
            <input type="password" name="password"> <br>
            <input type="submit" value="LOGIN"><br><br>

        </form>

        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">

            @method('POST')
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name"> <br>
            <label for="email">E-mail</label>
            <input type="text" name="email"> <br>
            <label for="password">Password</label>
            <input type="password" name="password"> <br>
            <label for="password_confirmation">Password confirm</label>
            <input type="password" name="password_confirmation"> <br>
            
            <input type="submit" value="REGISTER"><br><br>

        </form>
        @endauth
</header>