<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css_family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <h1>ブログ</h1>
            <a href="/posts/create">新規作成</a>
            <div class="posts">
                @foreach ($posts as $post)
                    <div class="post">
                        <h2 class="title">
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p class="body">{{ $post->body }}</p>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onClick="deletePost({{ $post->id }})">削除</button>
                        </form>
                    </div> 
                @endforeach
            </div>
            <div class="pagenate">
                {{ $posts->links() }}
            </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            
            <script>
                function deletePost(id) {
                    if(confirm('削除すると復元できません。\n本当に削除しますか。')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>