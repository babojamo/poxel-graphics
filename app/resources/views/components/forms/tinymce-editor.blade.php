<textarea rows="{{ $rows ?? '3' }}" placeholder="{{ $placeholder ?? 'Content' }}" class="form-control"
    id="{{ $id ?? 'content' }}" name="{{ $name ?? 'content' }}">{{ $slot }}</textarea>