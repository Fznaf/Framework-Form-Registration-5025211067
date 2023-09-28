<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="text-align: center">
    <h1>SUCCESS</h1>

      @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    Here is what u gave us:
    <p> {{ $data['name'] }} </p>
    <p> Address: {{ $data['address'] }} </p> 
    <p> Email: {{ $data['email'] }} </p> 
    <p> Age: {{ $data['age'] }} </p> 
    <p> Your Number: {{ $data['pick'] }} </p>
    <p> <img src="{{ asset('storage/images/'. $image) }}" /> </p>

</body>
</html>