<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
    <p class="text-red-500 w-auto mx-auto">コンポーネントテスト1</p>

    <x-tests.card title="タイトル" content="$contentに何かがいる" :message="$message"></x-tests.card>
</x-tests.app>