<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
    </head>
<body>
    <div class="w-full h-screen flex justify-center items-center bg-gray-200 ">
        <div class="px-20 py-40 bg-indigo-200  flex flex-col rounded-md shadow-md form-group ">
            <form action="/login" method="POST">
                @csrf
                <p class="font-mono text-lg text-center font-bold">SIGN IN</p>
                <p>Email </p>
                <input type="email" name="email" id="id">
                @error('email')    
                <p class="text-sm text-red-700">{{$message}}</p>
                @enderror
                <p >Password</p>
                <input type="password" name="password" id="password">
                @error('password')
                <p class="text-sm text-red-700">
                {{$message}}
               </p>
                @enderror
                <div class="mt-5 flex justify-between">
                    <button class="p-1 border border-collapse border-indigo-500 rounded bg-indigo-400 hover:bg-indigo-100">Sign In</button> 
                    <a href="/home" class="p-1 border border-collapse border-indigo-500 rounded  bg-red-500 hover:bg-indigo-100">Cancel</a>
                </form> 
                </div>
        </div>
    </div>
</body>
</html>