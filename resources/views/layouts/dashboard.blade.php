
@section('dashboard')
    <div class="box-body " style="width:40%;">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <ul class="todo-list">
            <li>
                <!-- drag handle -->
                <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                <!-- checkbox -->
                <input type="checkbox" value="">
                <!-- todo text -->
                <span class="text">Design a nice theme</span>
                <!-- Emphasis label -->
                <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                <!-- General tools such as edit or delete-->
                <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </div>
            </li>
            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                <input type="checkbox" value="">
                <span class="text">Make the theme responsive</span>
                <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </div>
            </li>
            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                <input type="checkbox" value="">
                <span class="text">Let theme shine like a star</span>
                <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </div>
            </li>
            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                <input type="checkbox" value="">
                <span class="text">Let theme shine like a star</span>
                <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </div>
            </li>
            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                <input type="checkbox" value="">
                <span class="text">Check your messages and notifications</span>
                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </div>
            </li>
            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                <input type="checkbox" value="">
                <span class="text">Let theme shine like a star</span>
                <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </div>
            </li>
        </ul>
        <div class="box-footer clearfix no-border">
            <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
        </div>
    </div>
    <!-- /.box-body -->

    <!-- /.box -->
    <div  class="box box-solid bg-green-gradient" style="width:40%;">
        <div class="box-header">
            <i class="fa fa-calendar"></i>

            <h3 class="box-title">Calendar</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bars"></i></button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
            </div>
            <!-- /. tools -->
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
        </div>
        </div>
    <div class="box-footer text-black">
        <div class="row">
            <div class="col-sm-6">
                <!-- Progress bars -->
                <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                </div>
                <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                </div>

                <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                </div>
                <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">60%</small>
                </div>
                <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                </div>

                <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">40%</small>
                </div>
                <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    </div>
    </div>
@endsection