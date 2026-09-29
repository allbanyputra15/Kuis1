<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 fw-semibold mb-0">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
