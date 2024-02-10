<div class="item">
    <a class="box a-box" href='{{ action('App\Http\Controllers\DishController@show', $id) }}'>
        <div class="box-icon"><i class="fa-solid fa-circle-half-stroke"></i></div>
        <div class="box-label">{{ $name }}</div>
        <div class="box-title">{{ $diametr }}</div>
        <div class="box-image">
            <img src="{{ $image }}" alt="">
        </div>
        <div class="basket-button">
            <div class="basket-button-icon">
                <i class="fa-solid fa-plus"></i>
            </div>
            <div class="basket-button-label">
                Добавить в корзину
            </div>
        </div>
    </a>
</div>
