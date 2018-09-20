<div class="form-group {{ $errors->has($name) ? ' has-error' : '' }} row">
    <label class="control-label col-md-3">{{ ucfirst($title) }}</label>
    <div class="col-md-8">
        <textarea class="form-control is-invalid"
               type="{{ $type ?? 'text' }}" {{ $custom ?? '' }}
               name="{{ $name }}"
               placeholder="{{ $placeholder }}"
                  >{{ $value ?? old($name) }}</textarea>
        @if ($errors->has($name))
            <span class="help-block"><strong>{{ $errors->first($name) }}</strong></span>
        @endif
    </div>
</div>