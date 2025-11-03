<h1>Bookings</h1>
<a href="{{ route('bookings.create') }}">Create New Booking</a>

<table border="1" cellpadding="5" cellspacing="0">
<tr>
    <th>Service</th>
    <th>Date</th>
    <th>Time</th>
    <th>Status</th>
    <th>Actions</th>
</tr>
@foreach($bookings as $booking)
<tr>
    <td>{{ $booking->service->title }}</td>
    <td>{{ $booking->date }}</td>
    <td>{{ $booking->time }}</td>
    <td>{{ $booking->status }}</td>
    <td>
        <a href="{{ route('bookings.edit', $booking->id) }}">Edit</a>
        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>
