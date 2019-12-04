<li class="{{ Request::is('times*') ? 'active' : '' }}">
    <a href="{{ route('times.index') }}"><i class="fa fa-edit"></i><span>Times</span></a>
</li>

<li class="{{ Request::is('campeonatos*') ? 'active' : '' }}">
    <a href="{{ route('campeonatos.index') }}"><i class="fa fa-edit"></i><span>Campeonatos</span></a>
</li>

<li class="{{ Request::is('rodadas*') ? 'active' : '' }}">
    <a href="{{ route('rodadas.index') }}"><i class="fa fa-edit"></i><span>Rodadas</span></a>
</li>

<li class="{{ Request::is('jogos*') ? 'active' : '' }}">
    <a href="{{ route('jogos.index') }}"><i class="fa fa-edit"></i><span>Jogos</span></a>
</li>

<li class="{{ Request::is('classificacao*') ? 'active' : '' }}">
    <a href="{{ route('classificacao.index') }}"><i class="fa fa-edit"></i><span>Classificação</span></a>
</li>
