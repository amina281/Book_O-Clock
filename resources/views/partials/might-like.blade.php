<section class="maylike">
    <div class="maylike-wrapper">
        <h2>You may also like</h2>

        <ul class="maylike-list">
            <li>
                @foreach ($mightAlsoLike as $product)
                    <a href="/product/{{ $product->slug }}">
                        <img src="{{ ($product->imagePath) }}.jpg" alt="product">
                    </a>
                @endforeach
            </li>
        </ul>
    </div>
</section>
