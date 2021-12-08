@extends('layouts.app-master')
@section('title', $detail->title)
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> {{$detail->title}}</x-slot>
    <x-slot name="subTitle"> Show</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Product detail</h2>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <div class="row">
                <div class="col-sm-8">
                    <div>
                        <p>Title: <b>{{ $detail->title }}</b></p>
                    </div>
                    <div>
                        <p>Subtitle: {{ $detail->title }}</p>
                    </div>
                    <div>
                        <p>Category: {{ $detail->subcategory->category->name }}</p>
                    </div>
                    <div>
                        <p>Subcategory: {{ $detail->subcategory->name }}</p>
                    </div>
                    @if($detail->service)
                    <div>{{ $detail->service->title }}</div>
                    @endif
                    <div>
                        <p>Short Description: {!! $detail->short_description !!}</p>
                    </div>
                    <div>
                        <p>Description: {!! $detail->description !!}</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img class="img-thumbnail" src="{{ asset('images/product').'/'.$detail->image }}" alt="">
                </div>
            </div>
            <div class="row">
                @forelse ($detail->catalogs as $item)
                    @if($item->catalog_file)
                    <a href="{{ asset('catalogs').'/'.$item->catalog_file }}" download>{{ $item->title }}</a>
                    @endif
                @empty
                    <p>No catalog found</p>
                @endforelse
            </div>
            
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('admin.product.edit', $detail->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('admin.product.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection