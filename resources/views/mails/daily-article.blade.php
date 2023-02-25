@component('mail::message')
    # Hello
    There are new articles for you


    @foreach ($articles as $article)
        Title: {{ $article->title }}

        Category: {{ $article->category }}

        Description: {{ $article->content }}

        Author : {{ $article->author }}

        {{-- @if (!$loop->last)

        @endif --}}
    @endforeach

    {{-- @component('mail::button', ['url' => route('admin.jobs.index')])
        View Jobs
    @endcomponent --}}

    Thanks,

    {{ config('app.name') }}
@endcomponent
