<button type="{{ $type ?? ''}}" name="{{ $name ?? '' }}" value="{{ $value ?? '' }}" id="{{ $id ?? '' }}" class="{{ $class ?? '' }}" {{ $attributes }}>
    {{ $slot }}
</button>
