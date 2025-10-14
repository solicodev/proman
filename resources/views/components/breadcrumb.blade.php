@props(['title', 'items', 'backgroundImage'])

<section class="hero-area">
    <div class="breadcrumbs-wrapper"
        @if (isset($backgroundImage)) style="background-image:url({{ $backgroundImage }});" @else style="background-image:url({{ asset('assets/images/breadcrumb-bg.jpg') }});" @endif>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="page-title">
                        <h1 class="breadcrumbs-title">{{ $title }}</h1>
                        <ul class="breadcrumbs-link">
                            <li>
                                <a href="{{ route('home') }}">خانه</a>
                            </li>
                            @foreach ($items as $item)
                                @if ($item['title'])
                                    @if ($item['link'])
                                        <li>
                                            <a href="{{ $item['link'] }}">
                                                {{ $item['title'] }}
                                            </a>
                                        </li>
                                    @else
                                        <li class="active">
                                            {{ $item['title'] }}
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
