<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit About') }}
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

                <form method="POST" action="{{ route('admin.abouts.update', $about) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                            value="{{ $about->name }}" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="thumbnail" :value="__('thumbnail')" />
                        <img src="{{ Storage::url($about->thumbnail) }}" alt=""
                            class="rounded-2xl object-cover w-[90px] h-[90px]">
                        <x-text-input id="thumbnail" class="block w-full mt-1" type="file" name="thumbnail" autofocus
                            autocomplete="thumbnail" />
                        <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="type" :value="__('type')" />

                        <select name="type" id="type"
                            class="w-full py-3 pl-3 border rounded-lg border-slate-300">
                            <option value="Visions">Visions</option>
                            <option value="Missions">Missions</option>
                        </select>

                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>

                    <h3 class="mt-4 text-lg font-bold text-indigo-950">Keypoints</h3>

                    <div class="mt-4">

                        <div class="flex flex-col gap-y-5">
                            <x-input-label for="keypoints" :value="__('keypoints')" />
                            @forelse ($about->keypoints as $keypoint)
                                <input type="text" class="py-3 border rounded-lg border-slate-300"
                                    value="{{ $keypoint->keypoint }}" name="keypoints[]">
                            @empty
                            @endforelse

                        </div>
                        <x-input-error :messages="$errors->get('keypoint')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="px-6 py-4 font-bold text-white bg-indigo-700 rounded-full">
                            Update About
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
