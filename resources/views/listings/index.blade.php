<x-layout>

    @include('partials._hero')
    @include('partials._search')

    @unless(count($listings) == 0)

        @foreach ($listings as $listing)

            <x-listing-card :listing="$listing"/>

        @endforeach

    @else
        <p>no listing found</p>
    @endunless

    <div class="mt-6 p4">
        {{$listings->links()}}
    </div>
</x-layout>
