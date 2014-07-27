<div class="col-xs-4 pull-left">
    <div class="btn-group">
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Status (Live) <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">All</a></li>
                <li><a href="#">Live</a></li>
                <li><a href="#">Completed</a></li>
            </ul>
        </div>
    </div>
</div>
    
<div class="col-xs-3 pull-center">
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

<div class="col-xs-2 pull-right">
    <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
    </form>
</div>
    
<div class="col-xs-9 pull-right">
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Revision</th>
            <th>View</th>
            <th>Status</th>
            <th>Plots</th>
        </thead>

        <tbody>
            <tr>
                <td>Anstey</td>
                <td>C</td>
                <td><a>anstey-c.pdf<a></td>
                <td style="color: green;">OK</td>
                <td>
                    <div class="btn-group">
                        <button id="add" type="button" class="btn btn-default">Edit</button>
                        <button id="add" type="button" class="btn btn-default">Revise</button>
                    </div>
                </td>
            </tr>

            <tr class='alt'>
                <td>Scraptoft</td>
                <td>D</td>
                <td><a>scraptoft-d.pdf<a></td>
                <td style="color: green;">OK</td>
                <td>
                    <div class="btn-group">
                        <button id="add" type="button" class="btn btn-default">Edit</button>
                        <button id="add" type="button" class="btn btn-default">Revise</button>
                    </div>
                </td>
            </tr>

            <tr class='alt'>
                <td>Whetstone</td>
                <td>D</td>
                <td><a>whetstone-d.pdf<a></td>
                <td style="color: red;">ON HOLD</td>
                <td>
                    <div class="btn-group">
                        <button id="add" type="button" class="btn btn-default">Edit</button>
                        <button id="add" type="button" class="btn btn-default">Revise</button>
                    </div>
                </td>
            </tr>

            <tr class='alt'>
                <td>Ibstock</td>
                <td>A</td>
                <td><a>ibstock-a.pdf<a></td>
                <td style="color: orange;">Behind schedule</td>
                <td>
                    <div class="btn-group">
                        <button id="add" type="button" class="btn btn-default">Edit</button>
                        <button id="add" type="button" class="btn btn-default">Revise</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
$(document).ready("#add").click(function() {
      window.location = "?main=construction&sub=programme"
});
</script>