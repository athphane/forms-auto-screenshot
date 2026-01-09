@php
    $article = new \Javaabu\Forms\Tests\TestSupport\Models\Article();
    $article->status = \Javaabu\Forms\Tests\TestSupport\Enums\ArticleStatuses::Published;
@endphp

@model($article)
<x-forms::text-entry name="status"/>
@endmodel
