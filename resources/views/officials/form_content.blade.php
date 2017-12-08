<form>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Nombre</label>
                <input type="text" value="{{isset($official) ? $official->name : old('name')}}" id="name" name="name" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Apellidos</label>
                <input type="text" value="{{isset($official) ? $official->lastname : old('lastname')}}" id="lastname" name="lastname" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Edad</label>
                <input type="text" value="{{isset($official) ? $official->age : old('age')}}" id="age" name="age" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Distrito</label>
                <input type="text" value="{{isset($official) ? $official->district : old('district')}}" id="district" name="district" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Tipo</label>
                <input type="text" value="{{isset($official) ? $official->type : old('type')}}" id="type" name="type" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Partido Politico</label>
                <input type="text" value="{{isset($official) ? $official->party : old('party')}}" id="party" name="party" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Posición Actual</label>
                <input type="text" value="{{isset($official) ? $official->actual_position : old('actual_position')}}" id="actual_position" name="actual_position" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Twitter</label>
                <input type="text" value="{{isset($official) ? $official->twitter : old('twitter')}}" id="twitter" name="twitter" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Seguidores en Twitter</label>
                <input type="text" value="{{isset($official) ? $official->twitter_count : old('twitter_count')}}" id="twitter_count" name="twitter_count" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Facebook</label>
                <input type="text" value="{{isset($official) ? $official->facebook : old('facebook')}}" id="facebook" name="facebook" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Conteo en Facebook</label>
                <input type="text" value="{{isset($official) ? $official->facebook_count : old('facebook_count')}}" id="facebook_count" name="facebook_count" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Instagram</label>
                <input type="text" value="{{isset($official) ? $official->instagram : old('instagram')}}" id="instagram" name="instagram" class="form-control" >
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Veces que ha sido candidato</label>
                <input type="text" value="{{isset($official) ? $official->aspirated_positions : old('aspirated_positions')}}" id="aspirated_positions" name="aspirated_positions" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Grado Academico</label>
                <input type="text" value="{{isset($official) ? $official->academic_degree : old('academic_degree')}}" id="academic_degree" name="academic_degree" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Puestos Públicos</label>
                <input type="text" value="{{isset($official) ? $official->public_charges : old('public_charges')}}" id="public_charges" name="public_charges" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Lo mas destacado (Cumplio y no cumplio)</label>
                <input type="text" value="{{isset($official) ? $official->highlights : old('highlights')}}" id="highlights" name="highlights" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Pavimentación</label>
                <input type="text" value="{{isset($official) ? $official->paving : old('paving')}}" id="paving" name="paving" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Recolección de basura </label>
                <input type="text" value="{{isset($official) ? $official->garbage_collection : old('garbage_collection')}}" id="garbage_collection" name="garbage_collection" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Gastos WTF </label>
                <input type="text" value="{{isset($official) ? $official->wtf_expenses : old('wtf_expenses')}}" id="wtf_expenses" name="wtf_expenses" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Nómina Funcionarios de Primer Nivel </label>
                <input type="text" value="{{isset($official) ? $official->payroll_officials : old('payroll_officials')}}" id="payroll_officials" name="payroll_officials" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Seguridad </label>
                <input type="text" value="{{isset($official) ? $official->security : old('security')}}" id="security" name="security" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Redes Economicas </label>
                <input type="text" value="{{isset($official) ? $official->economic_networks : old('economic_networks')}}" id="economic_networks" name="economic_networks" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Redes de Poder </label>
                <input type="text" value="{{isset($official) ? $official->power_networks : old('power_networks')}}" id="power_networks" name="power_networks" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Membresías en Partidos Politicos </label>
                <input type="text" value="{{isset($official) ? $official->party_memberships : old('party_memberships')}}" id="party_memberships" name="party_memberships" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Anomalias </label>
                <input type="text" value="{{isset($official) ? $official->anomalies : old('anomalies')}}" id="anomalies" name="anomalies" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Premios y reconocimientos </label>
                <input type="text" value="{{isset($official) ? $official->awards : old('awards')}}" id="awards" name="awards" class="form-control" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group label-floating">
                <label class="control-label">Fuentes </label>
                <input type="text" value="{{isset($official) ? $official->sources : old('sources')}}" id="sources" name="sources" class="form-control" >
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary pull-right">Guardar Funcionario</button>
    <div class="clearfix"></div>
</form>
