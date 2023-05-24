<div class="row">
    <p class="fs-3 bg-secondary text-white my-3">{{ $title }}</p>
</div>
<div class="row">
    <div class="card p-0">
        <img src="{{ $book->image }}" class="card-img-top" alt="...">
        <div class="card-body p-2">
            <p>Title : {{ $book->title }}</p>
            <p>Author : {{ $book->author }}</p>
            <p>Publisher : {{ $book->publisher->name }}</p>
            <p>Year : {{ $book->year }}</p>
            <p>Synopsis : </p>
            <p>{{ $book->synopsis }}</p>
        </div>
    </div>
</div>