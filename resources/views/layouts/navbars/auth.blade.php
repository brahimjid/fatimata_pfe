
<div class="sidebar" data-color="white" data-active-color="danger">

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
            <img src="{{ asset('paper') }}/img/mike.jpg">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __('Ges_Natalité') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
        <li class="bg-danger">
                <a class=" bg-danger">
                    <i class="nc-icon  nc-bank text-white"></i>
                   <p class="text-white"> {{ __('Table de Bord') }}</p>
                </a>
            </li>
{{--              @can('admin')--}}
            <li
                <a data-toggle="collapse" aria-expanded="true" href="#droitaccees">
                    <i class="nc-icon  nc-circle-10 "></i>
                    <p>
                            Dossiers médicaux des patients
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="droitaccees">
                    <ul class="nav">
                    <li >
                <a href="{{ route('patients.index', 'patients') }}">
              <span class="sidebar-mini-icon">{{ __('Pat') }}</span>
                   <p > {{ __(' Patients List') }}</p>
                </a>
            </li>
{{--               @endcan()--}}
                        <li >
                            <a href="{{ route('naissances.index', 'naissances') }}">
                                <span class="sidebar-mini-icon">{{ __('NN') }}</span>
                                <span class="sidebar-normal">{{ __(' Nouveau Né ') }}</span>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route('accouchements.index', 'accouchements') }}">
                                <span class="sidebar-mini-icon">{{ __('AC') }}</span>
                                <span class="sidebar-normal">{{ __(' Accouchements ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="{{ route('hopitals.index', 'hopitales') }}">
                    <i class="nc-icon nc-shop"></i>
                    <p>{{ __('Hopitals') }}</p>
                </a>
            </li>

            <li>
                <a href="{{ route('statistics', 'statistics') }}">
                    <i class="nc-icon nc-chart-pie-36"></i>
                    <p>{{ __('Statistiques') }}</p>
                </a>
            </li>
            <li >
                                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                                <i class="nc-icon nc-single-02"></i>
                                    <p>
                                            {{ __('droits daccés') }}
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse show" id="laravelExamples">
                                    <ul class="nav">
                                        <li >
                                            <a href="{{ route('profile.edit') }}">
                                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ route('users.index', 'users') }}">
                                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                                <span class="sidebar-normal">{{ __(' User List') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


            <li class=" bg-danger">
             <a class="dropdown-item" onclick="document.getElementById('formLogOut').submit();">  <i class="nc-icon nc-button-power text-white"></i><p class="text-white">{{ __('déconnexion') }}</p></a>


               </li>
        </ul>
    </div>
</div>
