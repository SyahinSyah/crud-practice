<html>
    <x-nav/>
    <body>
    <div class="flex h-screen">
        <div class="w-1/2 flex justify-center p-4 shadow-md">
           <img src="{{$author->imageUrl}}" alt="image" class="rounded-lg">
        </div>

        <div class="w-1/2 flex  h-screen justify-center items-center bg-indigo-50">
            <div class="">
                <div class="w-96 m-auto ">
                    <div
                  class=" grid grid-cols-2 grid-rows-7 grid-flow-row overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                >
                  <div class="col-span-3 row-span-4 p-1 m-1">
                    <a href="#">
                      <img
                        src="{{$author->imageUrl}}"
                        alt="Placeholder"
                        class="rounded-t-xl object-cover h-48 w-full"
                      />
                    </a>
                  </div>
              
                  <div class="col-span-3 row-span-1">
                    <div class="flex align-bottom flex-col leading-none p-2 md:p-4">
                      <div class="flex flex-wrap justify-between items-center ">
                        <div class="w-1/15 sm:w-4/12 px-4">
                        <p
                          class="flex items-center  text-black ">
                          <img
                            alt="Placeholder"
                            class="block rounded-lg object-scale-down"
                            src="{{$author->imageUrl}}"
                          />
                        </div>
                          <span class="ml-2 text-sm"> {{$author->name}} </span>
                      </p>
                        <p  class="text-black ml-2 text-sm">
                        {{$author->age}}  <span>years' old </span>
                      </p>

                      </div>
                    </div>
                  </div>
              
                  <div class="col-span-3 row-span-1">
                    <header
                      class="flex items-center justify-between leading-tight p-2 md:p-4"
                    >
                    <h1 class="text-lg">
                        <p class="no-underline text-black text-left">
                          {{$author->bio}}
                        </p>
                    </h1>
                    </header>
                  </div>

                  <div class="col-span-3 row-span-1">
                    <header
                      class="flex flex-col items-center justify-between leading-tight p-2 md:p-4">
                   
                      <table class="border-collapse w-full">
                          <tr class="border-b  border-purple-300">
                              <td class="">Book</td>
                              <td class="">Price</td>
                              <td class="text-right">Page</td>
                          </tr>
                          @foreach ($books as $book)
                          <tr class="border-t border-purple-300 ">
                              <td class="">{{$book->name}}</td>
                              <td class=""><span>RM </span>{{$book->price}}</td>
                              <td class="text-right">{{$book->page}}</td>
                          </tr>
                          @endforeach
                      </table>
                    </header>
                  </div>

                </div>
              </div>
              </div>
              
        </div>
    </div>
            <style>
                .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
            }
            .hide-scroll-bar::-webkit-scrollbar {
            display: none;
            }
                </style>
    </body>
</html>