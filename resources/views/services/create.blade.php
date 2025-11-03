<h1>Create Service</h1>

<form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title') }}">
    @error('title') <div>{{ $message }}</div> @enderror
    <br>

    <label>Description:</label>
    <textarea name="description">{{ old('description') }}</textarea>
    @error('description') <div>{{ $message }}</div> @enderror
    <br>

    <label>Duration (minutes):</label>
    <input type="number" name="duration" value="{{ old('duration') }}">
    @error('duration') <div>{{ $message }}</div> @enderror
    <br>

    <label>Price:</label>
    <input type="text" name="price" value="{{ old('price') }}">
    @error('price') <div>{{ $message }}</div> @enderror
    <br>

    <label>Image:</label>
    <input type="file" name="image">
    @error('image') <div>{{ $message }}</div> @enderror
    <br>

    <button type="submit">Create Service</button>
</form>
