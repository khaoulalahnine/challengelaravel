
<h1>Create Service</h1>

@if ($errors->any())
    <div style="color:red; margin-bottom:15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <br>

    <div>
        <label>Description:</label><br>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <br>

    <div>
        <label>Duration (minutes):</label><br>
        <input type="number" name="duration" value="{{ old('duration') }}">
        @error('duration')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <br>

    <div>
        <label>Price:</label><br>
        <input type="text" name="price" value="{{ old('price') }}">
        @error('price')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <br>

    <div>
        <label>Image:</label><br>
        <input type="file" name="image">
        @error('image')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <br>

    <button type="submit">Create Service</button>
</form>

<a href="{{ route('services.index') }}">Back to Services List</a>
