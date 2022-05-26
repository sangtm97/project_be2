<div class="module-2">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">

            <div class="slide first">
                <div class="slide-content">
                    <div class="slide-Title">
                        <h1>New Season<br>New Mood</h1>
                    </div>
                    <div class="slide-description">
                        <p>Illuminate the inside and outside of your home with <br>our selection of Lighting
                            solutions</p>
                    </div>
                    <div class="button-shopnow">
                        <button><a href="https://demo4.drfuri.com/razzi9/product/the-globe-pendant-light/"
                                class="button-link"><span class="button-text razzi-button">Shop Now </span></a>
                    </div></button>
                </div>
                <img src="./public/images/Home-v13-Slide-1.png" alt="">

            </div>
            <div class="slide">
                <div class="slide-content">
                    <div class="slide-Title">
                        <h1>New Season<br>New Mood</h1>
                    </div>
                    <div class="slide-description">
                        <p>Illuminate the inside and outside of your home with <br>our selection of Lighting
                            solutions</p>
                    </div>
                    <div class="button-shopnow">
                        <button><a href="https://demo4.drfuri.com/razzi9/product/the-globe-pendant-light/"
                                class="button-link"><span class="button-text razzi-button">Shop Now </span></a>
                    </div></button>
                </div>
                <img src="./public/images/Home-v13-Slide-2.png" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
            </div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
        </div>
    </div>
    <script type="text/javascript">
    var counter = 1;
    setInterval(function() {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 2) {
            counter = 1;
        }
    }, 5000);
    </script>
</div>