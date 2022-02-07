@extends('layouts.app')

@section('content')
    <form action="{{route('partners')}}" method="post">
        @csrf
        <div>
            <label for="companyname" class='sr-only'>Company Name</label>
            <input type="text" placeholder="Company Name" name='companyname' id="companyname"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('companyname') border-red-500 @enderror" values=''>
        </div>
        @error('companyname') <div class="text-red-500 mt-2 text-sm"> {{$message}} </div> @enderror


        <div>
            <label for="companyemail" class='sr-only'>Email</label>
            <input type="email" placeholder="Email" name='companyemail' id="companyemail"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('companyemail') border-red-500 @enderror" values=''>
        </div>
        @error('companyemail') <div class="text-red-500 mt-2 text-sm"> {{$message}} </div> @enderror


        <div>
            <label for="phone" class='sr-only'>Phone Number</label>
            <input type="text" placeholder="Contact Phone Number" name='phone' id="phone"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('phone') border-red-500 @enderror" values=''>
        </div>
        @error('phone') <div class="text-red-500 mt-2 text-sm"> {{$message}} </div> @enderror


        <div>
            <label for="companywebsite" class='sr-only'>Website</label>
            <input type="text" placeholder="Website" name='companywebsite' id="companywebsite"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('companywebsite') border-red-500 @enderror" values=''>
        </div>
        @error('companywebsite') <div class="text-red-500 mt-2 text-sm"> {{$message}} </div> @enderror


        <div>
            <label for="preferpickup1" class='sr-only'>Preferred Pickup Location</label>
            <textarea placeholder="Preferred Pickup Location" name='preferpickup1' id="preferpickup1"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('preferpickup1') border-red-500 @enderror" values='' ></textarea>
        </div>
        @error('preferpickup1') <div class="text-red-500 mt-2 text-sm"> {{$message}} </div> @enderror

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
        </div>

    </form>
@endsection