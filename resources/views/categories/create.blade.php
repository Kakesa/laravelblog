<x-app-layout>
    <x-slot name="title">Listes des categories</x-slot>
    <!-- /resources/views/post/create.blade.php -->
<h1>Create Post</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
<form action="{{route('categories.store')}}" class="form-group" method="post">
    @csrf
    <p>
        Nom:
        <input type="text" name="name" id="">
    </p>
    <p>Description:
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </p>
    <p><button type="submit" class="btn btn-primary">Ajouter</button></p>
</form>
   
</x-app-layout>

