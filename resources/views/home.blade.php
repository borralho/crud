<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit-icons.min.js"></script>


</head>
<body>
<div class="uk-container uk-container-large">
    <ul class="uk-pagination uk-flex-right uk-margin-medium-top" uk-margin>
        <li><a href="{{$posts->previousPageUrl()}}"><span uk-pagination-previous></span> Anterior</a></li>
        <li class="uk-disabled"><span>{{$posts->currentPage()}} de {{$posts->lastPage()}}</span></li>
        <li><a href="{{$posts->nextPageUrl()}}">Proximo <span uk-pagination-next></span></a></li>
    </ul>
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
    <ul class="uk-pagination uk-flex-right uk-margin-medium-top" uk-margin>
        <li><a href="{{$posts->previousPageUrl()}}"><span uk-pagination-previous></span> Anterior</a></li>
        <li class="uk-disabled"><span>{{$posts->currentPage()}} de {{$posts->total()}}</span></li>
        <li><a href="{{$posts->nextPageUrl()}}">Proximo <span uk-pagination-next></span></a></li>
    </ul>
</div>
</body>
</html>