<nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
            </svg>
        </a>
    </div>

    <p class="text-muted nav-heading mt-4 mb-1">
        <span>Components</span>
    </p>
    <ul class="nav nav-pills nav-sidebar flex-column w-100 mb-2">
        @foreach ($items as $item)
            <li class="nav-item mb-1">
                <a href="{{ route($item['route']) }}" class="nav-link {{Route::is($item['active'])?'active':''}}">
                    <p class="mb-0">
                        {{ $item['title'] }}
                        <i class="{{ $item['icon'] }}"></i>
                        @if (isset($item['badge']))
                            <span class="right badge badge-danger mt-1">{{$item['badge']}}</span>
                        @endif
                    </p>
                </a>
            </li>
        @endforeach
    </ul>
    {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Products</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./ui-color.html"><span
                            class="ml-1 item-text">Colors</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./ui-typograpy.html"><span
                            class="ml-1 item-text">Typograpy</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./ui-icons.html"><span
                            class="ml-1 item-text">Icons</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./ui-buttons.html"><span
                            class="ml-1 item-text">Buttons</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./ui-notification.html"><span
                            class="ml-1 item-text">Notifications</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./ui-modals.html"><span
                            class="ml-1 item-text">Modals</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./ui-tabs-accordion.html"><span
                            class="ml-1 item-text">Tabs & Accordion</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="./ui-progress.html"><span
                            class="ml-1 item-text">Progress</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item w-100">
            <a class="nav-link" href="widgets.html">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Widgets</span>
                <span class="badge badge-pill badge-primary">New</span>
            </a>
        </li>
    </ul> --}}
</nav>
