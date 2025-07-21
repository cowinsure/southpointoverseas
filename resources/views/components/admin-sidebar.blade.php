{{-- -------------------------------- Home Page elements ------------------------------------- --}}

<!-- Heading -->
<div class="sidebar-heading">Home</div>

{{-- ----------------------- Home - slider item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseSlider"
        aria-expanded="true"
        aria-controls="collapseSlider"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Slider</span>
    </a>
    <div
        id="collapseSlider"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('slider.create') }}">Add slider information</a>
            <a class="collapse-item" href="{{ route('slider.index') }}">View all sliders</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end - Home - slider item  --}}

{{-- ------------------- Home - content item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseContent"
        aria-expanded="true"
        aria-controls="collapseContent"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Content</span>
    </a>
    <div
        id="collapseContent"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('content.create') }}">Add content</a>
            <a class="collapse-item" href="{{ route('content.index') }}">View all content</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end - Home - content item  --}}


{{-- ------------------------------------------------------------------ end - Home Page elements --}}




{{-- ---------------------------------- About us page elements --------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>

<!-- Heading -->
<div class="sidebar-heading">About</div>

{{-- ----------------------- About us item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseAbout"
        aria-expanded="true"
        aria-controls="collapseAbout"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>About</span>
    </a>
    <div
        id="collapseAbout"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{route('about.create')}}">Add about page info</a>
            <a class="collapse-item" href="{{route('about.index')}}">View all info</a>
        </div>
    </div>
</li>

{{-- ------------------------------------------ end - About us item  --}}

{{-- -----------------------  Directors message item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseMessage"
        aria-expanded="true"
        aria-controls="collapseMessage"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Director's Message</span>
    </a>
    <div
        id="collapseMessage"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{route('message.create')}}">Add directors message</a>
            <a class="collapse-item" href="{{route('message.index')}}">View all </a>
        </div>
    </div>
</li>

{{-- ----------------------------------------- end - Directors message item  --}}

{{-- -----------------------  company profile item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseProfile"
        aria-expanded="true"
        aria-controls="collapseProfile"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Company Profile</span>
    </a>
    <div
        id="collapseProfile"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{route('profile.create')}}">Add company profile</a>
            <a class="collapse-item" href="{{route('profile.index')}}">View all profiles</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------- end - company profile item  --}}

{{-- -----------------------  clients lists country item ----------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider" style="background-color: yellow"/>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseClient"
        aria-expanded="true"
        aria-controls="collapseClient"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Clients country</span>
    </a>
    <div
        id="collapseClient"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{route('client.create')}}">Add country</a>
            <a class="collapse-item" href="{{route('client.index')}}">View all info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------- end - clients lists country item  --}}


{{-- -----------------------  clients countries location list ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseClientList"
        aria-expanded="true"
        aria-controls="collapseClientList"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Clients Area</span>
    </a>
    <div
        id="collapseClientList"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{route('area.create')}}">Add location</a>
            <a class="collapse-item" href="{{route('area.index')}}">View all info</a>
        </div>
    </div>
</li>

{{-- ----------------------------------------- end - clients countries location list  --}}



{{-- ------------------------------------------------------------------------ end - About us page elements --}}


{{-- ------------------------------------------ Trade page -------------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider" style="background-color: yellow"/>

<!-- Heading -->
<div class="sidebar-heading">Trades</div>

{{-- ----------------------- trades slider item -------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseTradeSlider"
        aria-expanded="true"
        aria-controls="collapseTradeSlider"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Images</span>
    </a>
    <div
        id="collapseTradeSlider"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('trades.create') }}">Add trade image</a>
            <a class="collapse-item" href="{{ route('trades.index') }}">View all images</a>
        </div>
    </div>
</li>

{{-- ------------------------------------------------------- end - trades slider item --}}

{{-- ---------------------------- Training activities ------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseTrainingActivities"
        aria-expanded="true"
        aria-controls="collapseTrainingActivities"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Training Activities</span>
    </a>
    <div
        id="collapseTrainingActivities"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('trainings.create') }}">Add training activities</a>
            <a class="collapse-item" href="{{ route('trainings.index') }}">View all training activities</a>
        </div>
    </div>
</li>

{{-- ------------------------------------------------------ end - training activities --}}


{{-- --------------------------------------------------------------------------------------- end - trade page  --}}


{{-- ----------------------------------- Infrastructure elements -------------------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>

<!-- Heading -->
<div class="sidebar-heading">Infrastructure</div>

{{-- ----------------------- Infrastructure - title item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseInfrastructure"
        aria-expanded="true"
        aria-controls="collapseInfrastructure"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Infrastructure</span>
    </a>
    <div
        id="collapseInfrastructure"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('infrastructure.create') }}">Add Infrastructure</a>
            <a class="collapse-item" href="{{ route('infrastructure.index') }}">View all info</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end - Infrastructure - title item  --}}

{{-- ----------------------- Infrastructure - image slider item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseInfrastructureSlide"
        aria-expanded="true"
        aria-controls="collapseInfrastructureSlide"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Image slider</span>
    </a>
    <div
        id="collapseInfrastructureSlide"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('infrastructure-images.create') }}">Add info</a>
            <a class="collapse-item" href="{{ route('infrastructure-images.index') }}">View all info</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end - Infrastructure - image slider item  --}}

{{-- ----------------------------------- end - Infrastructure Page elements ------------------------------------------ --}}

{{-- ----------------------------------------- contact Page elements ---------------------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>

<!-- Heading -->
<div class="sidebar-heading">Contact</div>

{{-- ----------------------- contact info item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseInfo"
        aria-expanded="true"
        aria-controls="collapseInfo"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Contact information</span>
    </a>
    <div
        id="collapseInfo"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('contact.create') }}">Add contact info</a>
            <a class="collapse-item" href="{{ route('contact.index') }}">View all info</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end - contact info item  --}}


{{-- ---------------------------------------------------------------------------------------- end - contact Page elements --}}


{{-- -------------------------------- recruitment page elements ------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>

<!-- Heading -->
<div class="sidebar-heading">Recruitment</div>

{{-- ----------------------- recruitment item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseRecruitment"
        aria-expanded="true"
        aria-controls="collapseRecruitment"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Recruitments</span>
    </a>
    <div
        id="collapseRecruitment"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('recruitment.create') }}">Add recruitment</a>
            <a class="collapse-item" href="{{ route('recruitment.index') }}">View all items</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end recruitment item  --}}


{{-- ----------------------- documents title ----------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider" style="background-color: yellow"/>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseDocumentsTitle"
        aria-expanded="true"
        aria-controls="collapseDocumentsTitle"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Document title</span>
    </a>
    <div
        id="collapseDocumentsTitle"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('document.create') }}">Add title</a>
            <a class="collapse-item" href="{{ route('document.index') }}">View all items</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end documents title  --}}

{{-- ----------------------- documents papers ----------------------- --}}


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseDocumentsPaper"
        aria-expanded="true"
        aria-controls="collapseDocumentsPaper"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Document papers</span>
    </a>
    <div
        id="collapseDocumentsPaper"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('paper.create') }}">Add paper</a>
            <a class="collapse-item" href="{{ route('paper.index') }}">View all items</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider" style="background-color: yellow"/>

{{-- ---------------------------------------- end documents papers  --}}


{{-- ----------------------- service item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseService"
        aria-expanded="true"
        aria-controls="collapseService"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Services</span>
    </a>
    <div
        id="collapseService"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('service.create') }}">Add services</a>
            <a class="collapse-item" href="{{ route('service.index') }}">View all items</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end service item  --}}


{{-- ------------------------------------------------------------------ end - recruitment Page elements --}}


{{-- -------------------------------- Footer page elements ------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>

<!-- Heading -->
<div class="sidebar-heading">Footer</div>

{{-- ----------------------- footer item ----------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a
        class="nav-link collapsed"
        href="#"
        data-toggle="collapse"
        data-target="#collapseFooter"
        aria-expanded="true"
        aria-controls="collapseFooter"
    >
        <i class="fas fa-fw fa-cog"></i>
        <span>Footer</span>
    </a>
    <div
        id="collapseFooter"
        class="collapse"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
    >
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
            <a class="collapse-item" href="{{ route('footer.create') }}">Add footer item</a>
            <a class="collapse-item" href="{{ route('footer.index') }}">View all items</a>
        </div>
    </div>
</li>

{{-- ---------------------------------------- end footer item  --}}


{{-- ------------------------------------------------------------------ end - Footer Page elements --}}

{{-- ------------------------------------------- logout option --------------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider"/>


<li class="nav-item">
    <a class="nav-link" data-toggle="modal" data-target="#logoutModal" style="cursor: pointer">
        <i class="fas fa-fw fa-cog"></i>
        <span>Logout</span></a
    >
</li>


<!-- ----------------- Logout Modal --------------- -->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModal">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to log out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href={{ route("logging-out") }}>
                    <button type="button" class="btn btn-danger">Logout</button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- -------------------------- end - Logout Modal  -->


{{-- --------------------------------------------------------------------------------- end - logout option --}}



