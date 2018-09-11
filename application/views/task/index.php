<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view("header-css"); ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/plugins/datatables/dataTables.bootstrap.css">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php $this->load->view("header"); ?>
            <?php $this->load->view("leftmenu"); ?>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Task
                        <small>Control panel</small>
                    </h1>

                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div >
                                <a href='<?php echo base_url(); ?>index.php/task/add' class="btn btn-info"> Add New Task </a>
                                </br></br>
                            </div>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-solid bg-teal-gradient">
                                <div class="box-header ui-sortable-handle" style="cursor: move;">
                                    <i class="fa fa-th"></i>
                                    <h3 class="box-title">Sales Graph</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body border-radius-none">
                                    <div class="chart" id="line-chart" style="height: 250px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="250" version="1.1" width="416" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.75px; top: -0.59375px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="41" y="214" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 10px &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#efefef" d="M53.5,214H391" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="41" y="166.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 10px &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5,000</tspan></text><path fill="none" stroke="#efefef" d="M53.5,166.75H391" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="41" y="119.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 10px &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10,000</tspan></text><path fill="none" stroke="#efefef" d="M53.5,119.5H391" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="41" y="72.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 10px &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#efefef" d="M53.5,72.25H391" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="41" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 10px &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20,000</tspan></text><path fill="none" stroke="#efefef" d="M53.5,25H391" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="329.0771567436209" y="226.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 10px &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal" transform="matrix(1,0,0,1,0,5.5)"><tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="178.98602673147025" y="226.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 10px &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal" transform="matrix(1,0,0,1,0,5.5)"><tspan dy="3.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><path fill="none" stroke="#efefef" d="M53.5,188.8063C62.931956257594166,188.5417,81.7958687727825,190.4009875,91.22782503037666,187.74790000000002C100.65978128797083,185.09481250000002,119.52369380315916,168.75624016393445,128.95565006075333,167.5816C138.285085054678,166.41972766393442,156.9439550425273,180.64386249999998,166.27339003645199,178.40185C175.60282503037666,176.15983749999998,194.261695018226,151.8811350409836,203.59113001215067,149.6455C213.02308626974485,147.3852975409836,231.88699878493316,158.0678125,241.31895504252734,160.4185C250.7509113001215,162.7691875,269.6148238153098,179.61898934426227,279.04678007290397,168.451C288.37621506682865,157.40440184426228,307.035085054678,78.52883321823204,316.3645200486027,71.56015C325.59143377885783,64.66804571823204,344.0452612393682,105.24937403846154,353.27217496962334,113.00785C362.7041312272175,120.93873653846154,381.56804374240585,128.9901625,391,134.3176" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="53.5" cy="188.8063" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="91.22782503037666" cy="187.74790000000002" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="128.95565006075333" cy="167.5816" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="166.27339003645199" cy="178.40185" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="203.59113001215067" cy="149.6455" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="241.31895504252734" cy="160.4185" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="279.04678007290397" cy="168.451" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="316.3645200486027" cy="71.56015" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="353.27217496962334" cy="113.00785" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="391" cy="134.3176" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 44.7278px; top: 113px; display: none;"><div class="morris-hover-row-label">2011 Q2</div><div class="morris-hover-point" style="color: #efefef">
                                                Item 1:
                                                2,778
                                            </div></div></div>
                                </div><!-- /.box-body -->
                                
                            </div>
                        </div>	
                        <div class="col-md-4">
                            <div class="box box-solid bg-green-gradient">
                                <div class="box-header ui-sortable-handle" style="cursor: move;">
                                    <i class="fa fa-calendar"></i>
                                    <h3 class="box-title">Calendar</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Add new event</a></li>
                                                <li><a href="#">Clear events</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">View calendar</a></li>
                                            </ul>
                                        </div>
                                        <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline"><div class="datepicker-days" style="display: block;"><table class="table table-condensed"><thead><tr><th class="prev" style="visibility: visible;">«</th><th colspan="5" class="datepicker-switch">July 2018</th><th class="next" style="visibility: visible;">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day">24</td><td class="old day">25</td><td class="old day">26</td><td class="old day">27</td><td class="old day">28</td><td class="old day">29</td><td class="old day">30</td></tr><tr><td class="day">1</td><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td></tr><tr><td class="day">8</td><td class="day">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td></tr><tr><td class="day">15</td><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td></tr><tr><td class="day">22</td><td class="day">23</td><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td></tr><tr><td class="day">29</td><td class="day">30</td><td class="day">31</td><td class="new day">1</td><td class="new day">2</td><td class="new day">3</td><td class="new day">4</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table table-condensed"><thead><tr><th class="prev" style="visibility: visible;">«</th><th colspan="5" class="datepicker-switch">2018</th><th class="next" style="visibility: visible;">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table table-condensed"><thead><tr><th class="prev" style="visibility: visible;">«</th><th colspan="5" class="datepicker-switch">2010-2019</th><th class="next" style="visibility: visible;">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
                                </div><!-- /.box-body -->

                            </div>
                        </div>	

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>100%</h3>
                                    <p>Money Collection</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>20%</h3>
                                    <p>Supplier Payments</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>60%</h3>
                                    <p>Customer Services</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <?php $this->load->view("footer"); ?>
            <?php $this->load->view("rightsidebar"); ?>
            <div class="control-sidebar-bg"></div>
        </div>
        <?php $this->load->view("header-js"); ?>
        <script src="<?php echo base_url(); ?>/theme/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>/theme/plugins/datatables/dataTables.bootstrap.min.js"></script>
    </body>
</html>
