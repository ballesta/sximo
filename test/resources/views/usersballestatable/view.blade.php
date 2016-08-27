@if($setting['view-method'] =='native')
<div class="sbox">
	<div class="sbox-title">  
		<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
			<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')">
			<i class="fa fa fa-times"></i></a>
		</h4>
	 </div>

	<div class="sbox-content"> 
@endif	

		<table class="table table-striped table-bordered" >
			<tbody>	
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Group Id', (isset($fields['group_id']['language'])? $fields['group_id']['language'] : array())) }}</td>
						<td>{{ $row->group_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Club Id', (isset($fields['club_id']['language'])? $fields['club_id']['language'] : array())) }}</td>
						<td>{{ $row->club_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Username', (isset($fields['username']['language'])? $fields['username']['language'] : array())) }}</td>
						<td>{{ $row->username}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Password', (isset($fields['password']['language'])? $fields['password']['language'] : array())) }}</td>
						<td>{{ $row->password}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Avatar', (isset($fields['avatar']['language'])? $fields['avatar']['language'] : array())) }}</td>
						<td>{{ $row->avatar}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Active', (isset($fields['active']['language'])? $fields['active']['language'] : array())) }}</td>
						<td>{{ $row->active}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Login Attempt', (isset($fields['login_attempt']['language'])? $fields['login_attempt']['language'] : array())) }}</td>
						<td>{{ $row->login_attempt}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Last Login', (isset($fields['last_login']['language'])? $fields['last_login']['language'] : array())) }}</td>
						<td>{{ $row->last_login}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Reminder', (isset($fields['reminder']['language'])? $fields['reminder']['language'] : array())) }}</td>
						<td>{{ $row->reminder}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Activation', (isset($fields['activation']['language'])? $fields['activation']['language'] : array())) }}</td>
						<td>{{ $row->activation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Remember Token', (isset($fields['remember_token']['language'])? $fields['remember_token']['language'] : array())) }}</td>
						<td>{{ $row->remember_token}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Last Activity', (isset($fields['last_activity']['language'])? $fields['last_activity']['language'] : array())) }}</td>
						<td>{{ $row->last_activity}} </td>
						
					</tr>
				
			</tbody>	
		</table>  
			
		 	

@if($setting['form-method'] =='native')
	</div>	
</div>	
@endif	

<script>
$(document).ready(function(){

});
</script>	