@extends('front.app')

<div class="row" >
	<div class="col-md-10">
		<div class="agileits-w3layouts-specials" id="models">



@section('content')
<table cellpading=5 cellspacing=4 border=0 class="table">
<tr>
		<td> ID</td>:<td>{{$users->id}} </td>
	 <td>user name </td>: <td>{{$users->name}} </td>
	<td> email</td> :<td> {{$users->email}}</td>
	
</tr>
	
</table>
@endsection
</div>
</div>
</div>

