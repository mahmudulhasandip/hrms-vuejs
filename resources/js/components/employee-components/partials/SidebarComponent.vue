<template>
    <div class="default-sidebar">
        <!-- Begin Side Navbar -->
        <nav class="side-navbar box-scroll sidebar-scroll">
            <!-- Begin Main Navigation -->
            <ul class="list-unstyled">
                <li><a href="javascript:void(0);"><i class="la la-at"></i><span>Simple Link</span></a></li>
                <li><a href="#dropdown" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Dropdown</span></a>
                    <ul id="dropdown" class="collapse list-unstyled pt-0">
                        <li><a href="javascript:void(0);">Link</a></li>
                        <li><a href="javascript:void(0);">Link</a></li>
                        <li><a href="javascript:void(0);">Link</a></li>
                        <li><a href="javascript:void(0);">Link</a></li>
                    </ul>
                </li>
            </ul>
            <span class="heading">Title</span>
            <ul class="list-unstyled">
                <li class="active"><a href="#dropdown-db" aria-expanded="true" data-toggle="collapse"><i class="la la-columns"></i><span>Active</span></a>
                    <ul id="dropdown-db" class="collapse list-unstyled show pt-0">
                        <li><a class="active" href="javascript:void(0);">Active</a></li>
                        <li><a href="javascript:void(0);">Link</a></li>
                        <li><a href="javascript:void(0);">Link</a></li>
                        <li><a href="javascript:void(0);">Link</a></li>
                        <li><a href="javascript:void(0);">Link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li><a href="db-all.html"><i class="la la-angle-left"></i><span>Back To Elisyam</span></a></li>
            </ul>
            <!-- End Main Navigation -->
        </nav>
        <!-- End Side Navbar -->
    </div>
    <!-- End Left Sidebar -->
</template>
