<div class="col-xs-5 pull-left">
    <div class="btn-group">
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Rev (Latest) <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Latest</a></li>
                <li><a href="#">A</a></li>
                <li><a href="#">B</a></li>
                <li><a href="#">C</a></li>
                <li><a href="#">D</a></li>
            </ul>
        </div>
    </div>
    <div class="btn-group">
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Status (Live) <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Draft</a></li>
                <li><a href="#">Pre-Live</a></li>
                <li><a href="#">Live</a></li>
                <li><a href="#">Completed</a></li>
            </ul>
        </div>
    </div>
    <button  id="add" type="button" class="btn btn-default">Add New</button>
</div>
    
<div class="col-xs-4 pull-center">
    <div class=".text-center">
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li class="disabled"><a href="#">2</a></li>
            <li class="active"><a href="#">3</a></li>
            <li class="active"><a href="#">4</a></li>
            <li class="active"><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
</div>

<div class="col-xs-3 pull-right">
    <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
    </form>
</div>
    
<div class="col-xs-12 pull-right">
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Revision</th>
            <th>No. Plots</th>
            <th>Layout</th>
            <th>Cad<th>
            <th></th>
        </thead>

        <tbody>
            <tr>
                <td>Anstey</td>
                <td>C</td>
                <td>56</td>
                <td><a>anstey-c.pdf<a></td>
                <td><a>anstey-c.dng</a></td>
                <td>
                    <div class="btn-group">
                        <button  id="Drawings" type="button" class="btn btn-default">Drawings</button>
                        <button  id="schedules" type="button" class="btn btn-default">Schedules</button>
                        <button  id="programme" type="button" class="btn btn-default">Programme</button>
                        <button  id="sales" type="button" class="btn btn-default">Sales</button>
                        <button  id="cc" type="button" class="btn btn-default">Customer Care</button>
                    </div>
                </td>
            </tr>

            <tr class='alt'>
                <td>Scraptoft</td>
                <td>D</td>
                <td>70</td>
                <td><a>scraptoft-d.pdf<a></td>
                <td><a>scraptoft-d.dng</a></td>
                <td>
                    <div class="btn-group">
                        <button  id="Drawings" type="button" class="btn btn-default">Drawings</button>
                        <button  id="schedules" type="button" class="btn btn-default">Schedules</button>
                        <button  id="programme" type="button" class="btn btn-default">Programme</button>
                        <button  id="sales" type="button" class="btn btn-default">Sales</button>
                        <button  id="cc" type="button" class="btn btn-default">Customer Care</button>
                    </div>
                </td>
            </tr>

            <tr class='alt'>
                <td>Whetstone</td>
                <td>D</td>
                <td>32</td>
                <td><a>whetstone-d.pdf<a></td>
                <td><a>whetstone-d.dng</a></td>
                <td>
                    <div class="btn-group">
                        <button  id="Drawings" type="button" class="btn btn-default">Drawings</button>
                        <button  id="schedules" type="button" class="btn btn-default">Schedules</button>
                        <button  id="programme" type="button" class="btn btn-default">Programme</button>
                        <button  id="sales" type="button" class="btn btn-default">Sales</button>
                        <button  id="cc" type="button" class="btn btn-default">Customer Care</button>
                    </div>
                </td>
            </tr>

            <tr class='alt'>
                <td>Ibstock</td>
                <td>A</td>
                <td>20</td>
                <td><a>ibstock-a.pdf<a></td>
                <td><a>ibstock-a.dng</a></td>
                <td>
                    <div class="btn-group">
                        <button  id="Drawings" type="button" class="btn btn-default" onclick='window.location = "all.php?main=developments&sub=drawings";'>Drawings</button>
                        <button  id="schedules" type="button" class="btn btn-default" onclick='window.location = "all.php?main=developments&sub=schedules";'>Schedules</button>
                        <button  id="programme" type="button" class="btn btn-default" onclick='window.location = "all.php?main=developments&sub=programme";'>Programme</button>
                        <button  id="sales" type="button" class="btn btn-default" onclick='window.location = "all.php?main=developments&sub=drawings";'>Sales</button>
                        <button  id="cc" type="button" class="btn btn-default" onclick='window.location = "all.php?main=developments&sub=cc";'>Customer Care</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>