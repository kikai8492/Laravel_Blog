<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="{{ route('blogs.create') }}">ブログ投稿</a> 
  @foreach ($blogs as $blog)
    <table>
      <th>
        {{$blog->title}}
        <a href="{{ route('blogs.show', $blog->id) }}">詳細</a>
        <a href="{{ route('blogs.edit', $blog->id) }}">編集</a>
      </th>
    </table>
  @endforeach
</body>
</html>