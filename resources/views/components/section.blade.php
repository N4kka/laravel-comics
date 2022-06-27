<section class="comics">
    <div class="ms-container">
        <div class="comics-list">
            @foreach ($comics as $comic)
                @include('components.section_card', [
                    'id' => $comic['id'],
                    'image' => $comic['thumb'],
                    'title' => $comic['series']
                ])
            @endforeach
        </div>
    </div>
    <button class="loading">LOAD MORE</button>
</section>