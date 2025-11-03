<h1>Services</h1>
<a href="{{ route('services.create') }}">Create New Service</a>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Title</th>
        <th>Duration</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    @foreach($services as $service)
    <tr>
        <td>{{ $service->title }}</td>
        <td>{{ $service->duration }} min</td>
        <td>{{ $service->price }}</td>
        <td>
            <a href="{{ route('services.edit', $service->id) }}">Edit</a>
            <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
