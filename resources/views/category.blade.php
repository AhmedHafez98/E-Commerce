<html>
    <head>
        <title>category page</title>
        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                border-radius: 5px;
                width: 200px;
                height: 400px;
                display: inline-block;
                margin: 8px;
                }

                img {
                border-radius: 5px 5px 0 0;
                width: 200px;
                height: 250px;
                }

                .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                }

                .container {
                padding: 2px 16px;
                }

                .header {
                overflow: hidden;
                background-color: #f1f1f1;
                padding: 20px 10px;
                }

                .header a {
                float: left;
                color: black;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px;
                line-height: 25px;
                border-radius: 4px;
                }

                .header a.logo {
                font-size: 25px;
                font-weight: bold;
                }

                .header a:hover {
                background-color: #ddd;
                color: black;
                }

                .header a.active {
                background-color: dodgerblue;
                color: white;
                }

                .header-right {
                float: right;
                }

                @media screen and (max-width: 500px) {
                .header a {
                    float: none;
                    display: block;
                    text-align: left;
                }
                .header-right {
                    float: none;
                }
            }
        </style>
    </head>
    <body>
        <div class="header">
          <a href="#default" class="logo">E-Commerce Project</a>

            <div class="header-right">
                <a class="active" href="#home">Home</a>
                <a href="#history">history</a>
                <a href="#about">About</a>
            </div>
        </div>  

        @for ($i = 0; $i < 10; $i++)
            <div class="card">
                <img src = {{ asset ('category_image.png')}} >
                <div class="container">
                    <h4>this category name</h4>
                    <p>this is a category description</p>
                </div>
            </div>       
        @endfor
    </body>
</html>