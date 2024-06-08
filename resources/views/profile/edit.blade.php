<!-- EXTENDS MASTER LAYOUT AND USES DYNAMIC PAGE HEADING ------------------------------------------------------------------------------------------------>
@extends('layouts.profileLayout', ['header' => 'U S E R  &nbsp; P R O F I L E '])


<!-- PAGE CONTENT --------------------------------------------------------------------------------------------------------------------------------------->

@section('content')    

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-10 my-4 sm:p-8 bg-white shadow sm:rounded-lg">

                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>

            </div>

            <div class="p-10 my-4 sm:p-8 bg-white shadow sm:rounded-lg">

                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>

            </div>

            <div class="p-10 my-4 sm:p-8 bg-white shadow sm:rounded-lg">

                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
                
            </div>

        </div>
   
@endsection    