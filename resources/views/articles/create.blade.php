<!DOCTYPE html>
<html>
<head>
    <title>Create Article</title>
</head>
<body>
    <h1>Create Article</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        
        <label for="content">Content:</label>
        <textarea id="content" name="content">{{ old('content') }}</textarea>
        
        <label for="images">Upload Images:</label>
        <input type="file" id="images" name="images[]" multiple accept="image/*">
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>