@extends('layouts.front_layout')
@section('content')

	@if($page == 'index')
		@include('frontend.index')	
		
	@elseif($page == 'about')
		@include('frontend.about')	
		
	@elseif($page == 'post')
		@include('frontend.post')	
		
	@elseif($page == 'contact')
		@include('frontend.contact')	
			
	@endif
@endsection
