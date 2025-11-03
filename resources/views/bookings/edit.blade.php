<h1>Edit Booking</h1>

<form action="{{ route('bookings.update', $booking->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Service:</label>
    <select name="service_id">
        @foreach($services as $service)
            <option value="{{ $service->id }}" {{ old('service_id', $booking->service_id) == $service->id ? 'selected' : '' }}>
                {{ $service->title }}
            </option>
        @endforeach
    </select>
    @error('service_id') <div>{{ $message }}</div> @enderror
    <br>

    <label>Date:</label>
    <input type="date" name="date" value="{{ old('date', $booking->date) }}">
    @error('date') <div>{{ $message }}</div> @enderror
    <br>

    <label>Time:</label>
    <input type="time" name="time" value="{{ old('time', $booking->time) }}">
    @error('time') <div>{{ $message }}</div> @enderror
    <br>

    <label>Status:</label>
    <select name="status">
        <option value="pending" {{ old('status', $booking->status)=='pending'?'selected':'' }}>Pending</option>
        <option value="confirmed" {{ old('status', $booking->status)=='confirmed'?'selected':'' }}>Confirmed</option>
        <option value="cancelled" {{ old('status', $booking->status)=='cancelled'?'selected':'' }}>Cancelled</option>
    </select>
    @error('status') <div>{{ $message }}</div> @enderror
    <br>

    <button type="submit">Update Booking</button>
</form>
