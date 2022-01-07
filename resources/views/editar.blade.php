@extends('layout.menu')

@section('contenido')
<h1 class="title">
    Editar

</h1>
<div class="row" style="justify-content: flex-end;margin-bottom: 5px; margin-right: 10px;">
   
</div>
<div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px;">

</div>


<div class="card-body">
            
    <form action="{{Route('editarAction')}}" enctype="multipart/form-data" method="POST" autocomplete="off">
            <div class="form-group row">
               
                        {{ csrf_field() }}
                <div class="col-6">
                    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label>
                        Nombre
                    </label>
                    <div id="the-basics">
                        <input class="typeahead"  name="nombre" type="text" value="{{ $data->nombre }}">
                        <input class="typeahead" hidden readonly name="id" type="text" value="{{ $data->id }}">
                        @if ($errors->has('nombre'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                    </div>
                    </div>
                </div>
                <br>
                <div class="col-6">
                     <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                    <label>
                       Descripcion 
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead"  name="descripcion" type="text" value="{{ $data->descripcion }}">
                        @if ($errors->has('descripcion'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif
                    </div>
                    </div>
                </div>
                 <div class="col-6">
                     <div class="form-group{{ $errors->has('imagenes') ? ' has-error' : '' }}">
                    <label>
                       Imagenes 
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead"  name="imagenes" type="text" value="{{ $data->imagenes }}">
                        @if ($errors->has('imagenes'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('imagenes') }}</strong>
                                </span>
                            @endif
                    </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group{{ $errors->has('servicios') ? ' has-error' : '' }}">
                   <label>
                       Servicios
                    </label>
                    		<input class="typeahead"  name="servicios" type="text" value="{{ $data->servicios }}">
                    		@if ($errors->has('servicios'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('servicios') }}</strong>
                                </span>
                        @endif
                    		</div>
                </div>
                 <div class="col-6">
                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                   <label>
                       Direccion
                    </label>
                    		<input class="typeahead"  name="direccion" type="text" value="{{ $data->direccion }}">
                    		@if ($errors->has('direccion'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                        @endif
                    		</div>
                </div>
                 <div class="col-6">
                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                   <label>
                       Telefono
                    </label>
                    		<input class="typeahead"  name="telefono" type="text" value="{{ $data->telefono }}">
                    		@if ($errors->has('telefono'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                        @endif
                    		</div>
                </div>
                 <div class="col-6">
                    <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                   <label>
                       Horario
                    </label>
                    		<input class="typeahead"  name="horario" type="text" value="{{ $data->horario }}">
                    		@if ($errors->has('horario'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('horario') }}</strong>
                                </span>
                        @endif
                    		</div>
                </div>
                <br>
                <div class="col-12 mt-5 row " style="justify-content: center;">
                            
                           
                                <input class="btn btn-info" name="actualizar"  type="submit" value="Editar">
                                
                        </div>
            </div>

                        </form>
        </div>

     

    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>


<!-- #END# Striped Rows -->
@endsection
@section('script')
 <!--<script src="{{URL::asset('assets/js/pages/apps/support.js')}}"></script>-->
 <script src="{{URL::asset('assets/js/pages/widgets/widget.js')}}"></script>
 <script src="{{URL::asset('assets/js/chart.min.js')}}"></script>
 <!-- Echart Js -->
<script src="{{URL::asset('assets/js/bundles/echart/echarts.js')}}"></script>
<script src="{{URL::asset('assets/js/pages/charts/echarts.js')}}"></script>
 <script src="{{URL::asset('assets/js/pages/charts/chartjs.js')}}"></script>

@endsection
