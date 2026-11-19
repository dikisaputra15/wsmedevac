<strong>Facility Level:</strong>
@foreach (['National Hospital', 'District Hospital', 'Clinic / Health Center'] as $level)
    <label class="d-block mb-1" style="font-size:13px;">
        <input type="checkbox" name="hospitalLevel" value="{{ $level }}">
        {{ $level }} (<span data-facility-level-count>0</span>)
    </label>
@endforeach
