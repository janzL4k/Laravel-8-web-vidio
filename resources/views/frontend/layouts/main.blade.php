<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Website Olahraga | 2022</title>

    <!-- Favicon -->
    <link rel="icon" href="frontend/img/core-img/oborr.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="frontend/style.css">

    {{-- jquery active --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
    body {
      font-family: Verdana, Geneva, sans-serif;
      back    body {
      font-family: Verdana, Geneva, sans-serif;
      background-color: lightgray;
    }

    p { font-size: 0.9em; }

    h1 {
    	font-size:16px;
    	color:#333;
    }

    #player {
    	float:left;
    	padding:1em 1em .5em;
    	background-color:black;
      border:2px solid rgb(184, 6, 6);
      border-radius: 9px;
    }

    #controls {
      border: 1px solid rgb(184, 6, 6);
      width: 420px;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      margin-top: 5px;
      padding-bottom: 3px;
      border-radius: 7px;
    }

    video {
    	/* border:0px solid rgb(184, 6, 6); */
    	width:100%	;
    	height:231px;
    	background:black;
    }

    button {
    	text-indent:-9999px;
    	width:16px;
    	height:16px;
    	border:none;
    	cursor:pointer;
    	background:transparent url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJEAAAAQCAYAAAAWNJ1eAAAAB3RJTUUH4AMQDS0aGLmsqwAAAAlwSFlzAAAOdAAADnQBaySz1gAAAvZJREFUeNrtmk2u0zAQxyele7gBZcOWcAJ8AKTXFVvKhnW5QbhBD4BEe4GnvgULdkaCNeUE5N2gbJGgeDJ26rhO4rFbKRX5P7mtP+YX2x1PHPdl4ErCa/W6UEmc1ACsVekGQjWyeKwrVWYN+bF63aqU99jsVJqryblvbTGyeKxrkoSPesxC/f3CosyaEBzso0DUvgL5JmZk8VhdoihXKLsnLLtLsYix1jkcf+VIU12wZUwI6LZo89xTN7J4rFOZLxxgxrjG+Vm0WNB27hlvXrWQICb6Im5IXqhU9lwi17Zuh13WS2juF/Dzq0TWW+tzLMvuj2ip47J480W8G5V+qnSwStfg+9KxDbW98V6Bw+qThGdA0WYBPQtmohu507rRYQ/ryg77RU8e9Vmlb1b+q0q3iawPqn+fEllmrF+qlDbGUDVtyRkwQs0YjFll4zpSHMsvikASyHnwVlwALbSV1aq+nU2gfRWGOJPoyaNw33VwyqYDYIXqkqwV0x5vK7sWWy6rSwUcHQgd5b1ebO+AIlvtQNh4GoSkx9RN5P0Vr/HbKTsw7P0sWT9ZxrBET5lMZNnqYs2Yvb7TNF/E4bGkM2/CelInZ0WtVPkPp90bZfvQOBAqzInS9MdTFutE52H5bl92mUxk2eKwhiOzB/L33nIgVJgTpT0tZE7+AcQ70XlY9ioU9TFHXJ9i7UglcOaU9j2FZRvPEidzyR33C9BONoGutYLOg7v99h2+7Mn79Bf8X3w4S9T26ayQ6boca8m0tw83l4msLu31u+hoY+r26ERrz1D7nMdo3ZNHPQWKGEa5LotnySrcThNZobocC/c4tP8oGYwS6AT87gysNm31+1I/6jdFZcZptyaUfwf+2cdOdfz08Gxk8VhNLm1Y3e1DzK0nhdU8kceotIJjFBVADmTq8omumMMxhIVoD8cdvKuRxWMdZTas4ed0l2HRzzNC9xudpQByIgmnj//34w+wQ2ANVf6fPfZ63IUZU+YxHOa/SfwPrCvVP/2nY6KBhDUMAAAAAElFTkSuQmCC') no-repeat 0 0; /* url('buttons.png') */
    }

    .pause { background-position:-19px 0; }
    .stop { background-position:-38px 0; }

    #volume-bar {
	    width: 20px;
      vertical-align: middle;
      padding:0px;
      background-position:-133px 0;
    }
    .mute { background-position:-95px 0; }
    .unmute { background-position:-114px 0; }
    .replay { background-position:-133px 0; }
    /* .fullscreen {
        text-indent: 0px;
        color: #00c600;
        background-color: black;
        background-image: none;
        padding: 0px;
        font-weight: bold;
        padding-bottom: 3px;

    } */


    progress {
      color: rgb(184, 6, 6);
      font-size: 12px;
      width: 220px;
      height: 16px;
      border: none;
      margin-right: 10px;
      background: #434343;
      border-radius: 9px;
      vertical-align: middle;
    }
    progress::-moz-progress-bar {
      color:green;
      background:#434343;
    }

    progress[value]::-webkit-progress-bar {
      background-color: #434343;
      border-radius: 2px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;
    }

    progress[value]::-webkit-progress-value {
      background-color: green;
    }

    input[type=range] {
      -webkit-appearance: none;
      width: 100%;
      margin: 6.8px 0;
    }
    input[type=range]:focus {
      outline: none;
    }
    input[type=range]::-webkit-slider-runnable-track {
      width: 100%;
      height: 4.4px;
      cursor: pointer;
      box-shadow: 0.9px 0.9px 1.7px #002200, 0px 0px 0.9px #003c00;
      background: #205928;
      border-radius: 1px;
      border: 1.1px solid #18d501;
    }
    input[type=range]::-webkit-slider-thumb {
      box-shadow: 2.6px 2.6px 3.7px #00aa00, 0px 0px 2.6px #00c300;
      border: 2.5px solid #83e584;
      height: 18px;
      width: 9px;
      border-radius: 3px;
      background: #439643;
      cursor: pointer;
      -webkit-appearance: none;
      margin-top: -7.9px;
    }
    input[type=range]:focus::-webkit-slider-runnable-track {
      background: rgb(184, 6, 6);
    }
    input[type=range]::-moz-range-track {
      width: 100%;
      height: 4.4px;
      cursor: pointer;
      box-shadow: 0.9px 0.9px 1.7px rgb(184, 6, 6), 0px 0px 0.9px rgb(184, 6, 6);
      background: #205928;
      border-radius: 1px;
      border: 1.1px solid #18d501;
    }
    input[type=range]::-moz-range-thumb {
      box-shadow: 2.6px 2.6px 3.7px #00aa00, 0px 0px 2.6px #00c300;
      border: 2.5px solid #83e584;
      height: 18px;
      width: 9px;
      border-radius: 3px;
      background: #439643;
      cursor: pointer;
    }
    input[type=range]::-ms-track {
      width: 100%;
      height: 4.4px;
      cursor: pointer;
      background: transparent;
      border-color: transparent;
      color: transparent;
    }
    input[type=range]::-ms-fill-lower {
      background: #194620;
      border: 1.1px solid #18d501;
      border-radius: 2px;
      box-shadow: 0.9px 0.9px 1.7px #002200, 0px 0px 0.9px #003c00;
    }
    input[type=range]::-ms-fill-upper {
      background: #205928;
      border: 1.1px solid #18d501;
      border-radius: 2px;
      box-shadow: 0.9px 0.9px 1.7px #002200, 0px 0px 0.9px #003c00;
    }
    input[type=range]::-ms-thumb {
      box-shadow: 2.6px 2.6px 3.7px #00aa00, 0px 0px 2.6px #00c300;
      border: 2.5px solid #83e584;
      height: 18px;
      width: 9px;
      border-radius: 3px;
      background: #439643;
      cursor: pointer;
      height: 4.4px;
    }
    input[type=range]:focus::-ms-fill-lower {
      background: #205928;
    }
    input[type=range]:focus::-ms-fill-upper {
      background: #276c30;
    }ground-color: lightgray;
    }

    p { font-size: 0.9em; }

    h1 {
    	font-size:16px;
    	color:#333;
    }

    #player {
    	float:left;
    	padding:1em 1em .5em;
    	background-color:black;
      border:2px solid rgb(184, 6, 6);
      border-radius: 9px;
    }

    #controls {
      border: 1px solid rgb(184, 6, 6);
      width: 420px;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      margin-top: 5px;
      padding-bottom: 3px;
      border-radius: 7px;
    }

    video {
    	/* border:1px solid rgb(184, 6, 6); */
    	width:420px;
    	height:231px;
    	background:black;
    }

    button {
    	text-indent:-9999px;
    	width:16px;
    	height:16px;
    	border:none;
    	cursor:pointer;
    	background:transparent url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJEAAAAQCAYAAAAWNJ1eAAAAB3RJTUUH4AMQDS0aGLmsqwAAAAlwSFlzAAAOdAAADnQBaySz1gAAAvZJREFUeNrtmk2u0zAQxyele7gBZcOWcAJ8AKTXFVvKhnW5QbhBD4BEe4GnvgULdkaCNeUE5N2gbJGgeDJ26rhO4rFbKRX5P7mtP+YX2x1PHPdl4ErCa/W6UEmc1ACsVekGQjWyeKwrVWYN+bF63aqU99jsVJqryblvbTGyeKxrkoSPesxC/f3CosyaEBzso0DUvgL5JmZk8VhdoihXKLsnLLtLsYix1jkcf+VIU12wZUwI6LZo89xTN7J4rFOZLxxgxrjG+Vm0WNB27hlvXrWQICb6Im5IXqhU9lwi17Zuh13WS2juF/Dzq0TWW+tzLMvuj2ip47J480W8G5V+qnSwStfg+9KxDbW98V6Bw+qThGdA0WYBPQtmohu507rRYQ/ryg77RU8e9Vmlb1b+q0q3iawPqn+fEllmrF+qlDbGUDVtyRkwQs0YjFll4zpSHMsvikASyHnwVlwALbSV1aq+nU2gfRWGOJPoyaNw33VwyqYDYIXqkqwV0x5vK7sWWy6rSwUcHQgd5b1ebO+AIlvtQNh4GoSkx9RN5P0Vr/HbKTsw7P0sWT9ZxrBET5lMZNnqYs2Yvb7TNF/E4bGkM2/CelInZ0WtVPkPp90bZfvQOBAqzInS9MdTFutE52H5bl92mUxk2eKwhiOzB/L33nIgVJgTpT0tZE7+AcQ70XlY9ioU9TFHXJ9i7UglcOaU9j2FZRvPEidzyR33C9BONoGutYLOg7v99h2+7Mn79Bf8X3w4S9T26ayQ6boca8m0tw83l4msLu31u+hoY+r26ERrz1D7nMdo3ZNHPQWKGEa5LotnySrcThNZobocC/c4tP8oGYwS6AT87gysNm31+1I/6jdFZcZptyaUfwf+2cdOdfz08Gxk8VhNLm1Y3e1DzK0nhdU8kceotIJjFBVADmTq8omumMMxhIVoD8cdvKuRxWMdZTas4ed0l2HRzzNC9xudpQByIgmnj//34w+wQ2ANVf6fPfZ63IUZU+YxHOa/SfwPrCvVP/2nY6KBhDUMAAAAAElFTkSuQmCC') no-repeat 0 0; /* url('buttons.png') */
    }

    .pause { background-position:-19px 0; }
    .stop { background-position:-38px 0; }

    #volume-bar {
	    width: 50px;
      vertical-align: middle;
      padding:0px;
    }
    .mute { background-position:-95px 0; }
    .unmute { background-position:-114px 0; }
    .replay { background-position:-133px 0; }
    .fullscreen {
        text-indent: 0px;
        color: #00c600;
        background-color: rgb(0, 0, 0);
        background-image: none;
        padding: 0px;
        font-weight: bold;
        padding-bottom: 3px;
    }


    progress {
      color: rgb(184, 6, 6);
      font-size: 12px;
      width: 220px;
      height: 16px;
      border: none;
      margin-right: 10px;
      background: #434343;
      border-radius: 9px;
      vertical-align: middle;
    }
    progress::-moz-progress-bar {
      color:rgb(184, 6, 6);
      background:#434343;
    }

    progress[value]::-webkit-progress-bar {
      background-color: #434343;
      border-radius: 2px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;
    }

    progress[value]::-webkit-progress-value {
      background-color: green;
    }

    input[type=range] {
      -webkit-appearance: none;
      width: 100%;
      margin: 6.8px 0;
    }
    input[type=range]:focus {
      outline: none;
    }
    input[type=range]::-webkit-slider-runnable-track {
      width: 100%;
      height: 4.4px;
      cursor: pointer;
      box-shadow: 0.9px 0.9px 1.7px #002200, 0px 0px 0.9px #003c00;
      background: #205928;
      border-radius: 1px;
      border: 1.1px solid #18d501;
    }
    input[type=range]::-webkit-slider-thumb {
      box-shadow: 2.6px 2.6px 3.7px #00aa00, 0px 0px 2.6px #00c300;
      border: 2.5px solid #83e584;
      height: 18px;
      width: 9px;
      border-radius: 3px;
      background: #439643;
      cursor: pointer;
      -webkit-appearance: none;
      margin-top: -7.9px;
    }
    input[type=range]:focus::-webkit-slider-runnable-track {
      background: #276c30;
    }
    input[type=range]::-moz-range-track {
      width: 100%;
      height: 4.4px;
      cursor: pointer;
      box-shadow: 0.9px 0.9px 1.7px #002200, 0px 0px 0.9px #003c00;
      background: #205928;
      border-radius: 1px;
      border: 1.1px solid #18d501;
    }
    input[type=range]::-moz-range-thumb {
      box-shadow: 2.6px 2.6px 3.7px #00aa00, 0px 0px 2.6px #00c300;
      border: 2.5px solid #83e584;
      height: 18px;
      width: 9px;
      border-radius: 3px;
      background: #439643;
      cursor: pointer;
    }
    input[type=range]::-ms-track {
      width: 100%;
      height: 4.4px;
      cursor: pointer;
      background: transparent;
      border-color: transparent;
      color: transparent;
    }
    input[type=range]::-ms-fill-lower {
      background: #194620;
      border: 1.1px solid #18d501;
      border-radius: 2px;
      box-shadow: 0.9px 0.9px 1.7px #002200, 0px 0px 0.9px #003c00;
    }
    input[type=range]::-ms-fill-upper {
      background: #205928;
      border: 1.1px solid #18d501;
      border-radius: 2px;
      box-shadow: 0.9px 0.9px 1.7px #002200, 0px 0px 0.9px #003c00;
    }
    input[type=range]::-ms-thumb {
      box-shadow: 2.6px 2.6px 3.7px #00aa00, 0px 0px 2.6px #00c300;
      border: 2.5px solid #83e584;
      height: 18px;
      width: 9px;
      border-radius: 3px;
      background: #439643;
      cursor: pointer;
      height: 4.4px;
    }
    input[type=range]:focus::-ms-fill-lower {
      background: #205928;
    }
    input[type=range]:focus::-ms-fill-upper {
      background: #276c30;
}


</style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
  @include('frontend.layouts.nav')
    <!-- ##### Header Area End ##### -->

   @yield('content')
    <br> <br><br>
    <!-- ##### Footer Area Start ##### -->
    @include('frontend.layouts.footer')
    <!-- ##### Footer Area End ##### -->

</div>
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="frontend/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="frontend/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="frontend/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="frontend/js/active.js"></script>
    {{-- <script src="custom-controls/custom.js"></script> --}}
</body>

</html>
