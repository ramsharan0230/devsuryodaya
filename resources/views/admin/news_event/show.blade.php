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
                        <p>Subtitle: <b>{{ $detail->title }}</b></p>
                    </div>

                    <div>
                        <p>Slug: <b>{!! $detail->slug !!}</b></p>
                    </div>
                    
                    <div>
                        <p>Short Description: <b>{!! $detail->short_description !!}</b></p>
                    </div>
                    <div>
                        <p>Description: <b>{!! $detail->description !!}</b></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img class="img-thumbnail" src="{{ asset('images/news-event').'/'.$detail->image }}" alt="">
                </div>
            </div>
            
            
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('admin.news-event.edit', $detail->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('admin.news-event.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection