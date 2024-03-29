{!! Form::open( ['id' => 'form_edit_rent'] ) !!}
<div class="modal fade" id="edit-rent-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Rental ({!!  $model->id !!})</h4>
                <button type="button" class="close" aria-label="Close" onclick="Rent.closeEdit()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    {{ Form::hidden('idRent', $model->id , array('id' => 'idRent')) }}
                    {{ Form::hidden('idCar', $model->car->id , array('id' => 'idCar')) }}

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label input-sm">Plate</label>
                            {!! Form::input('text', 'plate', $model->car->plate, ['class' => 'form-control input-sm','readonly']) !!}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label input-sm">Brand</label>
                            {!! Form::input('text', 'brand', $model->car->brand->title, ['class' => 'form-control  input-sm','readonly']) !!}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Date From</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                </div>
                                {!! Form::input('text', 'date_from', date('Y-m-d H:i',strtotime($model->date_from)), ['id'=>'datefromId','class' => 'form-control input-sm','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Date To</label>
                            <div class="input-group date">
                                <div class="input-group-addon">

                                </div>
                                {!! Form::input('text', 'date_to', !empty($model->date_to)?date('Y-m-d H:i',strtotime($model->date_to)):'' , ['id'=>'datetoId','class' => 'form-control input-sm','autocomplete'=>'off','data-validation'=>'required','data-validation-error-msg-required'=>'Campo obrigatório']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="Rent.closeEdit()">Back</button>
                    <button type="button" class="btn btn-primary"   onclick="Rent.update()">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

<script>
    // $(document).ready(function() {
    //     // datepicker
    //     $('.date').datepicker({
    //     });
    //
    //     // timepicker
    //     $('.timepickerinput').timepicker({
    //         minuteStep: 5,
    //         showMeridian: false,
    //         defaultTime: false
    //     });
    // });
</script>
