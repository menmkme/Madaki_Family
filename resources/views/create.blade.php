@extends('layouts.app')

@section('content')
      <div class="m-auto w-4/5 py-7">
          <div class="text-center">
              <h1 class="text-5xl uppercase bold">
                  Adding Something to Madakii Profile
              </h1>
      </div>
      <div class="flex justify-center pt-10">
          <form action="/madaki-house/store" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @method('POST') --}}
              <div class="block">

                <input
                type="file"
                class="block shadow-5xl mb-7 p-2 w-80 italic placeholder-gray-400"
                name="image">

                  <input
                  type="text"
                  class="block shadow-5xl mb-7 p-2 w-80 italic placeholder-gray-400"
                  name="First Name"
                  placeholder="new name...">

                  <input
                  type="text"
                  class="block shadow-5xl mb-7 p-2 w-80 italic placeholder-gray-400"
                  name="Surname"
                  placeholder="new surname...">

                  <input
                  type="text"
                  class="block shadow-5xl mb-7 p-2 w-80 italic placeholder-gray-400"
                  name="Last Name"
                  placeholder="new last name...">


                  <input
                  type="date"
                  class="block shadow-5xl mb-7 p-2 w-80 italic placeholder-gray-400"
                  name="DOB"
                  placeholder="...">

                  <select name="State" class="p-2 mb-7">
                      <option>Select State</option>
                      @foreach (get_states() as $state)
                          <option value="{{ $state->id }}">{{ $state->name }}</option>
                      @endforeach
                  </select>

                  <input
                  type="text"
                  class="block shadow-5xl mb-7 p-2 w-80 italic placeholder-gray-400"
                  name="LGA"
                  placeholder="LGA...">

                  {{-- <input
                  type="text"
                  class="block shadow-5xl mb-7 p-2 w-80 italic placeholder-gray-400"
                  name="Description"
                  placeholder="LGA..."> --}}

                  <textarea class="mb-7" rows="15" cols="39" name="Description" placehoolder="Enter text here..."></textarea>


                  <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                      Submit

                  </button>

              </div>
          </form>

      </div>
       @if ($errors->any())
          <div class="w-4/8 m-auto text-center">
                @foreach ($errors->all() as $error)
                <li class="text-red-500 list-none">
                    {{ $error }}
                </li>
                @endforeach
          </div>
          @endif
@endsection

@section('extra_script')
          <script>
              alert(`hello`)
          </script>
@endsection
