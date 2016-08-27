

		 {!! Form::open(array('url'=>'utilisateurs/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> utilisateurs</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Avatar" class=" control-label col-md-4 text-left"> Avatar </label>
										<div class="col-md-6">
										  <input  type='file' name='avatar' id='avatar' @if($row['avatar'] =='') class='required' @endif style='width:150px !important;'  />
					 	<div >
						{!! SiteHelpers::showUploadedFile($row['avatar'],'') !!}
						
						</div>					
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Group" class=" control-label col-md-4 text-left"> Group <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <select name='group_id' rows='5' id='group_id' class='select2 ' required  ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Club" class=" control-label col-md-4 text-left"> Club </label>
										<div class="col-md-6">
										  <select name='club_id' rows='5' id='club_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	<a href="#" data-toggle="tooltip" placement="left" class="tips" title="Le club du joueur"><i class="icon-question2"></i></a>
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Username" class=" control-label col-md-4 text-left"> Username <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('username', $row['username'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Password" class=" control-label col-md-4 text-left"> Password <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('password', $row['password'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('email', $row['email'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="First Name" class=" control-label col-md-4 text-left"> First Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('first_name', $row['first_name'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Last Name" class=" control-label col-md-4 text-left"> Last Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('last_name', $row['last_name'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Active" class=" control-label col-md-4 text-left"> Active <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('active', $row['active'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#group_id").jCombo("{!! url('utilisateurs/comboselect?filter=tb_groups:group_id:name') !!}",
		{  selected_value : '{{ $row["group_id"] }}' });
		
		$("#club_id").jCombo("{!! url('utilisateurs/comboselect?filter=foot_club:club_id:nom') !!}",
		{  selected_value : '{{ $row["club_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
