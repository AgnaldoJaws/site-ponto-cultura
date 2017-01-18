<style>
    /* entire container, keeps perspective */
    .flip-container {
        perspective: 1000px;
    }
    /* flip the pane when hovered */
    .flip-container:hover .flipper, .flip-container.hover .flipper {
        transform: rotateY(180deg);
    }

    .flip-container, .front, .back {
        width: 100%;
        height: 380px;
    }

    /* flip speed goes here */
    .flipper {
        transition: 0.6s;
        transform-style: preserve-3d;

        position: relative;
    }

    /* hide back of pane during swap */
    .front, .back {
        backface-visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;
    }
    .front {
      background-color: #1b6d85;
    }
    .back {
        background-color: #3c763d;
    }
    /* front pane, placed above back */
    .front {
        z-index: 2;
        /* for firefox 31 */
        transform: rotateY(0deg);
    }

    /* back, initially hidden pane */
    .back {
        transform: rotateY(180deg);
    }
    front1 {
        background-image: url("http://www.onthebass.com.br/belavista/slider/apicultura-min-min.png");
    }
</style>

<br><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <div class="flip-container " ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper ">

                        <div class="front1 front col-md-1">

                        </div>
                        <div class="back">
                            <p>Back</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="flip-container " ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper ">

                        <div class="front col-md-1">

                        </div>
                        <div class="back">
                            <p>Back</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-2">

                <div class="flip-container " ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper ">

                        <div class="front col-md-1">

                        </div>
                        <div class="back">
                            <p>Back</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-3">

                <div class="flip-container " ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper ">

                        <div class="front col-md-1">

                        </div>
                        <div class="back">
                            <p>Back</p>
                        </div>
                    </div>
                </div>

            </div>

        </div> <br>

        <div class="row">
            <div class="col-md-3">

                <div class="flip-container " ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper ">

                        <div class="front col-md-1">

                        </div>
                        <div class="back">
                            <p>Back</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-3">

                <div class="flip-container " ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper ">

                        <div class="front col-md-1">

                        </div>
                        <div class="back">
                            <p>Back</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-3">

                <div class="flip-container " ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper ">

                        <div class="front col-md-1">

                        </div>
                        <div class="back">
                            <p>Back</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-3">

                <div class="flip-container " ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper ">

                        <div class="front col-md-1">

                        </div>
                        <div class="back">
                            <p>Back</p>
                        </div>
                    </div>
                </div>

            </div>

        </div><br>


    </div><br><br>