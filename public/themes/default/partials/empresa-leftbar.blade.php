<div class="user-profile-buttons">
	<div class="row empresalike-links">
		@if($empresa->is_admin(Auth::user()->id))
			@if(!$empresa->likes->contains(Auth::user()->id))								
				<div class="col-md-6 col-sm-6 col-xs-6 left-col"><a href="#" class="btn btn-options btn-block btn-default empresa-like like" data-timeline-id="{{ $timeline->id }}"><i class="fa fa-thumbs-up"></i> {{ trans('common.like') }}</a></div>
				<div class="col-md-6 col-sm-6 col-xs-6 left-col hidden"><a href="#" class="btn btn-options btn-block btn-success empresa-like liked " data-timeline-id="{{ $timeline->id }}"><i class="fa fa-check"></i> {{ trans('common.liked') }}</a></div>
			@else
				<div class="col-md-6 col-sm-6 col-xs-6 left-col hidden"><a href="#" class="btn btn-options btn-block btn-default empresa-like like " data-timeline-id="{{ $timeline->id }}"><i class="fa fa-thumbs-up"></i> {{ trans('common.like') }}</a></div>
				<div class="col-md-6 col-sm-6 col-xs-6 left-col"><a href="#" class="btn btn-options btn-block btn-success empresa-like liked " data-timeline-id="{{ $timeline->id }}"><i class="fa fa-check"></i> {{ trans('common.liked') }}</a></div>
			@endif

			<div class="col-md-6 col-sm-6 col-xs-6 right-col">
				<a href="{{ url('/'.$timeline->username.'/empresa-settings/general') }}" class="btn btn-options btn-block btn-default"><i class="fa fa-gear"></i> 
					{{ trans('common.settings') }}
				</a>
			</div>

		@else
			@if(!$empresa->likes->contains(Auth::user()->id))								
				<div class="col-md-12 col-sm-12 col-xs-12  empresa"><a href="#" class="btn btn-options btn-block btn-default empresa-like like" data-timeline-id="{{ $timeline->id }}"><i class="fa fa-thumbs-up"></i> {{ trans('common.like') }}</a></div>
				<div class="col-md-12 col-sm-12 col-xs-12  empresa hidden"><a href="#" class="btn btn-options btn-block btn-success empresa-like liked " data-timeline-id="{{ $timeline->id }}"><i class="fa fa-check"></i> {{ trans('common.liked') }}</a></div>
			@else
				<div class="col-md-12 col-sm-12 col-xs-12  empresa hidden"><a href="#" class="btn btn-options btn-block btn-default empresa-like like " data-timeline-id="{{ $timeline->id }}"><i class="fa fa-thumbs-up"></i> {{ trans('common.like') }}</a></div>
				<div class="col-md-12 col-sm-12 col-xs-12  empresa"><a href="#" class="btn btn-options btn-block btn-success empresa-like liked " data-timeline-id="{{ $timeline->id }}"><i class="fa fa-check"></i> {{ trans('common.liked') }}</a></div>			
			@endif			

			<div class="col-md-6 col-sm-6 col-xs-6 left-col empresa hidden">
				<a href="{{ url('/'.Auth::user()->username.'/settings/general') }}" class="btn btn-options btn-block btn-default">
					<i class="fa fa-inbox"></i> {{ trans('common.messages') }}
				</a>
			</div>

		@endif
		</div>
	</div>

	<!-- Change avatar form -->
	<form class="change-avatar-form hidden" action="{{ url('ajax/change-avatar') }}" method="post" enctype="multipart/form-data">
		<input name="timeline_id" value="{{ $timeline->id }}" type="hidden">
		<input name="timeline_type" value="{{ $timeline->type }}" type="hidden">
		<input class="change-avatar-input hidden" accept="image/jpeg,image/png" type="file" name="change_avatar" >
	</form>

	<!-- Change cover form -->
	<form class="change-cover-form hidden" action="{{ url('ajax/change-cover') }}" method="post" enctype="multipart/form-data">
		<input name="timeline_id" value="{{ $timeline->id }}" type="hidden">
		<input name="timeline_type" value="{{ $timeline->type }}" type="hidden">
		<input class="change-cover-input hidden" accept="image/jpeg,image/png" type="file" name="change_cover" >
	</form>

	<div class="user-bio-block">
		<div class="bio-header">{{ trans('common.about') }}</div>
		<div class="bio-description">
			{{ ($timeline['about'] != NULL) ? $timeline['about'] : trans('messages.no_description') }}
		</div>
		<ul class="bio-list list-unstyled">
			<li>
				<i class="fa fa-folder-o" aria-hidden="true"></i><span>{{ $empresa->category->name }}</span>
			</li>

			@if($empresa->address != null)
				<li>
					<i class="fa fa-map-marker" aria-hidden="true"></i><span>{{ $empresa->address }}</span>
				</li>
			@endif

			@if($empresa->website != null)
				<li>
					<i class="fa fa-globe" aria-hidden="true"></i><span>{{ $empresa->website }}</span>
				</li>
			@endif

			@if($empresa->phone != null)
				<li>
					<i class="fa fa-phone" aria-hidden="true"></i><span>{{ $empresa->phone }}</span>
				</li>
			@endif
		</ul>
	</div>

	<div class="widget-pictures widget-best-pictures"><!-- /empresas-liked -->
		<div class="picture side-left">
			{{ trans('common.members') }}
		</div>
		@if(count($empresa_members) > 0)
			<div class="side-right show-all">
				<a href="{{ url($timeline->username.'/empresamembers') }}">{{ trans('common.show_all') }}</a>
			</div>
		@endif
		<div class="clearfix"></div>
		<div class="best-pictures my-best-pictures">
			<div class="row">
				@if(count($empresa_members) > 0)
					@foreach($empresa_members->take(12) as $empresa_member)
					<div class="col-md-2 col-sm-2 col-xs-2 best-pics">
						<a href="{{ url($empresa_member->username) }}" class="image-hover" data-toggle="tooltip" data-placement="top" title="{{ $empresa_member->name }}">
							<img src="{{ $empresa_member->avatar }}" alt="{{ $empresa_member->name }}" title="{{ $empresa_member->name }}">
						</a>
					</div>
					@endforeach
				@else
					<div class="alert alert-warning">{{ trans('messages.no_members') }}</div>
				@endif

			</div>
		</div>
	</div> <!-- /empresas-liked -->

