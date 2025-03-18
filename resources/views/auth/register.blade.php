<form method="Post" action="{{ route('api.register') }}">
    @csrf
    <input type="text" name="username" placeholder="username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Register</button>
 
</form>  

