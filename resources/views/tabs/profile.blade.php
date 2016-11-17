<div class="panel panel-default">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
            <li><a href="#profile" data-toggle="tab">Profile</a></li>
            <li class="disabled"><a>Disabled</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
                    <li class="divider"></li>
                    <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
                </ul>
            </li>
        </ul>
    </div>


    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home">
            <h1>{{ Auth::user()->name }}</h1>         </div>
        <div class="tab-pane fade" id="profile">
            <h1>{{ Auth::user()->email }}</h1>         </div>
        <div class="tab-pane fade" id="dropdown1">
            <h1>{{ Auth::user()->role }}</h1>         </div>
        <div class="tab-pane fade" id="dropdown2">
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
        </div>
    </div>

</div>


