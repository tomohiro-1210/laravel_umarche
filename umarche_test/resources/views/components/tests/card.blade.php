@props([
    'title',
    'content' => 'コンテントも何も入っていないです。',
    'message' => '本文に何も入っていないです',
])

<div class="border-2 shadow-md w-1/4 p-2 mt-10">
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>