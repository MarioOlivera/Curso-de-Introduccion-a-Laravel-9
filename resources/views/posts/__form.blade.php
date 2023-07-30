@csrf

<label for="" class="uppercase text-gray-600 text-xs">Título</label>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{$post->title}}">

<label for="" class="uppercase text-gray-600 text-xs">Contenido</label>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4">{{$post->body}}</textarea>

<div class="flex justify-between items-center">
    <a href="{{route('posts.index')}}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>