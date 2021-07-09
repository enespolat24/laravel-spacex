<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>spaceX api ornek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            #scroll-animate
            {
                overflow: hidden;
            }

            #scroll-animate-main
            {
                width: 100%;
                left: 0;
                position: fixed;
            }

            #heightPage,
            #heightScroll
            {
                width: 10px;
                top: 0;
                position: absolute;
                z-index: 99;
            }

            #heightPage
            {
                left: 0;
            }

            #heightScroll
            {
                right: 0;
            }

            header
            {
                width: 100%;
                height: 100%;
                background: url(https://raw.githubusercontent.com/hudsonmarinho/header-and-footer-parallax-effect/master/assets/images/bg-header.jpg) no-repeat 50% 50%;
                top: 0;
                position: fixed;
                z-index: -1;
            }

            footer
            {
                width: 100%;
                height: 300px;
                background: gray;
                bottom: -300px;
                position: fixed;
                z-index: -1;
            }

            .content
            {
                height: 1000px;
                min-height: 1000px;
                background: #ededed;
                position: relative;
                z-index: 1;
            }

            .wrapper-parallax {
                margin-top: 100%;
                margin-bottom: 300px;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            }

            h1{
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                text-transform: uppercase;
                text-align: center;
                font-family: Helvetica, serif;
                font-size: 150px;
                color: #fff;
            }

            header h1{}

            .content h1{
                line-height: 1000px;
                color: #999;
            }

            footer h1
            {
                line-height: 300px;
            }

            header,
            footer,
            #scroll-animate-main
            {
                -webkit-transition-property: all;
                -moz-transition-property: all;
                transition-property: all;

                -webkit-transition-duration: 0.4s;
                -moz-transition-duration: 0.4s;
                transition-duration: 0.4s;

                -webkit-transition-timing-function: cubic-bezier(0, 0, 0, 1);
                -moz-transition-timing-function: cubic-bezier(0, 0, 0, 1);
                transition-timing-function: cubic-bezier(0, 0, 0, 1);
            }
        </style>
    </head>
    <body>
    <div id="scroll-animate">
        <div id="scroll-animate-main">
            <div class="wrapper-parallax">
                <header>
                    <h1>please vısıt /cp</h1>
                </header>
            </div>
        </div>
    </div>
    </body>
    <script src="resources/js/app.js"></script>
</html>
