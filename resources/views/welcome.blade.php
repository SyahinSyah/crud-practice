<html>
    <x-nav/>

    <div class="w-2/3 mx-auto flex justify-center" >
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th class="px-3 py-5  border-b border-grey-light ">Book</th>
                        <th class="px-3 py-5  border-b border-grey-light ">Overview</th>
                        <th class="px-3 py-5  border-b border-grey-light ">Description</th>
                        <th class="px-3 py-5  border-b border-grey-light ">Price</th>
                        <th class="px-3 py-5  border-b border-grey-light ">Page</th>
                        <th class="px-3 py-5  border-b border-grey-light ">Coulor</th>
                        <th class="px-3 py-5  border-b border-grey-light ">Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr class="hover:bg-gray-50">
                        <td class="p-2">{{$book->name}}</td>
                        <td class="p-2"><img src="{{$book->imageUrl}}" alt="test" class="rounded-lg  object-scale-down"></td>
                        <td class="p-2">{{$book->summary}}</td>
                        <td class="text-center"><span>RM   </span>{{$book->price}}</td>
                        <td class="text-center">{{$book->page}}</td>
                        <td class="p-2">{{$book->color}}</td>
                        <td class="p-2"><a href="/book/{{$book->author->id}}" class="hover:underline hover:text-blue-500">{{$book->author->name}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $books->links() }}
        </div>
    </div>

</html>