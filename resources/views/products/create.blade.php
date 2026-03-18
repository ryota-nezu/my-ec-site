<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">商品登録</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="mb-4">
                        <x-input-label for="name" value="商品名" />
                        <x-text-input id="name" name="name" type="text" class="block mt-1 w-full" required />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="description" value="商品説明" />
                        <textarea id="description" name="description"
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            required></textarea>
                    </div>
                    <div class="mb-4">
                        <x-input-label for="price" value="価格" />
                        <x-text-input id="price" name="price" type="number" class="block mt-1 w-full" required />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="price" value="在庫" />
                        <x-text-input id="stock" name="stock" type="number" class="block mt-1 w-full" required />
                    </div>

                    <x-primary-button>登録する</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
