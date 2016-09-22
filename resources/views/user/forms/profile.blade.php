<div class="container">
    <div class="row">
          <div class="col-md-6 col-md-offset-3 ">
            <div class="panel panel-primary">
                <div class="panel-heading">Perfil de Usuario</div>
                <div class="panel-body">
                	<table class="table">       		
                		<tbody>
                			<tr>
                				<td>Nombre: </td>
                				<td>{{$user->name}}</td>
                			</tr>
                			<tr>
                				<td>E-mail:</td>
                				<td>{{$user->email}}</td>
                			</tr>
                			<tr>
                				<td>Fecha de registro:</td>
                				<td>{{$user->created_at}}</td>	
                			</tr>
                			<tr>
                				<td>Ultima edición</td>
                				<td>{{$user->updated_at}}</td>
                			</tr>
                		</tbody>            
                	</table>
				</div>
            </div>
       </div>
    </div>
</div>

	





