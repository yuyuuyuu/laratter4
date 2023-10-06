<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('Create New product') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <x-input-label for="product" :value="__('product')" />
              <x-text-input id="product" class="block mt-1 w-full" type="text" name="product" :value="old('product')" required autofocus />
              <x-input-error :messages="$errors->get('product')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="name" :value="__('name')" />
              <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('Create') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
