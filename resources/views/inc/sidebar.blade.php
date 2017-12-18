<div id="sidebar">
	<div id="sidebar-profile">
		<div id="profile-top">
		<div id="sidebar-profilepic"></div>
		</div>
		<p id="name"> {{ Auth::user()->name }} </p>
		<p id="email">{{ Auth::user()->email }}</p>
		<div id="bio">
			@if(count($user_profile) > 0)
			@foreach($user_profile as $user_profile)
				@if($user_profile->username == Auth::user()->name)
					<p>{{$user_profile->bio}}</p>
				@endif
			@endforeach
			@endif
		</div>
	</div>
</div>