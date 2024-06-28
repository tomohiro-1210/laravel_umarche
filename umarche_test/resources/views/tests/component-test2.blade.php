<x-tests.app>
    <x-slot name="header">ヘッダー2</x-slot>
    <p class="text-green-500 my-2 mx-2 px-2 py-2">コンポーネントテスト2</p>

    <x-test-class-base classBaseMessage="ここにメッセージ１が入ります"/>
    <div class="mx-4 my-4"></div>
    <x-test-class-base classBaseMessage="ここにメッセージ２が入ります" defaultMessage="初期のメッセージから変更しています。"/>
</x-tests.app>