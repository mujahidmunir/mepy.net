<div class="menu-container flex-grow-1">
    <ul id="menu" class="menu">
        <li>

            <a class="{{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}">
                <i data-cs-icon="home-garage" class="icon" data-cs-size="18"></i>
                <span class="label"> Dashboards</span>
            </a>
            </li>
        <li>
            <a class="{{ request()->is('record/list') ? 'active' : '' }}" href="#records">
                <i class="fas fa-record-vinyl"></i>
                &nbsp;<span class="label"> Record</span>
            </a>
            <ul id="records">
                <li>
                    <a class="{{ request()->is('record/list') ? 'active' : '' }}" href="{{ url('record/list') }}">
                        <span class="label">List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{ request()->is('creativa/list') ? 'active' : '' }}" href="#creativa">
                <i class="fas fa-headphones-alt"></i>
                &nbsp;<span class="label"> Creativa</span>
            </a>
            <ul id="creativa">
                <li>
                    <a class="{{ request()->is('creativa/list') ? 'active' : '' }}" href="{{ url('creativa/list') }}">
                        <span class="label">List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#talents" class="{{ request()->is('talents') ? 'active' : '' }}">
                <i class="fas fa-tasks"></i>
                 &nbsp;<span class="label">Talent</span>
            </a>
            <ul id="talents">
                <li>
                    <a class="{{ request()->is('talents/list') ? 'active' : '' }}" href="{{ url('talent/list') }}">
                        <span class="label">List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#entertainment" class="{{ request()->is('entertainment/list') ? 'active' : '' }}">
                <i class="fas fa-film"></i>
                &nbsp;<span class="label">Entertainment</span>
            </a>
            <ul id="entertainment">
                <li>
                    <a class="{{ request()->is('entertainment/list') ? 'active' : '' }}" href="{{ url('entertainment/list') }}">
                        <span class="label">List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#contactus" class="{{ request()->is('contactus/list') ? 'active' : '' }}">
                <i class="fas fa-envelope"></i>
                &nbsp;<span class="label">Contact Us</span>
            </a>
            <ul id="contactus">
                <li>
                    <a class="{{ request()->is('contactus/list') ? 'active' : '' }}" href="{{ url('entertainment/list') }}">
                        <span class="label">List</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</div>
