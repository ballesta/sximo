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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Photo', (isset($fields['photo']['language'])? $fields['photo']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->photo,$fields['photo'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Name', (isset($fields['nom']['language'])? $fields['nom']['language'] : array())) }}</td>
						<td>{{ $row->nom}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mail', (isset($fields['mail']['language'])? $fields['mail']['language'] : array())) }}</td>
						<td>{{ $row->mail}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('First name', (isset($fields['prenom']['language'])? $fields['prenom']['language'] : array())) }}</td>
						<td>{{ $row->prenom}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mot De Passe', (isset($fields['mot_de_passe']['language'])? $fields['mot_de_passe']['language'] : array())) }}</td>
						<td>{{ $row->mot_de_passe}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Club', (isset($fields['club_id']['language'])? $fields['club_id']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->club_id,'club_id','1:foot_club:club_id:nom') }} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	