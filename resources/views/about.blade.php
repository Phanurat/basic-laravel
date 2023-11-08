<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, molestias ea. Deleniti iste at est nihil dignissimos omnis natus voluptatibus assumenda molestiae repellendus vero maxime, unde ex, eius suscipit eligendi?</p>
    
    <!--LINK-->
    <a href="{{url('/')}}">Home</a>
    <a href="{{url('/admin')}}">Admin</a>
    <a href="{{url('/member')}}">Member</a>
    <a href="{{route('about')}}">About</a>
</body>
</html>