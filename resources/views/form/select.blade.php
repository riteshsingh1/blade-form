<div class="form-group {{ $errors->has($name) ? ' has-error' : '' }} row">
    <label class="control-label col-md-3" for="{{ $name ?? '' }}">{{ ucfirst($title) }}</label>
    <div class="col-md-8">

        <select class="form-control" {{ $options ?? '' }} id="{{ $name ?? '' }}" name="{{ $name ?? '' }}">
            <option value="" disabled>{{ $default ?? 'Please Select' }}</option>
            @foreach($elements as $element)
                <option value="{{ $element->{$selected ??  'id'} }}"
                @if($element->{$selected ?? 'id'} == old($name,$value ?? null) ) {{ 'selected' }} @endif>
                    {{ $element->{$data ?? 'name'} ?? $element->name }} </option>
            @endforeach
        </select>

        @if ($errors->has($name))
            <span class="help-block"><strong>{{ $errors->first($name) }}</strong></span>
        @endif
    </div>
</div>