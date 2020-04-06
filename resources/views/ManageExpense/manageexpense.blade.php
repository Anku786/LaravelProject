@extends('layout')

	@section('content')	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Expense</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Expense</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
						<div class="col-md-12">
							
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Expense Item</th>
                  <th>Expense Cost</th>
                  <th>Expense Date</th>
                  <th>Action</th>
                </tr>
              </thead>
             
              <tbody>
              	@foreach($table as $row)
                <tr>
                  <td>{{$row['ID']}}</td>
              
                  <td>{{$row['Expense_Date']}}</td>
                  <td>{{$row['Expense_Item']}}</td>
                  <td>{{$row['Expense_Cost']}}</td>
                  <td>
                  	<form method="post" class="delete_form" action="{{action('AddController@destroy',$row['ID'])}}">@csrf
                  		
                  		<input type="hidden" name="_method" value="DELETE" />
                  		<button type="submit" class="btn btn-danger">DELETE</button>
                  	</form>
                  </td>
                </tr>
                @endforeach
               
              </tbody>
            </table>
          </div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('.delete_form').on('submit',function(){
				if(confirm("Are you sure you want to delete it?")){
					return true;
				}
				else{
					return false;
				}
			});
		});
	</script>
	@endsection

