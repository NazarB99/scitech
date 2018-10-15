<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/css/login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body id="LoginForm">
<div id="app">
    <div class="container">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>Admin Login</h2>
                    <p>Please enter your email and password</p>
                </div>
                <form id="Login" @submit.prevent="onSubmit()">
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputEmail" placeholder="User Name" v-model="name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" v-model="password">
                    </div>
                    <input type="hidden" id="route" value="{{route('login')}}">
                    <input type="submit" class="btn btn-primary" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
