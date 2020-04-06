<!-- @extends('layout')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<br />
			<h3>Edit Record</h3>
			<br />

			@if(count($errors) >0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $errors)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<form method="post" action="{{action('AddController@update',$id)}}">
				{{csrf_field()}}
				<input type="hidden" name="_method" value="PATCH" />
				<div class="form-group">
					<input type="text" name="ID" class="form-control" value="{{$table->ID}}">
				</div>
				<div class="form-group">
					<input type="text" name="Expense_Date" class="form-control" value="{{$table->Expense_Date}}">
				</div>
				<div class="form-group">
					<input type="text" name="Expense_Item" class="form-control" value="{{$table->Expense_Item}}">
				</div>
				<div class="form-group">
					<input type="text" name="Expense_Cost" class="form-control" value="{{$table->Expense_Cost}}">
				</div>
				<div>
					<input type="submit" class="btn btn-primary" value="Edit">
				</div>
			</form>
		</div>
	</div>
@endsection -->