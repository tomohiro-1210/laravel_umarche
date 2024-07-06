<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('オーナー一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:p-6 bg-white border-b border-blue-200">
                    <section class="text-blue-600 body-font">
                        <div class="container md:px-5 py-12 mx-auto">
                            <x-flash-message status="{{session('status')}}" />
                            <div class="flex flex-col text-center w-full mb-10">
                                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">オーナー一覧</h1>
                            </div>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <button onclick="location.href='{{ route('admin.owners.create') }}'" class="block ml-auto mb-8 text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">新規登録</button>
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-300 rounded-tl rounded-bl">Name</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-300">Email</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-300">登録日</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-300">詳細</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-300">削除</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($owners as $owner)
                                    <tr>
                                        <td class="px-4 py-3 text-gray-900">{{ $owner->name }}</td>
                                        <td class="px-4 py-3 text-gray-900">{{ $owner->email }}</td>
                                        <td class="px-4 py-3 text-gray-900">{{ $owner->created_at }}</td>
                                        <td class="px-4 py-3 text-gray-900"><button onclick="location.href='{{ route('admin.owners.edit' , ['owner' => $owner->id]) }}'" class="flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">編集する</button></td>
                                        
                                        <td class="px-4 py-3 text-gray-900">
                                            <form id="delete_{{$owner->id}}" method="post" action="{{ route('admin.owners.destroy', ['owner' => $owner->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button  data-id="{{ $owner->id }}" onclick="deleteOwner(this)" class="flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">削除する</button>
                                            </form>
                                        </td>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            {{ $owners->links() }}
                            </div>
                            <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                            </div>
                        </div>
                        </section>
                    {{-- エロくアント<br>
                    @foreach($e_all as $e_owner)
                        {{ $e_owner->name }}<br>
                        {{ $e_owner->created_at }}<br>
                    @endforeach
                    <br>
                    クエリビルダ<br>
                    @foreach($q_get as $q_owner)
                        {{ $q_owner->name }}<br>
                        {{ $q_owner->created_at }}<br> 
                        {{ Carbon\Carbon::parse($q_owner->created_at)->diffForHumans() }}<br> 
                        <!-- ↑Xか月目を表示させている -->
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteOwner(e) {
            'use strict';
            if (confirm('本当に削除してもいいですか？')){
                document.getElementsById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
