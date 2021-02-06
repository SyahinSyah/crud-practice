<html>
    <x-nav/>

    <div class="w-2/3 mx-auto flex justify-center">
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th class="px-3 py-5  border-b border-grey-light ">Book</th>
                        <th>Description</th>
                        <th>Overview</th>
                        <th>Price</th>
                        <th>Page</th>
                        <th>Color</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr class="hover:bg-grey-lighter">
                        <td>{{$book->name}}</td>
                        <td>{{$book->summary}}</td>
                        <td><img src="{{$book->imageUrl}}" alt="test"></td>
                        <td>{{$book->price}}</td>
                        <td>{{$book->page}}</td>
                        <td>{{$book->color}}</td>
                        <td><a href="/{{$book->author->id}}">{{$book->author->name}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</html>