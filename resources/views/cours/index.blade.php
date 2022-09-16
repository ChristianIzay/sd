@extends('layouts.app')
@section('content')

<div class="row my-4">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('Name') }}</th>

                            <th>{{ __('cours') }}</th>


                        </tr>
                    </thead>
                    @foreach ($prof as $profs)
                    <tbody>
                        <tr>
                            <td>{{ __('#')}}</td>
                            <td>{{ $profs->name }}</td>
                            <td>

                                @foreach ($profs->cours as $cour)
                                    {{ $cour->name }},
                                @endforeach

                            </td>



                        </tr>
                    </tbody>
                    @endforeach
                </table>

                <!-- end table -->
            </div>
        </div>
    </div> <!-- .col-md-12 -->
</div> <!-- end section row my-4 -->
</div> <!-- .col-12 -->
</div> <!-- .row -->
@endsection

