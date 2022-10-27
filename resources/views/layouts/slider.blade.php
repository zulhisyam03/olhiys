{{-- Slider --}}

<div class="container px-0">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <span style="visibility: hidden">{{ $no = 0; }}</span>            
            @foreach ($slide as $item)                
                <div class="carousel-item {{ ($no == '0') ? 'active' : '' }}" data-bs-interval="5000" style="height: 300px;">
                    @if ($item->image == '')
                        <img src="{{ asset('images/slider/img_1_blank.jpg') }}" class="d-block w-100" alt="...">
                    @else
                        <img src="{{ asset('storage/'.$item->image) }}" class="d-block w-100" alt="...">
                    @endif                
                    <div class="carousel-caption text-uppercase d-none d-md-block text-light rounded-4" style="background: rgba(0, 0, 0, 0.56)">
                        <h5>{{ $item->title }}</h5>
                        <p><a href="/showBerita/{{ $item->slug }}"><button class="btn btn-success">Read More</button></a></p>
                    </div>
                </div>
                {{ $no++ }}
            @endforeach                    
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
{{-- End SLider --}}