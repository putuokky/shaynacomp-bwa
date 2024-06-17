<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Details Booking') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg gap-y-5">

                <div class="flex flex-row items-center justify-between item-card">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{ Storage::url($appointment->product->thumbnail) }}" alt=""
                            class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Product Interest</p>
                            <h3 class="text-xl font-bold text-indigo-950">{{ $appointment->product->name }}</h3>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Name</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                {{ $appointment->name }}
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Email</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                {{ $appointment->email }}
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Phone</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                +{{ $appointment->phone_number }}
                            </h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Brief</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                {{ $appointment->brief }}
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Budget</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                ${{ number_format($appointment->budget, 0, ',', '.') }}
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Meeting Date At</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                {{ $appointment->meeting_at->format('M d, Y') }}
                            </h3>
                        </div>

                    </div>
                </div>

                <hr class="my-5">

                <a href="#" class="px-6 py-4 font-bold text-center text-white bg-indigo-700 rounded-full">
                    Follow Up Customer
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
