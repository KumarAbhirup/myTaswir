@if (count($errors) > 0)
  {{-- @foreach ($errors->all() as $error) --}}
    <div class="alert alert-danger">
      {{-- {{ $error }} --}}
      There is an error in your input. Please try again.
    </div>
  {{-- @endforeach --}}
@endif


@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
@endif
