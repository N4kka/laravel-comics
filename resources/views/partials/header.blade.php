<header>
    <div class="upper-section">
        <p class="header-dsc">dc power&#8480; visa&reg;</p>
        <p class="header-dsc">additional dc sites</p>
    </div>
    <div class="bottom-section">
        <div class="ms-container">
            <div class="ms_left-section">
                <img src="../images/dc-logo.png" alt="DC logo">
            </div>
            <div class="center-section">
                <ul class="menu-list">
                    <li>
                        <a href="">character</a>
                    </li>
                    <li>
                        <a href="{{ route('home_page') }}">comics</a>
                    </li>
                    <li>
                        <a href="">movies</a>
                    </li>
                    <li>
                        <a href="">tv</a>
                    </li>
                    <li>
                        <a href="">games</a>
                    </li>
                    <li>
                        <a href="">collectibles</a>
                    </li>
                    <li>
                        <a href="">videos</a>
                    </li>
                    <li>
                        <a href="">fans</a>
                    </li>
                    <li>
                        <a href="">news</a>
                    </li>
                    <li>
                        <a href="">shop</a>
                    </li>
                </ul>
            </div>
            <div class="ms_right-section">
                <input type="text" name="Search" placeholder="Search" id="">
            </div>
        </div>
    </div>
</header>

{{-- TO BE ADDED FOR DYNAMIC CLASS AND VOICE LIST --}}
{{-- <li class="{{ Request::route()->getName() === $list_item['name'] ? 'active' : '' }}">
    <a href="{{ route($list_item['name']) }}">{{ $list_item['title'] }}</a> --}}
{{-- </li> --}}