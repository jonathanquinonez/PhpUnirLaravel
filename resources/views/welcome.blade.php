@extends('layout.menu')

@section('contenido')
<h1>
    Smart Pet - PHP Unir
</h3>
<div class="card">
    <div class="card-body">
            <div class="row" style="justify-content: flex-end ;margin-bottom: 5px; margin-right: 10px;">
                 
    <a   href="{{route('nuevoView')}}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i> Crear</button> </a>
                </div>

        <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                           Nombre
                        </th>
                        <th>
                          Descripcion
                        </th>
                        <th>
                            imagenes
                        </th>
                        <th>
                            Servicios
                        </th>
                        <th>
                                Direccion
                        </th>
                        <th>
                            Telefono
                        </th>
                        <th>
                            Horario
                        </th>
                        <th>
                            Ver
                        </th>
                         <th>
                            Eliminar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dataf)
                    <tr>
                        <td>
                            {{$dataf->id}}
                        </td>
                        <td>
                            {{$dataf->nombre}}
                        </td>
                        <td>
                            {{$dataf->descripcion}}
                        </td>
                        <td>
                            {{$dataf->imagenes}}
                        </td>
                        <td>
                            {{$dataf->servicios}}
                        </td>
                        <td>
                            {{$dataf->direccion}}
                        </td>
                        <td>
                           {{$dataf->telefono}}
                        </td>
                        <td>
                            {{$dataf->horario}}
                        </td>
                        <td>
                             <a href="{{Route('editarView', [$dataf->id])}}">
                               <label class="badge badge-success">Ver</label>
                            </a>
                        </td>
                        <td>
                             <a href="{{Route('eliminarAction', [$dataf->id])}}">
                               <label class="badge badge-danger">Eliminar</label>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                           Nombre
                        </th>
                        <th>
                          Descripcion
                        </th>
                        <th>
                            imagenes
                        </th>
                        <th>
                            Servicios
                        </th>
                        <th>
                                Direccion
                        </th>
                        <th>
                            Telefono
                        </th>
                        <th>
                            Horario
                        </th>
                        <th>
                            Ver
                        </th>
                        <th>
                            Eliminar
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{URL::asset('assets/js/table.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection
