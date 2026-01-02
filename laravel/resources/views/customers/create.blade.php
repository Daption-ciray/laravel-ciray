<form action="{{ route('customers.store') }}" method="post">
    @csrf
    <input type="string" name="name" placeholder="Name"><br>
    <input type="string" name="surname" placeholder="Surname"><br>
    <input type="integer" name="birthyear" placeholder="Birthyear"><br>
    <select name="gender" placeholder="Gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <select name="status" placeholder="Status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
    <button type="submit">Create</button>
</form>