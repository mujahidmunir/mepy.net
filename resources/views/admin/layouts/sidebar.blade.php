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
            <a href="{{ url('admin/talent') }}" class="{{ request()->is('admin/talents') ? 'active' : '' }}">
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
            <a href="{{ url('admin/contactus') }}" class="{{ request()->is('admin/contactus') ? 'active' : '' }}">
                <i class="fas fa-envelope"></i>
                &nbsp;<span class="label">Contact Us</span>
            </a>
        </li>
        <span>Account</span>
        <li>
            <a href="#users">
                <i class="fas fa-users"></i>
                <span class="label">Account</span>
            </a>
            <ul id="users">
                <li>
                    <a href="Misc.Player.html">
                        <span class="label">Users</span>
                    </a>
                </li>
                <li>
                    <a href="Misc.Material.html">
                        <span class="label">Role</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</div>
