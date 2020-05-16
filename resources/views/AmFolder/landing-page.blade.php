@extends('layouts.master')

@section('title', 'Home Page')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/pages/landing-page.css') }}">
@endsection

@section('content')

    <section class="homepage-before">
        <section class="upper-portion">
            <div class="back-photo"></div>
            <div class="hero-section">
                <h1> Book O'Clock</h1>
                <p>“You have to write the book that wants to be written.
                    And if the book will be too difficult for grown-ups,
                    then you write it for children.”<br><b>― Madeleine L'Engle</b>
                </p>
            </div>
            <div class="bottom-section">
                <div class="img-bottom"></div>
                <button>Sign Up</button>
                <div class="boxes box1"></div>
                <div class="boxes box2"></div>
            </div>

        </section>
        <section class="bottom-portion">
            <a href="#">
                <div class="containerhm books-btn">
                    <h3>Books</h3>
                </div>
            </a>
            <a href="#">
                <div class="containerhm authors-btn">
                    <h3>Authors</h3>
                </div>
            </a>
            <a href="#">
                <div class="containerhm news-btn">
                    <h3>News</h3>
                </div>
            </a>
            <a href="#">
                <div class="containerhm quotes-btn">
                    <h3>Quotes</h3>
                </div>
            </a>
        </section>
    </section>


    <section style="display: none;" class="info">
        <div class="offer">
            <h2>What we offer</h2>
        </div>
    </section>

    <section style="display: none;" class="bubbles-info-wrapper">

        <section class="info-bubbless">
            <div class="bubbless info1">
                <div class="animation1">
                    <a href="#"><i class="fa fa-book-reader"></i></a>
                </div>
                <h3>Books & Authors</h3>
                <p>Text messages are used for personal,
                    family, business and social purposes.
                    Governmental and ganizations use text essaging
                </p>
            </div>

            <div class="bubbless info2">
                <div class="animation">
                    <section class="quotes-bf">
                        <i class="fa fa-quote-left">___</i>
                        <i class="fa fa-quote-right"></i>
                    </section>
                </div>
                <h3>Quotes</h3>
                <p>Text messages are used for personal,
                    family, business and social purposes.
                    Governmental and ganizations use text essaging
                </p>
            </div>

            <div class="bubbless info3">
                <div class="animation1">
                    <a href="#"><i class="fa fa-newspaper"></i></a>
                </div>
                <h3>News</h3>
                <p>Text messages are used for personal,
                    family, business and social purposes.
                    Governmental and ganizations use text essaging
                </p>
            </div>
        </section>

        <section class="back-info-wrapper">
            <section class="back-info">
                <div class="backinfo-div">
                    <h1>01</h1>
                    <h2>Services</h2>
                    <h3>my service</h3>
                </div>
                <div class="backinfo-div">
                    <h1>02</h1>
                    <h2>Steps</h2>
                    <h3>my help</h3>
                </div>
                <div class="backinfo-div">
                    <h1>03</h1>
                    <h2>Contact</h2>
                    <h3>my mail</h3>
                </div>
            </section>
            <button>See More</button>
        </section>
    </section>


    <section style="display: none;" class="register">
        <section class="img-register">
            <div class="img-scew img1"></div>
            <div class="img-scew img2"></div>
            <div class="img-scew img3"></div>
            <div class="img-scew img4"></div>
        </section>
        <div class="subscribe-wrapper">
            <h2>Subscribe</h2>
            <p>“You have to write the book that wants to be written.
                And if the book will be t..
            </p>
            <div class="buttons-sub">
                <button class="sub">Sign Up</button>
                <button class="log">Log In</button>
            </div>
        </div>
    </section>


    <section class="author-infpg">
        <div class="water-img"></div>
        <div class="pend-svg"></div>

        <div class="author-pg-header">
            <div class="author-header">
                <h2><a href="#">Author</a></h2>
            </div>
        </div>

        <section class="author-list">
            <div class="author-img">
                <img src="./img/3238361-1549477380.jpeg" alt="">
                <img src="./img/carli-jeen-15YDf39RIVc-unsplash (1).jpg" alt="">
                <img src="./img/carolyn-v-HZQIJod1MsY-unsplash.jpg" alt="">
                <img src="./img/3238361-1549477380.jpeg" alt="">
                <img src="./img/carli-jeen-15YDf39RIVc-unsplash (1).jpg" alt="">
                <img src="./img/carolyn-v-HZQIJod1MsY-unsplash.jpg" alt="">
            </div>
        </section>

        <section class="author-wrapper-inf">
            <section class="author-section" id="authornm">
                <div class="img-of-author">
                    <img src="./img/18965988 1a.jpg" alt="">

                </div>

                <section class="inf-1">
                    <div class="a-header">
                        <h2>Stephanie Wrobel</h2>
                        <p>Stephanie Wrobel grew up in Chicago but has been
                            living in the UK for the last three years with
                            her ...
                        </p>
                    </div>
                    <div class="books1">
                        <h4>Author of :</h4>
                        <div class="book-group">
                            <a href=""><img src="./book-covers/th (1).jpg" alt=""></a>
                            <a href=""><img src="./book-covers/th (2).jpg" alt=""></a>
                            <a href=""><img src="./book-covers/ten-thousand-skies-above-you1.jpg" alt=""></a>
                        </div>
                    </div>
                </section>
            </section>
            <section class="learn-more">
                <div class="for-more">
                    <div class="pend-svg">
                        <svg width="9em" height="6em" viewBox="0 0 429 248" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Group 38">
                                <g id="Group 35">
                                    <path id="Vector" d="M360.257 248C351.42 248.025 342.662 246.758 334.49 244.272C311.691 237.249 296.593 222.126 281.992 207.501C274.109 199.605 265.959 191.441 256.648 184.566C241.729 173.551 224.42 166.434 206.593 163.986C186.559 161.234 166.143 164.793 151.983 173.504C150.192 174.607 148.505 175.799 146.934 177.071C149 177.257 151.061 177.455 153.117 177.665C174.737 179.879 201.854 186.021 208.251 202.704C210.708 209.108 208.959 216.357 203.457 222.592C197.56 229.273 188.175 233.867 178.354 234.88C176.753 235.045 175.139 235.127 173.524 235.126C155.835 235.127 138.407 225.411 133.247 212.055C128.877 200.744 133.286 187.565 144.039 177.901C131.039 176.806 117.972 176.206 104.89 176.103L104.905 175.029C118.363 175.135 131.803 175.765 145.171 176.916C146.98 175.392 148.946 173.975 151.053 172.678C165.542 163.765 186.404 160.121 206.859 162.929C224.976 165.417 242.548 172.636 257.676 183.806C267.064 190.737 275.248 198.935 283.162 206.863C298.313 222.038 312.622 236.372 335.049 243.28C357.592 250.225 385.271 247.065 403.927 235.421C422.585 223.776 431.429 204.138 425.936 186.554L427.353 186.312C432.966 204.278 423.928 224.344 404.865 236.242C392.545 243.931 376.372 247.999 360.257 248ZM145.765 178.05C134.866 187.489 130.323 200.572 134.646 211.76C140.084 225.836 159.603 235.73 178.152 233.816C187.564 232.844 196.568 228.429 202.238 222.004C207.511 216.03 209.194 209.102 206.852 202.997C200.669 186.872 174.109 180.9 152.916 178.73C150.54 178.487 148.156 178.26 145.765 178.05Z" fill="#3F3D56"/>
                                    <path id="Vector_2" d="M8.87246 3.39336C26.9614 -8.90584 45.0503 16.1845 45.0503 16.1845V28.4837L46.8009 18.1524L54.3865 30.9436L54.97 28.4837C60.2217 32.9114 55.5536 54.066 55.5536 54.066C55.5536 54.066 57.8876 45.2106 59.0546 42.7508C60.2217 40.2909 61.9722 36.8472 61.9722 36.8472C62.5557 39.799 68.3908 43.7347 71.8919 47.1785C75.393 50.6223 75.9765 57.0179 75.9765 57.0179L77.1435 55.542C88.8138 65.3813 79.4776 94.8994 79.4776 94.8994C95.816 79.6484 82.3952 59.9697 82.3952 59.9697C85.3127 60.4616 89.9808 67.3492 89.9808 67.3492C89.9808 67.3492 103.985 84.0761 102.818 89.9797C101.651 95.8833 104.569 98.8351 104.569 98.8351C106.111 100.297 107.272 102.016 107.975 103.881C108.679 105.745 108.91 107.714 108.653 109.658L109.82 107.691C114.882 111.484 113.439 124.868 113.328 125.833L103.342 145.932L110.339 138.685H110.987V143.112C115.072 144.096 109.237 148.032 109.237 148.032C111.571 150.984 110.404 151.968 110.404 151.968V152.952C110.404 152.952 110.404 152.46 108.653 152.952C106.903 153.444 108.653 156.395 108.653 156.395C108.653 159.347 102.818 156.887 102.818 156.887L98.3757 158.279C98.3757 158.279 95.2324 159.347 92.8984 159.347C90.5643 159.347 91.1479 158.363 91.1479 157.871C91.1479 157.379 87.0633 157.379 87.0633 156.395C87.0633 155.411 85.8962 155.903 85.3127 155.411C84.7292 154.919 86.4797 153.444 86.4797 153.444C86.4797 153.444 81.8116 153.936 82.3952 153.444C82.5418 153.304 82.6624 153.146 82.7528 152.976L94.5891 152.328L80.2615 148.42C81.1567 147.852 80.6446 146.556 80.6446 146.556C71.3084 145.572 63.7227 139.176 63.7227 137.701C63.7227 136.225 52.636 113.594 52.636 113.594L54.3865 112.61L52.0525 111.134C45.0503 107.691 42.7163 96.3753 42.7163 96.3753C44.4668 98.8351 49.1349 99.819 49.1349 99.819C49.1349 99.819 74.226 108.674 72.4754 105.723C70.7249 102.771 50.8854 96.8672 50.8854 96.8672C33.9636 92.9315 28.7119 69.317 28.7119 69.317L56.1371 81.6162L34.5471 70.7929C24.6273 63.4134 20.5427 51.1142 20.5427 51.1142L43.2998 59.4777L20.5427 49.6383L5.9549 32.9114C5.9549 32.9114 -9.21645 15.6926 8.87246 3.39336Z" fill="#3F3D56"/>
                                    <path id="Vector_3" d="M7.23849 5.46942C10.3953 8.41631 77.3943 71.89 103.127 175.503C103.419 176.669 103.705 177.844 103.985 179.026C103.985 179.026 106.903 182.47 107.486 179.026C107.486 179.026 107.142 177.555 106.407 174.849C100.904 154.521 73.5898 64.5253 7.23849 5.46942Z" fill="#6C63FF"/>
                                    <path id="Vector_4" d="M103.127 175.503C103.419 176.669 103.705 177.844 103.985 179.026C103.985 179.026 106.903 182.47 107.486 179.026C107.486 179.026 107.142 177.555 106.407 174.849C105.271 174.869 104.153 175.092 103.127 175.503Z" fill="#3F3D56"/>
                                    <path id="Vector_5" opacity="0.4" d="M117.953 45.1072C111.68 45.1072 106.595 40.8199 106.595 35.5312C106.595 30.2425 111.68 25.9551 117.953 25.9551C124.226 25.9551 129.311 30.2425 129.311 35.5312C129.311 40.8199 124.226 45.1072 117.953 45.1072Z" fill="#6C63FF"/>
                                    <path id="Vector_6" opacity="0.4" d="M106.895 57.9997C102.494 57.9997 98.9272 54.9922 98.9272 51.2822C98.9272 47.5722 102.494 44.5646 106.895 44.5646C111.295 44.5646 114.862 47.5722 114.862 51.2822C114.862 54.9922 111.295 57.9997 106.895 57.9997Z" fill="#6C63FF"/>
                                    <path id="Vector_7" opacity="0.4" d="M76.6978 172.78C72.2974 172.78 68.7302 169.773 68.7302 166.063C68.7302 162.353 72.2974 159.345 76.6978 159.345C81.0981 159.345 84.6653 162.353 84.6653 166.063C84.6653 169.773 81.0981 172.78 76.6978 172.78Z" fill="#6C63FF"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h3>Want to know more?</h3>
                    <a href="#"><button>Read more</button></a>
                    <div class="svg-decorativ"></div>
                    <div class="solo-svg">
                        <svg width="4.2em" height="4.2em" viewBox="0 0 127 146" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="min">
                                <path id="Vector" d="M60.7408 117.171C83.9436 117.171 102.753 98.3616 102.753 75.1588C102.753 51.956 83.9436 33.1465 60.7408 33.1465C37.5381 33.1465 18.7285 51.956 18.7285 75.1588C18.7285 98.3616 37.5381 117.171 60.7408 117.171Z" fill="#2F2E41"/>
                                <path id="Vector_2" d="M76.9673 128.968L89.5264 126.694L85.4529 104.193L72.8938 106.466L76.9673 128.968Z" fill="#2F2E41"/>
                                <path id="Vector_3" d="M51.8491 133.515L64.4082 131.241L60.3347 108.739L47.7756 111.013L51.8491 133.515Z" fill="#2F2E41"/>
                                <path id="Vector_4" d="M58.5164 138.251C62.999 134.454 65.4788 130.014 64.0552 128.333C62.6316 126.652 57.8437 128.367 53.3611 132.163C48.8785 135.96 46.3987 140.4 47.8223 142.081C49.2459 143.762 54.0338 142.047 58.5164 138.251Z" fill="#2F2E41"/>
                                <path id="Vector_5" d="M83.1111 133.798C87.5937 130.002 90.0735 125.562 88.6499 123.881C87.2263 122.2 82.4384 123.915 77.9558 127.711C73.4732 131.507 70.9934 135.948 72.417 137.629C73.8406 139.31 78.6285 137.595 83.1111 133.798Z" fill="#2F2E41"/>
                                <path id="Vector_6" d="M57.8 79.2408C65.7301 79.2408 72.1587 72.8121 72.1587 64.8821C72.1587 56.952 65.7301 50.5234 57.8 50.5234C49.87 50.5234 43.4414 56.952 43.4414 64.8821C43.4414 72.8121 49.87 79.2408 57.8 79.2408Z" fill="white"/>
                                <path id="Vector_7" d="M51.8985 64.5217C54.5419 64.5217 56.6848 62.3788 56.6848 59.7354C56.6848 57.0921 54.5419 54.9492 51.8985 54.9492C49.2552 54.9492 47.1123 57.0921 47.1123 59.7354C47.1123 62.3788 49.2552 64.5217 51.8985 64.5217Z" fill="#3F3D56"/>
                                <path id="head" d="M93.8829 29.4537C94.5147 13.9002 81.1097 0.726169 63.9421 0.0288186C46.7744 -0.668531 32.3452 11.3748 31.7134 26.9284C31.0816 42.482 43.0153 46.0159 60.1829 46.7133C77.3506 47.4106 93.2511 45.0073 93.8829 29.4537Z" fill="#CFCCE0"/>
                                <path id="left-hand" d="M42.4237 72.1979C43.2374 68.648 34.73 63.6689 23.4219 61.0769C12.1137 58.4849 2.28706 59.2615 1.47335 62.8115C0.659643 66.3614 9.16704 71.3405 20.4752 73.9325C31.7833 76.5245 41.61 75.7479 42.4237 72.1979Z" fill="#2F2E41"/>
                                <path id="Vector_8" d="M124.892 85.9119C125.706 82.3619 117.199 77.3829 105.891 74.7909C94.5825 72.1988 84.7558 72.9754 83.9421 76.5254C83.1284 80.0754 91.6358 85.0544 102.944 87.6464C114.252 90.2384 124.079 89.4618 124.892 85.9119Z" fill="#2F2E41"/>
                                <path id="mouth" d="M72.2798 91.7157C72.5045 92.953 72.4833 94.2224 72.2173 95.4515C71.9513 96.6806 71.4457 97.8453 70.7294 98.8789C70.0131 99.9125 69.1001 100.795 68.0427 101.476C66.9853 102.156 65.8041 102.622 64.5667 102.846C63.3292 103.07 62.0598 103.048 60.8308 102.781C59.6019 102.514 58.4376 102.008 57.4044 101.291C56.3712 100.574 55.4894 99.6607 54.8094 98.6029C54.1293 97.5451 53.6644 96.3636 53.4411 95.126C52.4994 89.9239 56.5215 88.083 61.7237 87.1413C66.9259 86.1996 71.338 86.5135 72.2798 91.7157Z" fill="white"/>
                            </g>
                        </svg>
                    </div>

                </div>
                <div class="button-author-wrapp">
                    <h2>To learn more about our authors </h2>
                    <div class="button-author">
                        <div class="group-svg">
                            <svg width="5em" height="7em" viewBox="0 0 131 263" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Group 37">
                                    <path id="Vector" d="M87.5805 243.869C111.366 243.869 130.648 224.587 130.648 200.802C130.648 177.016 111.366 157.734 87.5805 157.734C63.7951 157.734 44.5132 177.016 44.5132 200.802C44.5132 224.587 63.7951 243.869 87.5805 243.869Z" fill="#2F2E41"/>
                                    <path id="Vector_2" d="M81.0388 234.602H67.9551V258.043H81.0388V234.602Z" fill="#2F2E41"/>
                                    <path id="Vector_3" d="M107.206 234.602H94.1226V258.043H107.206V234.602Z" fill="#2F2E41"/>
                                    <path id="Vector_4" d="M78.8582 262.404C84.8798 262.404 89.7613 260.573 89.7613 258.315C89.7613 256.057 84.8798 254.227 78.8582 254.227C72.8365 254.227 67.9551 256.057 67.9551 258.315C67.9551 260.573 72.8365 262.404 78.8582 262.404Z" fill="#2F2E41"/>
                                    <path id="Vector_5" d="M105.026 261.859C111.047 261.859 115.929 260.028 115.929 257.77C115.929 255.512 111.047 253.682 105.026 253.682C99.0041 253.682 94.1226 255.512 94.1226 257.77C94.1226 260.028 99.0041 261.859 105.026 261.859Z" fill="#2F2E41"/>
                                    <g id="bottom_min-eye">
                                        <path id="Vector_6" d="M88.6709 204.617C96.8001 204.617 103.39 198.027 103.39 189.898C103.39 181.769 96.8001 175.179 88.6709 175.179C80.5417 175.179 73.9517 181.769 73.9517 189.898C73.9517 198.027 80.5417 204.617 88.6709 204.617Z" fill="white"/>
                                        <path id="Vector_7" d="M88.6711 194.805C91.3808 194.805 93.5775 192.608 93.5775 189.899C93.5775 187.189 91.3808 184.992 88.6711 184.992C85.9613 184.992 83.7646 187.189 83.7646 189.899C83.7646 192.608 85.9613 194.805 88.6711 194.805Z" fill="#3F3D56"/>
                                    </g>
                                    <path id="bottom-min-head" d="M45.8037 160.749C42.3262 145.176 53.4424 129.439 70.6323 125.601C87.8222 121.762 104.577 131.276 108.054 146.849C111.531 162.423 100.139 168.167 82.9491 172.005C65.7592 175.844 49.2812 176.323 45.8037 160.749Z" fill="#CFCCE0"/>
                                    <g id="upp-min">
                                        <path id="Vector_8" d="M70.8613 119.118C94.6467 119.118 113.929 99.8362 113.929 76.0507C113.929 52.2653 94.6467 32.9834 70.8613 32.9834C47.0758 32.9834 27.7939 52.2653 27.7939 76.0507C27.7939 99.8362 47.0758 119.118 70.8613 119.118Z" fill="#2F2E41"/>
                                        <g id="legs">
                                            <path id="Vector_9" d="M64.3196 109.851H51.2358V133.292H64.3196V109.851Z" fill="#2F2E41"/>
                                            <path id="Vector_10" d="M62.139 137.654C68.1606 137.654 73.0421 135.823 73.0421 133.565C73.0421 131.307 68.1606 129.477 62.139 129.477C56.1174 129.477 51.2358 131.307 51.2358 133.565C51.2358 135.823 56.1174 137.654 62.139 137.654Z" fill="#2F2E41"/>
                                            <path id="Vector_11" d="M90.4871 109.851H77.4033V133.292H90.4871V109.851Z" fill="#2F2E41"/>
                                            <path id="Vector_12" d="M88.3065 137.108C94.3281 137.108 99.2096 135.277 99.2096 133.019C99.2096 130.761 94.3281 128.931 88.3065 128.931C82.2848 128.931 77.4033 130.761 77.4033 133.019C77.4033 135.277 82.2848 137.108 88.3065 137.108Z" fill="#2F2E41"/>
                                        </g>
                                        <path id="Vector_13" d="M71.9517 79.8672C80.0809 79.8672 86.6709 73.2771 86.6709 65.1479C86.6709 57.0187 80.0809 50.4287 71.9517 50.4287C63.8225 50.4287 57.2324 57.0187 57.2324 65.1479C57.2324 73.2771 63.8225 79.8672 71.9517 79.8672Z" fill="white"/>
                                        <path id="Vector_14" d="M71.9518 70.054C74.6616 70.054 76.8583 67.8573 76.8583 65.1476C76.8583 62.4379 74.6616 60.2412 71.9518 60.2412C69.2421 60.2412 67.0454 62.4379 67.0454 65.1476C67.0454 67.8573 69.2421 70.054 71.9518 70.054Z" fill="#3F3D56"/>
                                        <g id="hands">
                                            <path id="right" d="M116.983 45.9421C121.229 34.8332 121.844 24.747 118.357 23.4141C114.869 22.0811 108.6 30.0061 104.354 41.115C100.108 52.2239 99.4932 62.3101 102.981 63.643C106.468 64.976 112.737 57.051 116.983 45.9421Z" fill="#2F2E41"/>
                                            <path id="left" d="M41.8094 65.295C43.4093 61.9216 35.9955 55.0556 25.2501 49.9592C14.5047 44.8628 4.4968 43.466 2.89689 46.8394C1.29698 50.2127 8.71089 57.0787 19.4563 62.1751C30.2017 67.2715 40.2095 68.6683 41.8094 65.295Z" fill="#2F2E41"/>
                                        </g>
                                        <path id="head" d="M29.0849 35.9994C25.6075 20.4256 36.7236 4.689 53.9135 0.850628C71.1034 -2.98774 87.8577 6.52571 91.3352 22.0995C94.8127 37.6733 83.4203 43.4172 66.2303 47.2555C49.0404 51.0938 32.5624 51.5732 29.0849 35.9994Z" fill="#CFCCE0"/>
                                        <path id="mouth" d="M49.707 91.5874C49.707 95.8026 60.5604 104.126 72.6036 104.126C84.6469 104.126 95.9388 92.259 95.9388 88.0439C95.9388 83.8288 84.6469 88.8617 72.6036 88.8617C60.5604 88.8617 49.707 87.3723 49.707 91.5874Z" fill="white"/>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <a href="#"><button>Authors</button></a>

                    </div>
                </div>
            </section>
        </section>
    </section>


    <section  class="quotes-hm-page">

        <div class="quotes-header">
            <div class="border-head">
                <span class="line-rad rad1"></span>
                <span class="line-rad rad2"></span>
                <span class="line-rad rad3"></span>
                <span class="line-rad rad4"></span>
            </div>
            <a href="#"><button>Quotes</button></a>
        </div>

        <div class="body-qutes-corousel">
            <button class="carousel-button carousel-btn-left">
                <i class="fa fa-chevron-circle-left"></i>
            </button>

            <div class="corousel-track-container">
                <div class="corousel-track">
                    <section class="quotes-carousel">
                        <section class="quotes-carousel-info">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-quote">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </section>
                        <p>“You have to write the book that wants to be written. And if the book will be too difficult for grown-ups,
                            then you write it for children.”
                        </p>
                    </section>

                    <section class="quotes-carousel">
                        <section class="quotes-carousel-info">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-quote">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </section>
                        <p>“You have to write the book that wants to be written. And if the book will be too difficult for grown-ups,
                            then you write it for children.”
                        </p>
                    </section>

                    <section class="quotes-carousel">
                        <section class="quotes-carousel-info">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-quote">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </section>
                        <p>“You have to write the book that wants to be written. And if the book will be too difficult for grown-ups,
                            then you write it for children.”
                        </p>
                    </section>

                    <section class="quotes-carousel">
                        <section class="quotes-carousel-info">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-quote">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </section>
                        <p>“You have to write the book that wants to be written. And if the book will be too difficult for grown-ups,
                            then you write it for children.”
                        </p>
                    </section>
                </div>
            </div>

            <button class="carousel-button carousel-btn-right">
                <i class="fa fa-chevron-circle-right"></i>
            </button>
            <div class="corousel__nav">
                <button class="corousel-indicator current-slide"></button>
                <button class="corousel-indicator"></button>
                <button class="corousel-indicator"></button>
                <button class="corousel-indicator"></button>
            </div>

        </div>
    </section>


    <section  class="new-hm-page">

        <div class="new-header">
            <a href="#"><button>New <span>Releases</span></button></a>
        </div>


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <section class="new-carousel">
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="new-carousel">
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="new-carousel">
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                        <div class="new-carousel-group">
                            <img src="./img/18965988 1a.jpg" alt="" class="img-new">
                            <h2 class="who-quoted"> Emer Mbiemer</h2>
                        </div>
                    </section>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="books-section">
        <div class="bookheader-section">
            <h3>Recomendation</h3>
            <div class="img-book">
                <img src="./book-covers/AmericanStreet-by-Ibi-Zoboi-533x800.jpg" alt="">
            </div>
        </div>
        <section class="book-section-inf">

            <div class="book-inf-hm">
                <h1>American Street</h1>
                <h4><a href="#"> by Ibi Zoboi</a></h4>
                <p>The rock in the water does not know the pain of the rock in the sun.
                    On the corner of American Street and Joy Road, Fabiola Toussaint thought she would finally find une belle viea good life.
                </p>
                <p>But after they leave Port-au-Prince, Haiti, Fabiolas mother is detained by U.S.
                    immigration, leaving Fabiola to navigate her loud American cousins, Chantal, Donna, and Princess; the
                </p>
                <div class="book-more">
                    <h3>Want to know more?</h3>
                    <a href="#"><button>Read more <i class="fa fa-caret-square-right"></i></button> </a>
                </div>
            </div>
        </section>

        <section class="book-list">
            <div class="book-img">
                <img src="./book-covers/a-thousand-nights1.jpg" alt="">
                <img src="./book-covers/ten-thousand-skies-above-you1.jpg" alt="">
                <img src="./book-covers/th (1).jpg" alt="">
                <img src="./book-covers/th.jpg" alt="">
                <img src="./book-covers/th (2).jpg" alt="">
            </div>


            <div class="blur-book">
                <h2>To learn more about our books</h2>
                <div class="seemore-books">
                    <h2>Click here for more</h2>
                    <h5><a href="#">Books</a></h5>
                </div>
            </div>
        </section>
        <div class="bookfooter-section"></div>
    </section>

@endsection