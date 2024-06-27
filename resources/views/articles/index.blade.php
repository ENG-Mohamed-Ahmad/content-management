<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
    <h1>Articles</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('articles.create') }}">Create New Article</a>

    <ul>
        @foreach ($articles as $article)
            <li>
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->content }}</p>

                @foreach ($article->images as $image)
                    <img src="{{ Storage::url($image->path) }}" alt="Image" width="100">
                @endforeach

                <a href="{{ route('articles.edit', $article) }}">Edit</a>
                <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
