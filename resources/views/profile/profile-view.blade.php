@extends('layouts.master')
@section('content')
<h1 class="PI center">
    Profile Page
</h1>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card profile-box">
            <div class="card-body">
                <!--==============The profile grid==============-->
                <div class="row">
                    <div class="col-md-12">   
                        <div class="rounded center">
                            <img src="https://api.adorable.io/avatars/285/abott@adorable.png" alt="profile-picture" class="img-fluid rounded-circle img-thumbnail shadow-sm">
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-sm-6 offset-sm-3 pro-dis card" style="z-index:-1; padding-top:9em;">
                        <div class="card-body">
                            <div class="center">
                                <div class="right">
                                    <p>Name: </p>
                                </div>
                                <div class="detail">
                                    <p>{{ $users->full_name }}</p>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right">
                                    <p>Age:</p>
                                </div>
                                <div class="detail">
                                    <p>{{ $users->age }}</p>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right">
                                    <p>Gender:</p>
                                </div>
                                <div class="detail">
                                    <p>{{ $users->gender }}</p>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right">
                                    <p>Address:</p>
                                </div>
                                <div class="detail">
                                    <p>
                                        <address>{{ $users->address }}</address>
                                    </p>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right">
                                    <p>Score:</p>
                                </div>
                                <div class="detail">
                                    <p>
                                        {{ $users->score }}
                                    </p>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right">
                                    <p>Number of tasks completed: </p>
                                </div>
                                <div class="detail">
                                    <p>
                                        {{ $users->task }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid badges">
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h3 center">
                                        Badges
                                    </p>
                                </div>
                            </div>
                            
                            <div class="row center">
                    
                                <div class="col-sm-2">
                                    <div class="">
                                        <img class="card-img" style="width:100%; height:auto;" src="{{URL::to('Images/new.svg')}}" alt="New badge">
                                    </div>
                                </div>

                                @if($users->score>=40)
                                <div class="col-sm-2">
                                    <div class="">
                                        <img class="card-img" style="width:100%; height:auto;" src="{{URL::to('Images/approved.svg')}}" alt="New badge">
                                    </div>
                                </div>
                                @endif

                                @if($users->score>=100)
                                <div class="col-sm-2">
                                    <div class="">
                                        <img class="card-img" style="width:100%; height:auto;" src="{{URL::to('Images/miscellaneous.svg')}}" alt="New badge">
                                    </div>
                                </div>
                                @endif

                                @if($users->score>=160)
                                <div class="col-sm-2">
                                    <div class="">
                                        <img class="card-img" style="width:100%; height:auto;" src="{{URL::to('Images/guarantee.png')}}" alt="New badge">
                                    </div>
                                </div>
                                @endif

                                @if($users->score>=160)
                                <div class="col-sm-2">
                                    <div class="">
                                        <img class="card-img" style="width:100%; height:auto;" src="{{URL::to('Images/reward.svg')}}" alt="New badge">
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr>
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12 obj center">
                            <p class="h3">Objectives</p>
                        </div>
                    </div>
                </div>
        <!-- Objectives encoded in php -->
                
                @for($i=1; $i < 13; $i++)
                    <div class="row center">
                        <div class="col-sm-8 offset-sm-2 blockquote obj-card card">
                            <p class="center objectives card-body">
                            <?php $obj = 'obj'.$i ?>
                            @if(($users->$obj))
                                <del>
                            @endif
                                @switch($i)
                                    @case (1)
                                        {{"Plant a Rose"}} 
                                        @break
                                    @case (2)
                                        {{"Plant a Neem tree"}} 
                                        @break
                                    @case (3)
                                        {{"Plant a Banyan tree"}} 
                                        @break
                                    @case (4)
                                        {{"Plant a vegetable plant"}} 
                                        @break
                                    @case (5)
                                        {{"Plant a tree for 3 days Straight"}} 
                                        @break
                                    @case (6)
                                        {{"Water a plant for 7 days Straight"}} 
                                        @break
                                    @case (7)
                                        {{"Study about different types of seeds"}} 
                                        @break
                                    @case (8)
                                        {{"Plant 3 trees consecutively"}} 
                                        @break;
                                    @case (9)
                                        {{"Reduce the use of plastic for more than a month"}} 
                                        @break
                                    @case (10)
                                        {{"Fertilize 4 different trees thrice in a month"}}
                                        @break
                                    @case (11)
                                        {{"Water daily the plants that you have planted for 2 months"}} 
                                        @break
                                    @case (12)
                                        {{"Aware three person about the challenges and give feedback to them"}} 
                                        @break
                                    @default: @break
                                @endswitch
                            @if($users->$obj)
                                </del>
                            @endif
                            </p>
                        </div>
                    </div>
                @endfor
                    


                <!-- ================Profile Edit button================ -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="center">
                            <form action="{{route('profile.edit')}}" method="get">
                                <input type="hidden" name="id" value="{{ $users->user_id }}">
                                <button type="submit" class="btn submit btn-success"> Edit Profile </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection