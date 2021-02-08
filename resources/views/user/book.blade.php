<!DOCTYPE html>
<html lang="en">
<x-nav/>
<body>
    
<div class="flex flex-wrap md items-center h-screen">
    <div class="bg-white w-full md:w-1/2 h-screen">
      <div class="mx-32">
          @foreach ($books as $book)
        <h1 class="text-6xl font-bold mt-16">{{$book->name}}</h1>

        <!-- country region island -->
        <div class="flex mt-16 font-light text-gray-500">
          <div class="pr-4">
            {{-- <span class="uppercase"></span>
            <p class="text-2xl text-gray-900 font-semibold pt-2">Japan</p> --}}
          </div>
          <div class="pr-4">
            {{-- <span class="uppercase">Region</span>
            <p class="text-2xl text-gray-900 font-semibold pt-2">Kanto</p> --}}
          </div>
          <div class="pr-4">
            {{-- <span class="uppercase">island</span>
            <p class="text-2xl text-gray-900 font-semibold pt-2">Honshu</p> --}}
          </div>
        </div>

        <!-- description -->
        <div
          class="description w-full sm: md:w-2/3 mt-16 text-gray-500 text-lg"
        >
         {{$book->summary}} 
        </div>
        <div
        class="description w-full sm: md:w-2/3 mt-16 text-gray-500 text-md"
      >
       {{$book->author->name}} 
      </div>
        {{-- <button class="uppercase mt-5 text-sm font-semibold hover:underline">
          read more
        </button> --}}
      </div>
    </div>
    <div class="bg-red-600 w-full md:w-1/2 h-screen">
      <img
        src="{{$book->imageUrl}}"
        class="h-screen w-full"
        alt=""
      />
    </div>
    @endforeach
  </div>
  <hr>
  <div class="flex justify-center">{{ $books->links() }}</div>
</body>
</html>



















