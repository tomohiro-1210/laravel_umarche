<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
    <p class="text-red-500 w-auto mx-auto">コンポーネントテスト1</p>

    <x-tests.card title="タイトル1" content="$contentに何かがいる" :message="$message"></x-tests.card>
    <x-tests.card title="タイトル2"></x-tests.card>
    <x-tests.card title="CSSを少し変更したい" class="bg-red-200 shadow-md gorder-4 w-1/4"></x-tests.card>
</x-tests.app>