@extends('layouts.producerlayout')



@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
 
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-chart text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="numbers">
                                                <p class="card-category">Number</p>
                                                <h4 class="card-title">150GB</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-refresh"></i> Update Now
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-light-3 text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="numbers">
                                                <p class="card-category">Revenue</p>
                                                <h4 class="card-title">$ 1,345</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-calendar-o"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-vector text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="numbers">
                                                <p class="card-category">Errors</p>
                                                <h4 class="card-title">23</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="nc-icon nc-favourite-28 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="numbers">
                                                <p class="card-category">Followers</p>
                                                <h4 class="card-title">+45K</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-refresh"></i> Update now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Global Sales by Top Locations</h4>
                                    <p class="card-category">All products that were shipped</p>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/US.png"> </div>
                                                            </td>
                                                            <td>USA</td>
                                                            <td class="text-right">
                                                                2.920
                                                            </td>
                                                            <td class="text-right">
                                                                53.23%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/DE.png" </div>
                                                            </td>
                                                            <td>Germany</td>
                                                            <td class="text-right">
                                                                1.300
                                                            </td>
                                                            <td class="text-right">
                                                                20.43%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/AU.png" </div>
                                                            </td>
                                                            <td>Australia</td>
                                                            <td class="text-right">
                                                                760
                                                            </td>
                                                            <td class="text-right">
                                                                10.35%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/GB.png" </div>
                                                            </td>
                                                            <td>United Kingdom</td>
                                                            <td class="text-right">
                                                                690
                                                            </td>
                                                            <td class="text-right">
                                                                7.87%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/RO.png" </div>
                                                            </td>
                                                            <td>Romania</td>
                                                            <td class="text-right">
                                                                600
                                                            </td>
                                                            <td class="text-right">
                                                                5.94%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/BR.png" </div>
                                                            </td>
                                                            <td>Brasil</td>
                                                            <td class="text-right">
                                                                550
                                                            </td>
                                                            <td class="text-right">
                                                                4.34%
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div>
                                                </div>
                                                <div class="col-md-6 ml-auto mr-auto">
                                                    <div id="worldMap" style="height: 300px;"></div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card ">
                                                        <div class="card-header ">
                                                            <h4 class="card-title">Email Statistics</h4>
                                                            <p class="card-category">Last Campaign Performance</p>
                                                        </div>
                                                        <div class="card-body ">
                                                            <div id=chartEmail class="ct-chart ct-perfect-fourth"></div>
                                                        </div>
                                                        <div class="card-footer ">
                                                            <div class="legend">
                                                                <i class="fa fa-circle text-info"></i> Open
                                                                <i class="fa fa-circle text-danger"></i> Bounce
                                                                <i class="fa fa-circle text-warning"></i> Unsubscribe
                                                            </div>
                                                            <hr>
                                                            <div class="stats">
                                                                <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card ">
                                                        <div class="card-header ">
                                                            <h4 class="card-title">Users Behavior</h4>
                                                            <p class="card-category">24 Hours performance</p>
                                                        </div>
                                                        <div class="card-body ">
                                                            <div id=chartHours class="ct-chart"></div>
                                                        </div>
                                                        <div class="card-footer ">
                                                            <div class="legend">
                                                                <i class="fa fa-circle text-info"></i> Open
                                                                <i class="fa fa-circle text-danger"></i> Click
                                                                <i class="fa fa-circle text-warning"></i> Click Second Time
                                                            </div>
                                                            <hr>
                                                            <div class="stats">
                                                                <i class="fa fa-history"></i> Updated 3 minutes ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card ">
                                                        <div class="card-header ">
                                                            <h4 class="card-title">2017 Sales</h4>
                                                            <p class="card-category">All products including Taxes</p>
                                                        </div>
                                                        <div class="card-body ">
                                                            <div id="chartActivity" class="ct-chart"></div>
                                                        </div>
                                                        <div class="card-footer ">
                                                            <div class="legend">
                                                                <i class="fa fa-circle text-info"></i> Tesla Model S
                                                                <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                                            </div>
                                                            <hr>
                                                            <div class="stats">
                                                                <i class="fa fa-check"></i> Data information certified
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card  card-tasks">
                                                        <div class="card-header ">
                                                            <h4 class="card-title">Tasks</h4>
                                                            <p class="card-category">Backend development</p>
                                                        </div>
                                                        <div class="card-body ">
                                                            <div class="table-full-width">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input class="form-check-input" type="checkbox" value="">
                                                                                        <span class="form-check-sign"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </button>
                                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                                    <i class="fa fa-times"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                                                        <span class="form-check-sign"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </button>
                                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                                    <i class="fa fa-times"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                                                        <span class="form-check-sign"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                                            </td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </button>
                                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                                    <i class="fa fa-times"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input class="form-check-input" type="checkbox" checked>
                                                                                        <span class="form-check-sign"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </button>
                                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                                    <i class="fa fa-times"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input class="form-check-input" type="checkbox" value="">
                                                                                        <span class="form-check-sign"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>Read "Following makes Medium better"</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </button>
                                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                                    <i class="fa fa-times"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                                                        <span class="form-check-sign"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>Unfollow 5 enemies from twitter</td>
                                                                            <td class="td-actions text-right">
                                                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </button>
                                                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                                                    <i class="fa fa-times"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer ">
                                                            <hr>
                                                            <div class="stats">
                                                                <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- 






<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch-image">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <label class="switch-mini">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Fixed Navbar</p>
                    <label class="switch-nav">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div>
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get free demo!</a>
                </div>
            </li>

            <li class="button-container">
                <div>
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Buy now!</a>
                </div>
            </li>

            <li class="button-container">
                <div>
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro/documentation/tutorial-components.html" target="_blank" class="btn btn-danger btn-block">Documentation</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"> · 426</i></button>
            </li>
        </ul>
@endsection
