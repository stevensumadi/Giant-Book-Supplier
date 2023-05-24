<div class="row">
    <p class="fs-3 bg-secondary text-white my-3">{{ $title }}</p>
</div>
<div class="row">
    @if ($publishers->count())
        @foreach ($publishers as $publisher)
        <div class="col-3 p-0">
            <div class="card p-0 m-1">
                <img src="{{ $publisher->image }}" class="card-img-top" alt="...">
                <div class="card-body p-2">
                    <h5 class="card-title mb-0">{{ $publisher->name }}</h5>
                    <p class="card-title">{{ $publisher->address }}</p>
                    <a href="/publisher-detail/{{ $publisher->id }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <h1>There is no data</h1>
    @endif
</div>