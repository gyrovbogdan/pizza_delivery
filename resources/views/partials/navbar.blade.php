<div class="top_navbar">
    <div class="hamburger">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
    </div>
    <div class="top_menu">
        <a class="logo" href="/">
            PHPizza
        </a>
        <ul>
            <li><a href="#">
                    <i class="fas fa-search"></i>
                </a></li>
            <li><a href="#">
                    <i class="fas fa-bell"></i>
                </a></li>
            <li><a href="#">
                    <i class="fas fa-user"></i>
                </a></li>
            <li><a href="#">
                    <i class="fas fa-basket-shopping"></i>
                </a></li>
        </ul>
    </div>
</div>

<div class="sidebar">
    <ul>
        <li><a href="{{ action('App\Http\Controllers\HomeController@newProducts') }}"
                class="@ifNavbarLinkIsActive('App\Http\Controllers\HomeController@newProducts')">
                <span class="icon"><i class="fas fa-meteor"></i></span>
                <span class="title">Новинки</span>
            </a></li>
        <li><a href="{{ action('App\Http\Controllers\HomeController@search', ['q' => 'pizza']) }}"
                class="@ifNavbarLinkIsActive('App\Http\Controllers\HomeController@search?q=pizza')">
                <span class="icon"><i class="fas fa-pizza-slice"></i></span>
                <span class="title">Пицца</span>
            </a></li>
        <li><a href="{{ action('App\Http\Controllers\HomeController@search', ['q' => 'pasta']) }}"
                class="@ifNavbarLinkIsActive('App\Http\Controllers\HomeController@search?q=pasta')">
                <span class="icon"><i class="fas fa-bowl-food"></i></span>
                <span class="title">Паста</span>
            </a></li>
        <li><a href="{{ action('App\Http\Controllers\HomeController@delivery') }}"
                class="@ifNavbarLinkIsActive('App\Http\Controllers\HomeController@delivery')">
                <span class="icon"><i class="fas fa-truck"></i></span>
                <span class="title">Доставка</span>
            </a></li>
        <li><a href="{{ action('App\Http\Controllers\HomeController@certificate') }}"
                class="@ifNavbarLinkIsActive('App\Http\Controllers\HomeController@certificate')">
                <span class="icon"><i class="fas fa-certificate"></i></span>
                <span class="title">Сертификаты</span>
            </a></li>
    </ul>
</div>
