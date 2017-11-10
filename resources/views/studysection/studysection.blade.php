<div class='container'>
	<table class="table">
	 	<thead>
			<tr>
				<th> Id </th>
				<th> Subject </th>
				<th> Description</th> 
				<th> Minutes</th>
				<th> Date </th>  
			</tr>
		</thead>
		<tbody>
		@foreach($s_sections as $section)				 
			<tr>
				<td> <a href="/studysection/{{$section->id}}">
					{{$section->id}} </a> </td>
				<td>{{$section->subject}}</td>
				<td>{{$section->description}}</td>
				<td>{{$section->minutes}}</td>
				<td>{{$section->s_date}}</td>				
			<tr/>				
		@endforeach
			</tbody>
	</table>
</div>