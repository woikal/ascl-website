
@php
    $menu = [
        'dashboard' => ['label' => 'Dashboard'],
    ];
@endphp


<div class="log">
    <a href="{{ route('dashboard') }}">Dashboard</a>
</div>

<ul>
    @foreach($menu as $route => $item)
        <li><a href="{{ route($route) }}">{{ $item['label'] ?? $route }}</a>

            @isset($item['subitems'])
                <ul>
                    @foreach($item['subitems'] as $subroute => $subitem)
                        <li><a href="{{ route($subroute) }}">{{ $subitem['label'] }}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
