@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-3/4 md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-darker border-green-dark bg-green-lightest px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-grey-lightest text-grey-darkest py-3 px-6 mb-0 shadow-inner">
                    Open Street Map - Chiswick
                </div>

                <div class="w-full p-6">
                    <p class="text-grey-darkest">
                        @map([
                            'lat' => '51.4923',
                            'lng' => '-0.2639',
                            'zoom' => '15',
                        ])
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
