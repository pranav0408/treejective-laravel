@extends('layouts.master')
@section('content')  
      
<h1 class="PI center">Update Profile Information</h1> 

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card profile-box">
            <div class="card-body">
                <form method="post" action="{{route('profile.update')}}">   
                    {{ csrf_field() }}
                    @csrf
                    <small class="form-text text-muted">We'll never share your details with anyone else.</small>
                    <br>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 offset-sm-2 col-form-label">Name:</label><br> 
                        <div class="col-sm-6">
                            <input type="text" id="fullname" class="form-control" name="fullname" value="{{$users->full_name}}" />
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 offset-sm-2 col-form-label">Username:</label><br> 
                        <div class="col-sm-6">
                            <input type="text" id="username" class="form-control" name="username" value="{{$users->username}}" />
                        </div>
                    </div>       
                    <div class="form-group row"> 
                        <label class="col-sm-2 offset-sm-2 col-form-label" for="age">Age:</label><br>
                        <div class="col-sm-6">
                            <input type="text" id="age" class="form-control" name="age" value="{{$users->age}}" /><br> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 offset-sm-2 col-form-label" >Gender:</label><br> 
                        <div class="col-md-6">
                            <select name="gender" class="custom-select" id="gender">
                                <option selected value="{{$users->gender}}">
                                    {{$users->gender}}
                                (Current Stat)</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 offset-sm-2 col-form-label" >Address:</label><br>          
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="address" value="{{$users->address}}" /><br><br>  
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj1" class="form-control text-center " >Plant a Rose</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj1" class="custom-select" id="obj1">
                                    <option selected value="{{$users->obj1}}">
                                    @if($users->obj1)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj2" class="form-control text-center " >Plant a Neem tree</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj2" class="custom-select" id="obj2">
                                    <option selected value="{{$users->obj2}}">
                                    @if($users->obj2)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj3" class="form-control text-center " >Plant a Banyan tree</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj3" class="custom-select" id="obj3">
                                    <option selected value="{{$users->obj3}}">
                                    @if($users->obj3)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj4" class="form-control text-center " >Plant a vegetable plant</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj4" class="custom-select" id="obj4">
                                    <option selected value="{{$users->obj4}}">
                                    @if($users->obj4)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj5" class="form-control text-center " >Plant a tree for 3 days Straight</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj5" class="custom-select" id="obj5">
                                    <option selected value="{{$users->obj5}}">
                                    @if($users->obj5)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj6" class="form-control text-center " >Water a plant for 7 days Straight</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj6" class="custom-select" id="obj6">
                                    <option selected value="{{$users->obj6}}">
                                    @if($users->obj6)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj1" class="form-control text-center " >Study about different types of seeds</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj7" class="custom-select" id="obj7">
                                    <option selected value="{{$users->obj7}}">
                                    @if($users->obj7)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj8" class="form-control text-center " >Plant 3 trees consecutively</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj8" class="custom-select" id="obj8">
                                    <option selected value="{{$users->obj8}}">
                                    @if($users->obj8)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj9" class="form-control text-center " >Reduce the use of plastic for more than a month</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj9" class="custom-select" id="obj9">
                                    <option selected value="{{$users->obj9}}">
                                    @if($users->obj9)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj10" class="form-control text-center " >Fertilize 4 different trees thrice in a month</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj10" class="custom-select" id="obj10">
                                    <option selected value="{{$users->obj10}}">
                                    @if($users->obj10)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj11" class="form-control text-center " >Water daily the plants that you have planted for 2 months</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj11" class="custom-select" id="obj11">
                                    <option selected value="{{$users->obj11}}">
                                    @if($users->obj11)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  card container-fluid">
                        <div class="row card-body">
                            <div class="col-sm-8 center">
                                <p for="obj12" class="form-control text-center " >Aware three person about the challenges and give feedback to them</p>
                            </div>    
                            <div class="col-sm-4 center">
                                <select name="obj12" class="custom-select" id="obj12">
                                    <option selected value="{{$users->obj12}}">
                                    @if($users->obj12)
                                        Done
                                    @else
                                        To be Done 
                                    @endif
                                    (Current Stat)</option>
                                    <option value="0">To be done</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 center">
                            <input type="hidden" name="id" value="{{ $users->user_id }}">
                            <input type="submit" class="btn btn-primary" name="update_profile" value="Update Profile" />
                        </div>
                    </div>
                            
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection