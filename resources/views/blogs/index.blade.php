<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('blogs.create') }}">ブログ投稿</a> 
  @foreach ($blogs as $blog)
    <table>
      <th>
        {{$blog->title}}
        <td><a href="{{ route('blogs.show', $blog->id) }}">詳細</a><td>
        <td><a href="{{ route('blogs.edit', $blog->id) }}">編集</a><td>
        <form action="{{route('blogs.destroy', ['blog' => $blog->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button>削除</button>
        </form>
        
      </th>
    </table>
  @endforeach
</body>
</html>