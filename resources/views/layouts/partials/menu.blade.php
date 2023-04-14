
<ul class="navbar navbar-brand navbar-expand-lg bg-body-tertiary px-4 li">
    <li><a href="{{ route('dashboard')}}"   class="navbar nav-link active mx-4">Tableau de bord</a></li>
    <li><a href="{{ route('categories.index')}}"  class="navbar nav-link mx-4">Catégorie</a></li>
    <li><a href=""  class="navbar nav-link mx-4">Article</a></li>
    <li>{{ Auth::user()->name }}</li>
    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Deconnexion') }}
            </x-dropdown-link>
        </form>
    </li>
</ul>