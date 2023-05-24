@extends('master')
@section('content')
<div class="row">
    <div class="col"></div>
    <div class="col-8">
        @if($type == 'Book List')
            @include('content/book')
        @elseif($type == 'Book Detail')
            @include('content/book_detail')
        @elseif($type == 'Publisher List')
            @include('content/publisher')
        @elseif($type == 'Publisher Detail')
            @include('content/publisher_detail')
        @elseif($type == 'Contact')
            @include('content/contact')
        @endif
    </div>
    <div class="col"></div>
</div>
@endsection