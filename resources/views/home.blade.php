<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>
<div class="uk-container uk-container-large">

    @foreach($posts as $post)
        <article class="uk-article">

            <h1 class="uk-article-title"><a class="uk-link-reset" href="">{{$post->title}}</a></h1>

            <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>

            <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

            <p>{{$post->body}}</p>

            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                <div>
                    <a class="uk-button uk-button-text" href="#">Read more</a>
                </div>
                <div>
                    <a class="uk-button uk-button-text" href="#">5 Comments</a>
                </div>
            </div>

        </article>
    @endforeach
</div>
</body>
</html>