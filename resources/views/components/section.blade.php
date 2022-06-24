<section class="comics">
    <div class="ms-container">
        <div class="comics-list">
            @foreach ($comic_card as $item)
                @include('components.section_card', $item)
            @endforeach
        </div>
    </div>
    <button class="loading">LOAD MORE</button>
</section>