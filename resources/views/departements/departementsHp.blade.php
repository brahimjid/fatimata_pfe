@extends('layouts.app', [
    'class' => '',
])
@section('content')


    <div class="card card-chart">
        <div class="card-header">
            <h5 class="card-title">list des Hopitaux</h5>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>

                    <th>Nom du Hopitaux</th>

                </tr>
                </thead>
                <tbody>
                @foreach($hopitaux as $hop)
                    <tr>
                        <td>
                            <a href="{{route('departementsHp',$hop->id)}}">
                                {{$hop->nom}}
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>

</div>

@endsection
