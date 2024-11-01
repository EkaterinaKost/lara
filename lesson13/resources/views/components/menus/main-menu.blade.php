<ul class="ml-3">
    @foreach ($item as $menu_item)
    <li>
        <a href="{{$menu_item->link()}}"></a>
        @if ($menu_item->children()->count())
            <x-main-menu :item="$menu_item->children"></x-main-menu>
        @endif
    </li>
    
    @endforeach
</ul>