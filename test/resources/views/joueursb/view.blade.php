@extends('layouts.app')

@section('content')
<div class="page-content row">
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox "> 
	<div class="sbox-title"> 

	 <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>

	 	<div class="sbox-tools">
	   		<a href="{{ URL::to('joueursb?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('joueursb/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif 
		</div>
	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Photo', (isset($fields['photo']['language'])? $fields['photo']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->photo,$fields['photo'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mail', (isset($fields['mail']['language'])? $fields['mail']['language'] : array())) }}</td>
						<td>{{ $row->mail}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Password', (isset($fields['password']['language'])? $fields['password']['language'] : array())) }}</td>
						<td>{{ $row->password}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nom', (isset($fields['nom']['language'])? $fields['nom']['language'] : array())) }}</td>
						<td>{{ $row->nom}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Prenom', (isset($fields['prenom']['language'])? $fields['prenom']['language'] : array())) }}</td>
						<td>{{ $row->prenom}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Club Id', (isset($fields['club_id']['language'])? $fields['club_id']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->club_id,'club_id','1:foot_club:club_id:nom') }} </td>
						
					</tr>
				
			</tbody>	
		</table>   
	
	</div>
</div>	

	</div>
</div>
	  
@stop