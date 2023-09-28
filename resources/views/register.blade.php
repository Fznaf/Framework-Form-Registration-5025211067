<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register Form</h1>
    <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="address" placeholder="Address">
        <input type="email" name="email" placeholder="Email">
        <input type="number" name="age" placeholder="Age">
        <input type="number" name="pick" step="0.01" placeholder="Feeling lucky? Pick a number">
        <input type="file" name="image" accept="image/*" placeholder="Select Image">
        <button type="submit" name="submit" Value="Register">Submit</button>
    </form>
</body>
</html>