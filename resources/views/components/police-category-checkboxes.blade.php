<strong>Category:</strong>
@foreach (['National Police HQ', 'Local Police Outpost', 'Specialist Police Outpost'] as $category)
    <label class="d-block mb-1" style="font-size:13px;">
        <input type="checkbox" name="policeCategory" value="{{ $category }}">
        {{ $category }} (<span data-police-category-count>0</span>)
    </label>
@endforeach
