<?php
$code = app()->isDownForMaintenance() ? 'maintenance' : $exception->getStatusCode();
?>
<!DOCTYPE html>
<html lang="{!! app()->getLocale() !!}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{!! trans("server-error-pages::server-error-pages.$code.description", ['domain'=> request()->getHost()]) !!}">
        <title>{!! trans("server-error-pages::server-error-pages.$code.title") !!}</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <style>
            /* Error Page Inline Styles */
            body {
                padding-top: 20px;
            }
            /* Layout */
            .jumbotron {
                font-size: 21px;
                font-weight: 200;
                line-height: 2.1428571435;
                color: inherit;
                padding: 10px 0px;
            }
            /* Everything but the jumbotron gets side spacing for mobile-first views */
            .masthead, .body-content {
                padding-left: 15px;
                padding-right: 15px;
            }
            /* Main marketing message and sign up button */
            .jumbotron {
                text-align: center;
                background-color: transparent;
            }
            .jumbotron .btn {
                font-size: 21px;
                padding: 14px 24px;
            }
            /* Colors */
            .green {color:#5cb85c;}
            .orange {color:#f0ad4e;}
            .red {color:#d9534f;}
        </style>
    </head>
    <body>
        <!-- Error Page Content -->
        <div class="container">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <h1><i class="{!! trans("server-error-pages::server-error-pages.$code.icon") !!}"></i> {!! trans("server-error-pages::server-error-pages.$code.title") !!}</h1>
                <p class="lead">{!! config('app.env') === 'production' ? trans("server-error-pages::server-error-pages.$code.description", ['domain'=> request()->getHost()]) : $exception->getMessage() ?? trans("server-error-pages::server-error-pages.$code.description", ['domain'=> request()->getHost()]) !!}</p>
                <p><a class="btn btn-default btn-lg" href="{!! 
                      trans("server-error-pages::server-error-pages.$code.button.link_to") === 'home' ? url('/') :  trans("server-error-pages::server-error-pages.$code.button.link_to") === 'reload' 
                      ? url()->current() : url()->previous() !!}"><span class="green">{!! trans("server-error-pages::server-error-pages.$code.button.name") !!}</span></a></p>
            </div>
        </div>
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2>{!! trans("server-error-pages::server-error-pages.$code.why.title") !!}</h2>
                        <p class="lead">{!! trans("server-error-pages::server-error-pages.$code.why.description") !!}</p>
                    </div>
                    <div class="col-md-6">
                        <h2>{!! trans("server-error-pages::server-error-pages.$code.what_do.title") !!}</h2>
                        <p class="lead">{!! trans("server-error-pages::server-error-pages.$code.what_do.visitor.title") !!}</p>
                        <p>{!! trans("server-error-pages::server-error-pages.$code.what_do.visitor.description", ['domain'=> request()->getHost()]) !!}</p>
                        <p class="lead">{!! trans("server-error-pages::server-error-pages.$code.what_do.owner.title") !!}</p>
                        <p>{!! trans("server-error-pages::server-error-pages.$code.what_do.owner.description") !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Error Page Content -->
        <!--Scripts-->
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>