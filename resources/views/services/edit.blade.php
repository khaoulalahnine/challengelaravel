<h1>Edit Service</h1>

<form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title', $service->title) }}">
    @error('title') <div>{{ $message }}</div> @enderror
    <br>

    <label>Description:</label>
    <textarea name="description">{{ old('description', $service->description) }}</textarea>
    @error('description') <div>{{ $message }}</div> @enderror
    <br>

    <label>Duration (minutes):</label>
    <input type="number" name="duration" value="{{ old('duration', $service->duration) }}">
    @error('duration') <div>{{ $message }}</div> @enderror
    <br>

    <label>Price:</label>
    <input type="text" name="price" value="{{ old('price', $service->price) }}">
    @error('price') <div>{{ $message }}</div> @enderror
    <br>

    <label>Image:</label>
    <input type="file" name="image">
    @if($service->image)
        <img src="{{ asset('storage/'.$service->image) }}" width="100" alt="">
    @endif
    @error('image') <div>{{ $message }}</div> @enderror
    <br>

    <button type="submit">Update Service</button>
</form>
