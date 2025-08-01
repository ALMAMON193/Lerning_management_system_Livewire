<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <!-- Dashboard -->
                <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a wire:navigate href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('backend/img/icons/dashboard.svg') }}" alt="img">
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Course Management -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('backend/img/icons/product.svg') }}" alt="img">
                        <span>Course Management</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('admin.categories.index') ?  : '' }}">
                            <a wire:navigate href="{{ route('admin.categories.index') }}">Category List</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.categories.create') ?  : '' }}">
                            <a wire:navigate href="{{ route('admin.categories.create') }}">Add Category</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.courses.index') ?  : '' }}">
                            <a wire:navigate href="{{ route('admin.courses.index') }}">Course List</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.courses.create') ?  : '' }}">
                            <a wire:navigate href="{{ route('admin.courses.create') }}">Add Course</a>
                        </li>
                    </ul>
                </li>

                <!-- Certificates -->
                <li class="submenu {{ request()->routeIs('admin.certificates.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('backend/img/icons/product.svg') }}" alt="img">
                        <span>Certificates</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ request()->routeIs('admin.certificates.*') ? 'block' : 'none' }}">
                        <li class="{{ request()->routeIs('admin.certificates.index') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.certificates.index') }}">Certificate List</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.certificates.create') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.certificates.create') }}">Add Certificate</a>
                        </li>
                    </ul>
                </li>

                <!-- Enrollments -->
                <li class="submenu {{ request()->routeIs('admin.enrollments.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('backend/img/icons/product.svg') }}" alt="img">
                        <span>Enrollments</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ request()->routeIs('admin.enrollments.*') ? 'block' : 'none' }}">
                        <li class="{{ request()->routeIs('admin.enrollments.index') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.enrollments.index') }}">Enrollment List</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.enrollments.create') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.enrollments.create') }}">Add Enrollment</a>
                        </li>
                    </ul>
                </li>

                <!-- Lessons -->
                <li class="submenu {{ request()->routeIs('admin.lessons.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('backend/img/icons/product.svg') }}" alt="img">
                        <span>Lessons</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ request()->routeIs('admin.lessons.*') ? 'block' : 'none' }}">
                        <li class="{{ request()->routeIs('admin.lessons.index') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.lessons.index') }}">Lesson List</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.lessons.create') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.lessons.create') }}">Add Lesson</a>
                        </li>
                    </ul>
                </li>

                <!-- Progress -->
                <li class="submenu {{ request()->routeIs('admin.progress.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('backend/img/icons/product.svg') }}" alt="img">
                        <span>Progress</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ request()->routeIs('admin.progress.*') ? 'block' : 'none' }}">
                        <li class="{{ request()->routeIs('admin.progress.index') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.progress.index') }}">Progress List</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.progress.create') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.progress.create') }}">Add Progress</a>
                        </li>
                    </ul>
                </li>

                <!-- Reviews -->
                <li class="submenu {{ request()->routeIs('admin.reviews.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('backend/img/icons/product.svg') }}" alt="img">
                        <span>Reviews</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ request()->routeIs('admin.reviews.*') ? 'block' : 'none' }}">
                        <li class="{{ request()->routeIs('admin.reviews.index') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.reviews.index') }}">Review List</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.reviews.create') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.reviews.create') }}">Add Review</a>
                        </li>
                    </ul>
                </li>

                <!-- Sections -->
                <li class="submenu {{ request()->routeIs('admin.sections.*') ? 'active' : '' }}">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('backend/img/icons/product.svg') }}" alt="img">
                        <span>Sections</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: {{ request()->routeIs('admin.sections.*') ? 'block' : 'none' }}">
                        <li class="{{ request()->routeIs('admin.sections.index') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.sections.index') }}">Section List</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.sections.create') ? 'active' : '' }}">
                            <a wire:navigate href="{{ route('admin.sections.create') }}">Add Section</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
