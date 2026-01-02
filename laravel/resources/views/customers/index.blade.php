<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Customers</h1>
    <a href="{{ route('customers.create') }}">Create Customer</a>

    @foreach ($customers as $customer)
        <p>{{ $customer->name }}</p>
        <p>{{ $customer->surname }}</p>
        <p>{{ $customer->birthyear }}</p>
        <p>{{ $customer->gender }}</p>
        <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
    
    <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
    @endforeach
    
</body>
</html>