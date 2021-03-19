@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="elearning-container">
    <div class="row elearning-subcontainer">
        @include('elearning.side-nav')
        <div class="col-md-6 col-xl-10 offset-xl-0 sidenav-con" style="height: 1000px;">
            <div class="sidenav-content-details">
                <h3>Search results for <label class="keyword" id="searched-keyword">{{$keyword}}</label></h3>
                @if(count($result)>0)
                    @foreach($result as $result)
                        <div class="searched-result-div">
                            <h4><strong>{{$result['parent']}}</strong> / <a href="{{route( $result['key'])}}"> {{$result['value']}}</a></h4>
                            <p>{{$result['description']}}</p>
                        </div>
                    @endforeach
                @else
                    <h2 class="search-warning text-danger">No result was found !</h2>
                @endif
            </div>
        </div>
    </div>
</div>
<a id="back-to-top" href="#" class="btn-light btn-lg back-to-top bg-secondary" role="button"><span class="fas fa-chevron-up text-white"></span></a>
<script type="text/javascript" src="{{ URL::asset('js/elearning.js')}}"></script>   
@stop