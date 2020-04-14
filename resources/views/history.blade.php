<html>
    <head>
        <title>
            history
        </title>

        <style>
            * {
            box-sizing: border-box;
            }

            body {
            background-color: #fff;
            font-family: Helvetica, sans-serif;
            }

            .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            }

            .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #3399FF;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            }

            .container {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
            }

            .container::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: white;
            border: 4px solid #3399FF;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
            }

            .left {
            left: 0;
            }

            .right {
            left: 50%;
            }

            .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent #3399FF;
            }

            .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent #3399FF transparent transparent;
            }

            .right::after {
            left: -16px;
            }

            .content {
            padding: 20px 30px;
            background-color: #3399FF;
            position: relative;
            border-radius: 6px;
            }

            @media screen and (max-width: 600px) {
                .timeline::after {
                    left: 31px;
                }

                .container {
                    width: 100%;
                    padding-left: 70px;
                    padding-right: 25px;
                }

                .container::before {
                    left: 60px;
                    border: medium solid white;
                    border-width: 10px 10px 10px 0;
                    border-color: transparent white transparent transparent;
                }

                .left::after, .right::after {
                    left: 15px;
                }

                .right {
                    left: 0%;
                }
            }
            h2 , p{
                color:white;
            }
        </style>
    </head>

    <body>
        <div class="timeline">
            @for ($i = 1; $i < 10; $i++)
                @if ($i % 2 == 0)
                   <div class="container left">
                        <div class="content">
                            <h2>2017</h2>
                            <p>Lorem ipsum..</p>
                        </div>
                    </div>
                @else
                    <div class="container right">
                        <div class="content">
                            <h2>2016</h2>
                            <p>Lorem ipsum..</p>
                        </div>
                    </div>
                @endif
            @endfor
        </div>
    </body>
</html>