<ol class="breadcrumb">
  <li><a href="all.php">Home</a></li>
  <li><a href="all.php?main=developments&sub=dashboard">Developments</a></li>
  <li class="active">Sites</li>
</ol>


<div class="col-xs-5 pull-left">
    <div class="btn-group">
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Status (Live) <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Draft</a></li>
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
            <th>No. Plots</th>
            <th>Current Layout</th>
            <th></th>
        </thead>

        <tbody>
            <tr class='success'>
                <td>Anstey Phase 1</td>
                <td>56</td>
                <td><a href='./uploads/1064_Weddington_Planning_Layout Rev.01.pdf'>anstey-c.pdf<a></td>
                <td>
                    <div class="btn-group">
                        <button id="plots" type="button" class="btn btn-default" onclick='window.location = "all.php?main=developments&sub=site";'>edit</button>
                    </div>
                </td>
            </tr>

            <tr class='danger'>
                <td>Scraptoft</td>
                <td>70</td>
                <td><a href='./uploads/1064_Weddington_Planning_Layout Rev.01.pdf'>anstey-c.pdf<a></td>
                <td>
                    <div class="btn-group">
                        <button id="plots" type="button" class="btn btn-default" onclick='window.location = "all.php?main=developments&sub=site";'>edit</button>
                    </div>
                </td>
            </tr>

            <tr class='alt'>
                <td>Whetstone</td>
                <td>32</td>
                <td><a href='./uploads/1064_Weddington_Planning_Layout Rev.01.pdf'>anstey-c.pdf<a></td>
                <td>
                    <div class="btn-group">
                        <button id="plots" type="button" class="btn btn-default" onclick='window.location = "all.php?main=developments&sub=site";'>edit</button>
                    </div>
                </td>
            </tr>

            <tr class='alt'>
                <td>Ibstock</td>
                <td>20</td>
                <td><a href='./uploads/1064_Weddington_Planning_Layout Rev.01.pdf'>anstey-c.pdf<a></td>
                <td>
                    <div class="btn-group">
                        <button id="plots" type="button" class="btn btn-default" onclick='window.location = "all.php?main=developments&sub=site";'>edit</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>