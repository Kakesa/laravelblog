<x-app-layout>
    <x-slot name="title">Listes des categories</x-slot>
    <h2>Editer une categorie</h2>
    <form action="{{route('categories.update', $category->id)}}" class="form-group" method="post">
        @method('PUT')
        @csrf
        <p>
            Nom:
            <input type="text" value="{{$category->name}}" name="name" id="">
        </p>
        <p>Description:
            <textarea name="description" id="" cols="30"  rows="10">{{$category->description}}</textarea>
        </p>
        <p><button type="submit" class="btn btn-primary">Modifier</button></p>
    </form>  

</x-app-layout>
    