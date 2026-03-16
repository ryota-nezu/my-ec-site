<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">{{ $product->name }}</h1>
                <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                <p class="text-xl font-semibold text-indigo-600">価格: ¥{{ number_format($product->price) }}</p>

                <div class="mt-6">
                    <a href="{{ route('products.index') }}" class="text-blue-500 hover:underline">
                        ← 商品一覧に戻る
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
