<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <?php 
        $user = "Phanurat";
    ?>
    

    @if($user == "Phanurat")
        <h1>User is Admin</h1>
        <h1>Welcome Admin</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium labore, officiis, fuga omnis modi ratione, hic mollitia vel distinctio iusto quae. Ipsam nobis quia nulla cupiditate quos eligendi facere repellendus!</p>
        <h1>{{$user}}</h1>
    @else 
        <h1>User isn't admin</h1>
    @endif

</body>
</html>