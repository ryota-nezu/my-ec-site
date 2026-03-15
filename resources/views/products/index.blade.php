<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-4">
                @foreach ($products as $product)
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                        <p class="text-gray-600">{{ $product->description }}</p>
                        <p class="mt-2 text-blue-600 font-bold">{{ number_format($product->price) }}円</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
