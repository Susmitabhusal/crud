@extends('front.app')

<div class="row" >
	<div class="col-md-10">
		<div class="agileits-w3layouts-specials" id="models">



@section('content')
<table cellpading=5 cellspacing=4 border=0 class="table">
<thead>
	<tr>
	<td> ID</td>
	<td>user name </td>
	<td> email</td>
	<td></td>
</tr>
</thead>
<tbody>
	@foreach($users as $users)


	<tr><td>{{$users->id}} </td>
	<td>{{$users->name}} </td>
	<td> {{$users->email}}</td>
	<td><a href="/user/{{$users->id}}">View</a>|Edit|Delete</td>
</tr>
	</tbody>
@endforeach
<tfoot>
	<tr>
	<td> ID</td>
	<td>user name </td>
	<td> email</td>
	<td></td>
</tr>
</tfoot>



</table>
@endsection
</div>
</div>
</div>

