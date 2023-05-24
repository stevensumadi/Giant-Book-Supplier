<div class="row">
    <p class="fs-3 bg-secondary text-white my-3">{{ $title }}</p>
</div>
<div class="row">
    @if ($books->count())
        @foreach ($books as $book)
        <div class="col-3 p-0">
            <div class="card p-0 m-1">
                <img src="{{ $book->image }}" class="card-img-top" alt="...">
                <div class="card-body p-2">
                    <h5 class="card-title mb-0">{{ $book->title }}</h5>
                    <p class="card-text mb-0">by</p>
                    <p class="card-title">{{ $book->author }}</p>
                    <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <h1>There is no data</h1>
    @endif
</div>