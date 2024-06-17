<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('New Testimonial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="w-full py-3 text-white bg-red-500 rounded-3xl">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-4">
                        <x-input-label for="project_client" :value="__('project_client')" />

                        <select name="project_client_id" id="project_client_id"
                            class="w-full py-3 pl-3 border rounded-lg border-slate-300">
                            <option value="">Choose project_client</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('project_client')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="message" :value="__('message')" />
                        <textarea name="message" id="message" cols="30" rows="5" class="w-full border border-slate-300 rounded-xl"></textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('thumbnail')" />
                        <x-text-input id="thumbnail" class="block w-full mt-1" type="file" name="thumbnail" required
                            autofocus autocomplete="thumbnail" />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="px-6 py-4 font-bold text-white bg-indigo-700 rounded-full">
                            Add New Testimonial
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
