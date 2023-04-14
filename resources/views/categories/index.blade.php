<x-app-layout>
  <x-slot name="title">Listes des categories</x-slot>
  <h1>Liste des catégories ({{$categories->total()}})</h1>
    
    <p class="text-end"><a href="{{ route('categories.create') }}" class="btn btn-primary">+Ajouter</a></p>
    @php
      $profession ="Devéloppeur web"
    @endphp
    <x-test :profession="$profession" :name="__('Hope')">
      <p>Test slot</p>
      <x-slot name="title">Laravel</x-slot>
    </x-test>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $item)
            <tr>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('DD/MM/Y h:mm a') }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('categories.show', $item->id)}}">Voir</a></li>
                          <li><a class="dropdown-item" href="{{ route('categories.edit', $item->id)}}">Editer</a></li>
                          <li><a class="dropdown-item" onclick="supprimer(event)" href="{{ route('categories.destroy', $item->id)}}"  data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</a></li>
                        </ul>
                      </div>
                    
                </td>
            </tr>
            @empty
              <tr>
                <td colspan="4">
                    Aucun enregistrement
                </td>
              </tr>  
            @endforelse
            
        </tbody>
    </table>

    {{ $categories->links() }}


      <!-- Modal -->

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="deleteForm">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                Voulez-vous vraiment effectuer cette action?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-danger">Supprimer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  <x-slot name="scripts">
    <script>
      function supprimer(event) {
        var route = event.target.getAttribute('href')
        deleteForm.setAttribute('action', route);
       
      }
    </script>
  </x-slot>
    

</x-app-layout>
    