<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin/css/metisMenu.min.css"') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('admin/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- NaVBAR -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            @include('layouts.componets.header')
            <!-- /.navbar-top-links -->
        </nav>

        <!--SIDEBAR-->
        <aside class="sidebar navbar-default" role="navigation">
            @include('layouts.componets.sidebar')
        </aside>
        <!-- /.sidebar -->

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">PENDAFTARAN</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ 'admin/js/jquery.min.js' }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ 'admin/js/Bootstrap.min.js' }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ 'admin/js/metisMenu.min.js' }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ 'admin/js/raphael.min.js' }}"></script>
    <script src="{{ 'admin/js/morris.min.js' }}"></script>
    <script src="{{ 'admin/js/morris-data.js' }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin/js/startmin.js"></script>

</body>

</html>
