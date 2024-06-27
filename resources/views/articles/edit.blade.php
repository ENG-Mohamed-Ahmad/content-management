<!DOCTYPE html>
<html>
<head>
    <title>Edit Article</title>
</head>
<body>
    <h1>Edit Article</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}" required>
        
        <label for="content">Content:</label>
        <textarea id="content" name="content">{{ old('content', $article->content) }}</textarea>
        
        <label for="images">Upload New Images:</label>
        <input type="file" id="images" name="images[]" multiple accept="image/*">
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>