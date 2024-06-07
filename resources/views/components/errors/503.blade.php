<x-layouts.app>
    @section('title', 'Under Maintenance')
    @section('content')
        <div class="w-screen h-screen bg-[#081B33] relative">
            <x-illustration.errors.503-middle class="absolute top-0 bottom-0 left-0 right-0 z-10 w-1/2 max-w-xl m-auto" />
        </div>
    @endsection
</x-layouts.app>