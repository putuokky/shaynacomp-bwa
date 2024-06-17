<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('New About') }}
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

                <form method="POST" action="{{ route('admin.abouts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('thumbnail')" />
                        <x-text-input id="thumbnail" class="block w-full mt-1" type="file" name="thumbnail" required
                            autofocus autocomplete="thumbnail" />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="type" :value="__('type')" />

                        <select name="type" id="type"
                            class="w-full py-3 pl-3 border rounded-lg border-slate-300">
                            <option value="">Choose type</option>
                            <option value="Visions">Visions</option>
                            <option value="Missions">Missions</option>
                        </select>

                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>

                    <h3 class="mt-4 text-lg font-bold text-indigo-950">Keypoints</h3>

                    <div class="mt-4">
                        <div class="flex flex-col gap-y-5">
                            @for ($i = 0; $i < 3; $i++)
                                <input type="text" class="py-3 border rounded-lg border-slate-300"
                                    placeholder="Write your keypoint" name="keypoints[]">
                            @endfor
                        </div>
                        <x-input-error :messages="$errors->get('keypoints')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="px-6 py-4 font-bold text-white bg-indigo-700 rounded-full">
                            Add New About
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
