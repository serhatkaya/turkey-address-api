<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>turkey-address-api</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        :root {
            --white: #fff;
            --off-white: #eee;
            --base: hsla(286, 18%, 23%, 1);
            --base-dark: hsla(286, 18%, 13%, 1);
            --base-shadow: hsla(286, 18%, 13%, .4);
            --warning-clr: #c00;
        }

        body {
            font-family: Open Sans, sans-serif;
            font-weight: 400;
            line-height: 1.5em;
            color: #32394f;
            background-color: #fff;
            margin: 0px;
            padding: 0px;
        }

        h1,
        h2 {
            font-weight: 600;
            margin: 8px;
            /* text-align: center; */
            padding: 1rem 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1 {
            font-size: 2rem;
            padding: 2rem 0 1rem;
        }

        .header {
            font-size: 2rem;
            color: var(--white);
            background-color: var(--base);
            padding: 1.5rem;
        }

        .content {
            margin: 2em 4em 2em 4em;
        }

        .intro {
            margin: 0 0 20px 0;
        }

        .code {
            font-size: 12pt;
            font-weight: 100;
            line-height: 20px;
            color: rgb(0, 0, 238);
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  sm:pt-0">


        <div class="header">turkey-address-api</div>
        <!-- <h1>CASE API</h1> -->
        <div class="content">
            <p class="intro">
                External API for addresses in Turkey
            </p>

            <table class="table">
                <thead>
                    <tr>
                        <th>API</th>
                        <th>Method</th>
                        <th>Parameter</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="/api/province">/api/province</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">-</div>
                        </td>
                        <td>Get province list</td>
                    </tr>
                    <tr>
                        <td><a href="/api/province?id=35">/api/province?id={id}</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">id={id}</div>
                        </td>
                        <td>Get province that belongs to the the given id</td>
                    </tr>
                    <tr>
                        <td><a href="/api/province?id=35&mode=counties">/api/province?id={id}&mode=counties</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">mode=counties</div>
                        </td>
                        <td>Get counties of given province id.</td>
                    </tr>

                    <tr>
                        <td><a href="/api/county">/api/county</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">-</div>
                        </td>
                        <td>Get county list.</td>
                    </tr>

                    <tr>
                        <td><a href="/api/county?id=1203">/api/county?id={id}</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">id={id}</div>
                        </td>
                        <td>Get county that belongs to the the given id</td>
                    </tr>
                    <tr>
                        <td><a href="/api/county?id=1203&mode=districts">/api/county?id={id}&mode=districts</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">mode=districts</div>
                        </td>
                        <td>Get districts of given county id.</td>
                    </tr>

                    <tr>
                        <td><a href="/api/county">/api/district</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">-</div>
                        </td>
                        <td>Get district list.</td>
                    </tr>

                    <tr>
                        <td><a href="/api/district?id=40972">/api/district?id={id}</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">id={id}</div>
                        </td>
                        <td>Get district that belongs to the the given id</td>
                    </tr>
                    <tr>
                        <td><a href="/api/district?id=40972&mode=streets">/api/county?id={id}&mode=streets</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">mode=streets</div>
                        </td>
                        <td>Get streets of given county id.</td>
                    </tr>

                    <tr>
                        <td><a href="/api/street">/api/street</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">-</div>
                        </td>
                        <td>Get street list.</td>
                    </tr>

                    <tr>
                        <td><a href="/api/street?id=43187">/api/street?id={id}</a></td>
                        <td>GET</td>
                        <td>
                            <div class="code">id={id}</div>
                        </td>
                        <td>Get street that belongs to the the given id</td>
                    </tr>


                </tbody>
            </table>


        </div>
</body>

</html>
