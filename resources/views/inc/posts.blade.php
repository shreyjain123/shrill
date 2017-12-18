<div id="posts-wrap" class="col-md-6">
<div id="posts-section" data-spy="scroll">
	<div id="refresh-div">

	@if(count($post) > 0)
	@foreach($post as $post)
	<div class="post {{ Request::is( $post->username == Auth::user()->name ) ? 'post-active' : '' }}">
		<p class="post-bubble-usr {{ Request::is( $post->username == Auth::user()->name ) ? 'post-bubble-usr-active' : '' }}">{{$post->username}}</p>
		<div class="post-bubble {{ Request::is( $post->username == Auth::user()->name ) ? 'post-bubble-active' : '' }}">
			<p id="post-bubble-content">{{$post->post}}</p>
			<p id="post-bubble-date">{{$post->created_at}}</p>
		</div>
	</div>
	@endforeach
	@endif
</div>
</div>
<div onKeyPress="return checkSubmit(event)" id="post-form">

	{!! Form::open(['url' => '/submit', 'id' => 'posts-form']) !!}

    		{{Form::text('post','', ['id' => 'post-textarea' , 'placeholder' => 'Post Something', 'autofocus' => 'autofocus'])}}
			{{Form::submit('POST', ['class' => 'submit-form'])}}

	{!! Form::close() !!}

</div>
</div>
@if(count($errors) > 0)
<script type="text/javascript">
	alert("You cant submit nothing");
</script>
 @endif
<script type="text/javascript">

	window.onload=function () {
     var objDiv = document.getElementById("posts-section");
     objDiv.scrollTop = objDiv.scrollHeight;
	}
	
	setInterval(function() {
			$("#refresh-div").load(" #refresh-div");
		}, 1000);
	$("body").on('DOMSubtreeModified', "posts-section", function() {
    alert('changed');
});


</script>

