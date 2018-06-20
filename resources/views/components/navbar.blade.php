
@foreach(navigatorSort($navbars) as $nav)
    <li class="{{ $nav['selected'] ? 'active' : '' }} {{ !empty($nav['nodes']) ? 'wz-has-child' : '' }}" data-type="{{ $nav['type'] }}">
        <a href="{{ $nav['url'] }}" title="{{ $nav['name'] }}" class="wz-nav-item">
            {{ $nav['name'] }}
        </a>

        @if(!empty($nav['nodes']))
            <ul>
                @include('components.navbar', ['navbars' => $nav['nodes']])
            </ul>
        @endif
    </li>
@endforeach