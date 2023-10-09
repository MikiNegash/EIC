<ul>
@foreach($childs as $child)
	<li  >
	   <span id='{{$child->id}}**{{$child->name}}' class="sector-tree">{{ $child->name }}</span> 
	@if(count($child->childs))
            @include('Investment.manageChild',['childs' => $child->childs])
        @endif
	</li>
@endforeach
</ul>