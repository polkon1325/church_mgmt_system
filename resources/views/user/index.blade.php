@include('partials.header', ['title' => 'User Page'])
<h1>User List</h1>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>
@include('partials.footer')