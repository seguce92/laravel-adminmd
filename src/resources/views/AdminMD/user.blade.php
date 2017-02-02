<div class="image">
    <img src="{{ asset('vendor/seguce92/AdminMD/images/user.jpg') }}" width="48" height="48" alt="User" />
</div>
<div class="info-container">
    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Role</div>
    <div class="email">{{ config('seguce92.base.developer_email') }}</div>
    <div class="btn-group user-helper-dropdown">
        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
        <ul class="dropdown-menu pull-right">
            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
            <li role="seperator" class="divider"></li>
            <li>
                <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="material-icons">input</i> Salir
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</div>
