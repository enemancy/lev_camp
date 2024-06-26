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
            <h1 class="title">{{ $post->title }}</h1>
            <div class="content">
                <div class="content__post">
                    <h3>内容</h3>
                    <p>{{ $post->body }}</p>
                    <h4>カテゴリー</h4>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                </div>
            </div>
            <div class="edit">
                <a href="/posts/{{ $post->id }}/edit">編集</a>
            </div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>