<div class="container">
    <div class="row">
        
            <div class="panel panel-default">
                <div class="panel-heading">Lista de usuarios</div>
                <div class="panel-body">

                	<table class="table">
                		<thead>
                			<th>Nombre</th>
                			<th>Usuario</th>
                			<th>Creado el</th>
                			<th>Actualizado el</th>

                		</thead>

                		@foreach($users as $user)

                		<tbody>
                			<tr>
                				<td>{{$user->name}}</td>
                				<td>{{$user->email}}</td>
                				<td>{{$user->created_at}}</td>
                				<td>{{$user->updated_at}}</td>

                			</tr>

                		</tbody>
                		@endforeach

                	</table>



				</div>
            </div>
       
    </div>
</div>