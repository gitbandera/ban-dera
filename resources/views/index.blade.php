<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @env('production')
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    @endenv

    <title>BAN-dera</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E2JP8HENB3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E2JP8HENB3');
    </script>
    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
    <style>
        :root {
            --color-bg: #fafafa;
            --color-text: #003687;
        }

        body[data-theme="night"] {
            --color-bg: #121212;
            --color-text: #5cd700;
            --color-faded: #242424;
        }

        body {
            font-family: 'Anonymous Pro', monospace;
            background: var(--color-bg);
            color: var(--color-text);
        }

        a {
            color: var(--color-text);
        }

        .table-container {
            overflow-x: scroll;
            display: block;
            padding: 10px;
        }

        thead {
            font-weight: 800;
        }

        tr {
            border-bottom: 1px solid #00000000;
        }

        tr:hover {
            border-bottom-color: var(--color-text);
        }

        td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .bandera {
            background: var(--color-bg);
            color: var(--color-text);
        }

        a.dropdown-toggle {
            text-decoration: none;
        }

        .dropdown-menu {
            background: var(--color-bg);
            border-color: var(--color-text);
            padding: 10px 15px;
            margin-top: 10px !important;
        }

        body[data-theme="night"] .offcanvas,
        body[data-theme="night"] .modal .modal-content,
        body[data-theme="night"] .form-control {
            background-color: var(--color-bg);
            color: var(--color-text);
            border-color: var(--color-text);
        }

        .modal-backdrop.show {
            opacity: .8;
        }

        body[data-theme="night"] .modal .modal-body {
            color: var(--color-text) !important;
        }
        body[data-theme="night"] .modal .modal-header {
            border-bottom: 1px solid var(--color-faded);
        }

        body[data-theme="night"] #monobank_logo {
            filter: invert(1);
        }

        body[data-theme="night"] .btn-close {
            background-color: var(--color-text);
        }

        .qr-code canvas {
            border: 10px solid #fff;
        }

        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--color-bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--color-text);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .offcanvas {
            width: 50%;
        }

        @media screen and (max-width: 768px){
            .offcanvas {
                width: 100%;
            }
        }

    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E2JP8HENB3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E2JP8HENB3');
    </script>
</head>
<body>
<div id="app"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="application/javascript" src="js/app.js"></script>
</body>
</html>
