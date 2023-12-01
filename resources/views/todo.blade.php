<!DOCTYPE html>
<html>
    <head>
        <title>Todo App</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="flex flex-col justify-center items-center h-screen bg-gray-600 text-white">
            <img src="/logo.png" />
            <h2 class="text-6xl my-8">Todo App</h2>
            <div class="bg-gray-800 px-8 py-8 rounded-xl">
                <form method="POST" action="/" class="">
                    @csrf
                    <div>
                        <input id="todo" name="todo" type="text" class="bg-black rounded-lg px-4 py-2"/>
                        <button class="p-4 py-2 bg-black rounded-lg" type="submit">Add</button>
                    </div>
                </form>
                <div class="my-4 py-8 flex flex-col gap-4 bg-gray-800">
                    @foreach ($todos as $todo)
                        <div class="flex justify-between">
                            <input class="todo-item bg-black rounded-lg px-4 py-2" data-id="{{$todo->id}}" value="{{$todo->description}}" type="text"></input>
                            <a href="/delete/{{$todo->id}}" class="-translate-x-full my-auto px-2">X</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <small class="text-center my-4">Made by Elif Nur Aslıhan Celepoğlu</small>
        </div>
    </body>
</html>
