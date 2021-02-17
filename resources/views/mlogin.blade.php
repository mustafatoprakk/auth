<h1>LOGIN PAGE</h1>

<hr>
<form action="mloginCheck" method="post">
    @csrf
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="checkbox" name="remember"> Remember me <br><br>
    <button type="submit">Login</button>
</form>
