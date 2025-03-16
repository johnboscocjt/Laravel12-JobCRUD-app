@props(['employer', 'width' => 90])

{{-- <img src="http://picsum.photos/seed/{{ rand(0,100000) }}/{{ $width }}"
      class="rounded-xl"> --}}

{{-- for public,loacl,uploadeed image --}}
{{-- <img src="{{ asset('storage/' . $employer->logo) }}" class="rounded-xl" width="{{ $width }}"> --}}


{{-- for https picsum factory generate image --}}
{{-- <img src="{{ asset($employer->logo) }}" class="rounded-xl" width="{{ $width }}"> --}}


{{-- combining the above logic --}}
@if (filter_var($employer->logo, FILTER_VALIDATE_URL) && str_starts_with($employer->logo, 'https'))
    <img src="{{ asset($employer->logo) }}" class="rounded-xl" width="{{ $width }}">
@else
    <img src="{{ asset('storage/' . $employer->logo) }}" class="rounded-xl" width="{{ $width }}">
@endif




{{-- alternative  --}}
{{-- <img src="{{ asset('storage/' . $employer->logo) }}"
      class="rounded-xl" width="{{ $width }}"
      alt="{{ $employer->name }}"> --}}
