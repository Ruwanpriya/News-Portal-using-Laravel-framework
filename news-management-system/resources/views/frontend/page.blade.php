
@extends('frontend.layout')
@section('title')
<title>{{$data->title}} | WEBN NEWS</title>
@stop
@section('content')

    <div class="wrapper">
		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">				
					<div class="col-md-12">
						<h1 class="text-uppercase">{{$data->title}}</h1>
						<p>{!! $data->description !!}</p>
					</div>	
				</div>        
			</div>
			

            <!-- right section -->
			<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;">
					<span style="padding:6px 12px; background:#2b99ca;">LATEST NEWS</span>
				    </h3>
					@foreach($latest->take(10) as $l)
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<div class="col-md-4">
							<div class="row">
								<a href="{{url('article')}}/{{$l->slug}}">
									<img src="{{asset('posts')}}/{{$l->image}}"width="100%" style="margin-left:-15px;" />
								</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<h4><a href="{{url('article')}}/{{$l->slug}}">{{$l->title}}</a></h4>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				@if($sidebartop)
					<div class="col-sm-12 sidebar-adv"><a href="{{$sidebartop->url}}">
					<img src="{{asset('advertisments')}}/{{$sidebartop->image}}" width="100%"alt="{{$sidebartop->title}}" />
					</a></div>
		        @endif
				@if($sidebarbottom)
					<div class="col-sm-12 sidebar-adv"><a href="{{$sidebarbottom->url}}">
					<img src="{{asset('advertisments')}}/{{$sidebarbottom->image}}" width="100%"alt="{{$sidebarbottom->title}}" />
					</a></div>
		        @endif

			</div>
		</div> 
	</div>

	@stop
