@extends('master')

@section('content')
    <v-row no-gutters clas="pa-5">
        <v-col cols="12" sm="4"> Income x Expenses</v-col>
        <v-col cols="12" sm="4"> Liabilities</v-col>
        <v-col cols="12" sm="4">
            <assets />
        </v-col>
    </v-row>
@endsection

@push('js')
    <script src="{{ mix('/js/dashboard/index.js') }}"></script>
@endpush
