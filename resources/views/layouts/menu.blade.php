<li class="{{ Request::is('times*') ? 'active' : '' }}">
    <a href="{{ route('times.index') }}"><i class="fa fa-edit"></i><span>Times</span></a>
</li>

<li class="{{ Request::is('campeonatos*') ? 'active' : '' }}">
    <a href="{{ route('campeonatos.index') }}"><i class="fa fa-edit"></i><span>Campeonatos</span></a>
</li>

