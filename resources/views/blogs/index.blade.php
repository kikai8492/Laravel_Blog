<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="{{ route('blog.create') }}">ブログ投稿</a> 
  @foreach ($blogs as $blog)
    <table>
      <th>
        {{$blog->title}}
      </th>
    </table>
  @endforeach
</body>
</html>