@section('extra-styles')

@endsection

@section('content')
    <div class="order-placed-wrapper">
        <div class="order-placed">
            <div class="img-order1"></div>
            <div class="img-order2"></div>
            <section class="placed-header">
                <h1>Your Order Has Been Placed</h1>
                <p>Thank you for ordering with us, we'll contact you
                    by email with your order details.
                </p>
            </section>
            <div class="text-placed">

                <a href="{{ route('landing-page') }}"><i class="fa fa-home"></i></a>
                <h3>Go to <span>Home </span> page</h3>
            </div>
            <div class="word">
                <span>B</span>
                <span>O</span>
                <span>O</span>
                <span>K</span>

                <div class="word2">
                    <h2>O'Clock</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        const spans = document.querySelectorAll('.word span');

        spans.forEach((span, idx) => {
            span.addEventListener('click', (e) => {
                e.target.classList.add('active');
            });
            span.addEventListener('animationend', (e) => {
                e.target.classList.remove('active');
            });

            // Initial animation
            setTimeout(() => {
                span.classList.add('active');
            }, 750 * (idx+1))
        });

    </script>
@endsection