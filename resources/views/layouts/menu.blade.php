<li class="nav-item">
    <a href="{{ route('consulta.index') }}"
       class="nav-link {{ Request::is('consulta*') ? 'active' : '' }}">
        <p>Consulta</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('cita-vue.index') }}"
       class="nav-link {{ Request::is('cita*') ? 'active' : '' }}">
        <p>Cita</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('cliente-vue.index') }}"
       class="nav-link {{ Request::is('cliente-vue*') ? 'active' : '' }}">
        <p>Cliente</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('usuario-vue.index') }}"
       class="nav-link {{ Request::is('usuario-vue*') ? 'active' : '' }}">
        <p>Usuario</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('paciente-vue.index') }}"
       class="nav-link {{ Request::is('paciente-vue*') ? 'active' : '' }}">
        <p>Paciente</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('doctor-vue.index') }}"
       class="nav-link {{ Request::is('doctor-vue*') ? 'active' : '' }}">
        <p>DOctor</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('citadetalle-vue.index') }}"
       class="nav-link {{ Request::is('citadetalle-vue*') ? 'active' : '' }}">
        <p>Cita Detalle</p>
    </a>
</li>