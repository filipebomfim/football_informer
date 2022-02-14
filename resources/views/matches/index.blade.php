@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Jogos de Hoje</h1>
    <div class="row d-flex justify-content-center">
        @foreach ($matches as $match)
            <div class="card shadow mb-4 mr-4 col-md-5">
                <div class="card-header py-3 d-flex align-items-center">
                    <img src="{{$match['competition']['area']['ensignUrl']}}" class=" mr-1" alt="" width="40px" height="20px">
                    <h6 class="m-0 mr-auto font-weight-bold text-primary">{{$match['competition']['name']}}</h6>
                    @if ($match['status'] == 'IN_PLAY')
                        <i class='bx bxs-circle bx-burst ' style='color:#ff0000;font-size:10px' ></i>
                    @else
                        <h6 class="m-0 font-weight-bold text-primary">{{date("H:m", strtotime($match['utcDate'])-1)}}</h6>
                    @endif
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-today" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="col-md-3 font-weight-bold ">{{$match['homeTeam']['name']}}</td>
                                    <td class="col-md-1 font-weight-bold" id="result-home">{{$match['score']['fullTime']['homeTeam']}}</td>
                                    <td class="col-md-1">X</td>
                                    <td class="col-md-1 font-weight-bold" id="result-away">{{$match['score']['fullTime']['awayTeam']}}</td>
                                    <td class="col-md-3 font-weight-bold text-center">{{$match['awayTeam']['name']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection