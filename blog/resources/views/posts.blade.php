<!doctype html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<script src="/app.js"></script>
@extends('layouts')
@section('content')
<body>
    <header><h2>LARAVEL BLOG</h2></header>

<article>
<h1><a href="/posts/my-first-blog">
My First post
</a></h1>
<p> 
Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.
</p>
</article>


<article>
<h1><a href="/posts/my-second-blog">
My Second post
</a>
</h1>
<p> 
Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.
</p>
</article>

<article>
<h1><a href="/posts/my-third-blog">
My Third post
</a>
</h1>
<p> 
Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.
</p>
</article>
</body>
@endsection