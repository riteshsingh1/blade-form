<button class="btn {{ $class ?? 'btn-primary' }}" type="{{ $type ?? 'submit' }}">
    <i class="fa fa-fw fa-lg fa-check-circle"></i>
    {{ $title ?? 'Save' }}
</button>