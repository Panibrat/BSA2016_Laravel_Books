@extends("app")


@section('pagetitle')
	Edit  User
@stop

@section('content')
<!--form method="POST" action="/route(users.index)users"-->
{!! Html::ul($errors->all()) !!}
{!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) !!}



    <div class="form-group">
        <label for="firstname">Имя: *</label>
        <input class="form-control" placeholder="Имя" name="firstname" type="text" id="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Фамилия: *</label>
        <input class="form-control" placeholder="Фамилия" name="lastname" type="text" id="lastname">
    </div>
    <div class="form-group">
        <label for="email">Email *</label>
        <input class="form-control" placeholder="Email" name="email" type="text" id="email">
    </div>
    <div class="form-group">
        <input class="btn btn-primary"  type="submit" value="Обновить">
    </div>
    
 {!! Form::close() !!}   
<!--</form>-->
    
@stop