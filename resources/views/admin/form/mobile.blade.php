<div class="form-group {!! !$errors->has($errorKey) ?: 'has-error' !!}">

    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

    <div class="col-sm-6">

        @include('admin::form.error')

        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-phone"></i>
            </div>
            <input type="text" name="{{$name}}" value="{{ old($column, $value) }}" class="form-control {{$class}}" placeholder="{{ $placeholder }}" style="width: 150px" {!! $attributes !!} />
        </div>

        @include('admin::form.help-block')

    </div>
</div>
