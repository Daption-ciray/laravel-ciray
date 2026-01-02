<form action="{{ route('customers.update', $customer->id) }}" method="post">
    @csrf
    @method('put')
    <input type="string" name="name" placeholder="Name" value="{{ $customer->name }}"><br>
    <input type="string" name="surname" placeholder="Surname" value="{{ $customer->surname }}"><br>
    <input type="integer" name="birthyear" placeholder="Birthyear" value="{{ $customer->birthyear }}"><br>
    <select name="gender" placeholder="Gender" value="{{ $customer->gender }}">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <button type="submit">Update</button>
</form>