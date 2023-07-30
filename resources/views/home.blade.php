<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
        <h3>Congratz you are logged in !</h3>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>

        <div>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="title name"><br>
                <textarea name="body" placeholder="Blog content"></textarea><br>
                <button>Save Post</button>
            </form>
        </div>


    @else
        <div style="border: 3px solid; padding:10px; width:50%;">
            <h2>Register!</h2>
            <form action="/register" method="POST">
                @csrf
                <input type="text" name="name" placeholder="name" />
                <input type="text" name="email" placeholder="email" />
                <input type="password" name="password" placeholder="password" />
                <button>Submit</button>
            </form>
        </div>
        {{-- for logging in with existing account --}}
        <div style="border: 3px solid; padding:10px; margin-top:10px; width:50%;" >
            <h2>Login </h2>
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="loginname" placeholder="name">
                <input type="password" name="loginpassword" placeholder="password">
                <button>Login!</button>
            </form>
        </div>

    @endauth  
    
</body>
</html>