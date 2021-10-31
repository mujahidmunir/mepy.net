<div class="menu-container flex-grow-1">
    <ul id="menu" class="menu">
        <li>

            <a class="{{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}">
                <i data-cs-icon="home-garage" class="icon" data-cs-size="18"></i>
                <span class="label"> Dashboards</span>
            </a>
        </li>
        <li>
            <a class="{{ request()->is('admin/record') ? 'active' : '' }}" href="{{ url('admin/record') }}">
                <i class="fas fa-record-vinyl"></i>
                &nbsp;<span class="label"> Record</span>
            </a>
        </li>
        <li>
            <a class="{{ request()->is('admin/creativa') ? 'active' : '' }}" href="{{ url('admin/creativa') }}">
                <i class="fas fa-headphones-alt"></i>
                &nbsp;<span class="label"> Creativa</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/talent') }}" class="{{ request()->is('admin/talent') ? 'active' : '' }}">
                <i class="fas fa-tasks"></i>
                &nbsp;<span class="label">Talent</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/entertainment') }}"
                class="{{ request()->is('admin/entertainment') ? 'active' : '' }}">
                <i class="fas fa-film"></i>
                &nbsp;<span class="label">Entertainment</span>
            </a>
        </li>
        <li>
            <a href="#website" class="{{ request()->is('admin/contactus') || request()->is('admin/slide') || request()->is('admin/categories') || request()->is('articles') || request()->is('clients')? 'active' : '' }}">
                <i class="fas fa-cog"></i>
                <span class="label">Config</span>
            </a>
            <ul id="website">
                <li>
                    <a class="{{ request()->is('admin/slide') ? 'active' : '' }}" href="{{ url('admin/slide') }}">
                        <span class="label">Slide</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/contactus') }}" class="{{ request()->is('admin/contactus') ? 'active' : '' }}">
                       <span class="label">Contact Us</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/categories') }}" class="{{ request()->is('admin/categories') ? 'active' : '' }}">
                       <span class="label">Categories</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/articles') }}" class="{{ request()->is('admin/articles') ? 'active' : '' }}">
                       <span class="label">Articles</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/clients') }}" class="{{ request()->is('admin/clients') ? 'active' : '' }}">
                       <span class="label">Clients</span>
                    </a>
                </li>


            </ul>
        </li>
        @hasexactroles('super_admin')
        <li>
            <a href="#users" class="{{ request()->is('admin/user') || request()->is('admin/role') ? 'active' : '' }}">
                <i class="fas fa-male"></i>
                <span class="label">Account</span>
            </a>
            <ul id="users">
                <li>
                    <a class="{{ request()->is('admin/user') ? 'active' : '' }}" href="{{ url('admin/user') }}">
                        <span class="label">Users</span>
                    </a>
                </li>
                {{-- <li>
                    <a class="{{ request()->is('admin/role') ? 'active' : '' }}" href="{{ url('admin/role') }}">
                        <span class="label">Role</span>
                    </a>
                </li> --}}
            </ul>
        </li>
        @endhasexactroles
    </ul>
</div>
