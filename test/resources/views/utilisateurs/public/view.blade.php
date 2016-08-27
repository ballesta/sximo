<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Group', (isset($fields['group_id']['language'])? $fields['group_id']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->group_id,'group_id','1:tb_groups:group_id:name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Club', (isset($fields['club_id']['language'])? $fields['club_id']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->club_id,'club_id','1:foot_club:club_id:nom') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Avatar', (isset($fields['avatar']['language'])? $fields['avatar']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->avatar,$fields['avatar'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Username', (isset($fields['username']['language'])? $fields['username']['language'] : array())) }}</td>
						<td>{{ $row->username}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('First Name', (isset($fields['first_name']['language'])? $fields['first_name']['language'] : array())) }}</td>
						<td>{{ $row->first_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Last Name', (isset($fields['last_name']['language'])? $fields['last_name']['language'] : array())) }}</td>
						<td>{{ $row->last_name}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	