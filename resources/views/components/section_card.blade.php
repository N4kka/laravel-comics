{{-- card images --}}
<div class="comics-card">
    {{-- aggiungere padding --}}
    <img src=" {{ $image }} " alt="comic thumbnail">
    <p>
        <a href="{{ route('single_page', ['id' => $id]) }}">
            {{ $title }}
        </a>
    </p>
</div>