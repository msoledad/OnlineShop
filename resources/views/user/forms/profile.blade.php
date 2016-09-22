<div class="container">
    <div class="row">
        
            <div class="panel panel-default">
                <div class="panel-heading">Perfil de Usuario</div>
                <div class="panel-body">

                	<table class="table">
                              		
                		<tbody>
                			<tr>
                				<td rowspan="5"><img src="{{ $user->avatar }}"></td>
                				
                			</tr>
                			<tr>
                				<td>Nombre: </td>
                				<td>{{$user->name}}</td>
                			</tr>
                			<tr>
                				<td>E-mail:</td>
                				<td>{{$user->email}}</td>
                			</tr>
                			<tr>
                				<td>Fecha de creación:</td>
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

	





