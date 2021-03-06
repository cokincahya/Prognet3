@extends('layout.adminlayout')
@section('content')
<div class="app-main">
					<div class="main-content">
<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">Courier</div>
									<div class="card-body">
										<table id="basicExample" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Name</th>
												</tr>
											</thead>
											@foreach($courier as $c)
											<tbody>
												<tr>
													
													<td>{{$c->courier}}</td>

												</tr>
											</tbody>
											@endforeach
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
						<form action="/inputCourier" method="post">
							@csrf
						<label for="productName" class="col-form-label">Add Courier</label>
						<input type="text" name="courier" class="form-control" id="courier" placeholder="Input Courier Name here" required>
						<br>
						<button type="submit" class="btn btn-success btn-sm"><i class="icon icon-plus"></i> Save </button>
						</form>
					</div>
						<!-- Row ends -->
											</div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
			</div>

			@endsection