@extends('layouts.app')

@section('content')
<div id="menu" class="row">
    {{-- Menu --}}
    <div class="col-8">
        @foreach ($categories as $category)
            @unless ($category->isEmpty())
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="m-0">{{ $category->name }}</h4>
                    </div>

                    <div class="card-body">
                        @foreach ($category->item_parents as $itemParent)
                            <x-menu-item :itemParent="$itemParent" />

                            @unless ($loop->last)
                                <hr>
                            @endunless
                        @endforeach
                    </div>
                </div>
            @endunless
        @endforeach
    </div>

    {{-- Cart --}}
    <div class="col-4">
        <div style="position: -webkit-sticky; position: sticky; top: 10px;">
            {{-- <x-cart /> --}}
        </div>
    </div>
</div>
@endsection
