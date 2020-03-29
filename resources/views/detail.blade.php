@extends('layout.detail')

@foreach( $content as $key=>$value )
    
    @if( $key == "scientific_name" )
        <?php $_GLOBALS['sci_name'] = $value; ?>
    @endif
    @if( $key == "native_status" )
        <?php $_GLOBALS['native_status'] = $value; ?>
    @endif
    @if( $key == "main_species" )
        <br>
        <!-- $value = (array)$value; -->

        @foreach( $value as $key=>$value )

            @if( $key == "specifications" )
                <!-- $value = (array)$value; -->
                
                @foreach($value as $key=>$value)
                    @if( $key == "toxicity")
                        <?php $_GLOBALS['toxicity'] = $value; ?>
                    @endif
                    @if( $key == "shape_and_orientation")
                        <?php $_GLOBALS['shape_orientation'] = $value; ?>
                    @endif
                    @if( $key == "lifespan")
                        <?php $_GLOBALS['lifespan'] = $value; ?>
                    @endif
                    @if( $key == "growth_rate")
                        <?php $_GLOBALS['growth_rate'] = $value; ?>
                    @endif
                    @if( $key == "growth_period")
                        <?php $_GLOBALS['growth_period'] = $value; ?>
                    @endif
                    @if( $key == "growth_habit")
                        <?php $_GLOBALS['growth_habit'] = $value; ?>
                    @endif
                    @if( $key == "growth_form")
                        <?php $_GLOBALS['growth_form'] = $value; ?>
                    @endif
                @endforeach
                <br>
            @endif

            @if( $key=="family_common_name" )
                <?php $_GLOBALS['family_common'] = $value; ?>
            @endif
            @if( $key=="duration" )
                <?php $_GLOBALS['duration'] = $value; ?>
            @endif
            @if( $key=="common_name" )
                <?php $_GLOBALS['common_name'] = $value; ?>
            @endif   
        @endforeach
        <br>
    @endif
    @if( $key == "images" )
        @if( isset($value[0]) ){
            <?php $_GLOBALS['$url'] = (array)$value[0]; ?>
            <?php $_GLOBALS['img'] = $_GLOBALS['$url']['url']; ?>
        @endif
    @endif
@endforeach

<!-- ############################# MAIN STRUCTURE ################################### -->
<nav>
    <span id="nav-brand">
        <a href="/">Treejective</a>
    </span>
    <ul class="nav-item">
        <li>  
                @if( Session::get('email') )
                    <a href='/destroy'> <button id="session"> Logout </button> </a>
                @else
                    <a href='/test'> <button id="session"> Login/Signup </button> </a>
                @endif
        </li>
        @if( Session::get('email') )
            <li id="hamburger">
                <svg width="50" height="37" viewBox="0 0 50 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.69696 3C18.8384 3 32.9798 3 47.1212 3" stroke="#80BEA0" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.69696 18.2727C18.8384 18.2727 32.9798 18.2727 47.1212 18.2727" stroke="#80BEA0" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 33.5455C10.3535 33.5455 17.7071 33.5455 25.0606 33.5455" stroke="#80BEA0" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
            </li>
        @endif
    </ul>
</nav>
<div class="img-container">
    <div class="image">

        @if(empty($_GLOBALS['img']))
            <h3>Sorry, No image is avalaible at this time..!</h3>"
        @else
            <img src=" <?php echo $_GLOBALS['img'] ?> ">
        @endif
        
    </div>
</div>

<div class="list-content">
    
    <div class="para">
        <p>
            The Family Common Name of &nbsp;
            <b>
                
                @if(empty($_GLOBALS['sci_name']))
                    NA.
                @else
                    <?php echo $_GLOBALS['sci_name']; ?>
                @endif    
                
            </b>
            &nbsp; is &nbsp;
            <b>
            
                @if(empty($_GLOBALS['family_common']))
                    NA.
                @else
                    <?php echo $_GLOBALS['family_common']."."; ?>
                @endif    
                
            </b>
            &nbsp;Its common name is&nbsp; 
            <b>
                
                @if(empty($_GLOBALS['common_name']))
                    NA.
                @else
                    <?php echo $_GLOBALS['common_name']."."; ?>
                @endif    
            
            </b>
            &nbsp;The duration of&nbsp;
            <b>
                
                @if(empty($_GLOBALS['sci_name']))
                    NA.
                @else
                    <?php echo $_GLOBALS['sci_name']; ?>
                @endif    
                
            </b>
            &nbsp;is&nbsp;
            <b>
                
                @if(empty($_GLOBALS['duration']))
                    NA.
                @else
                    <?php echo $_GLOBALS['duration']."."; ?>
                @endif    
                
            </b>
        </p>

<!-- ################################# SPECIFICATIONS ####################################  -->

        <h2>Specifications:</h2>
        <ul>
            <li><b>Native Status</b> : 
                
                @if(empty($_GLOBALS['native_status']))
                    NA.
                @else
                    <?php echo $_GLOBALS['native_status']."."; ?>
                @endif    
                
            </li>
            <li><b>Toxicity</b> : 
                
                @if(empty($_GLOBALS['toxicity']))
                    NA.
                @else
                    <?php echo $_GLOBALS['toxicity']."."; ?>
                @endif    
                
            </li>
            <li><b>Shape and Orientation</b> : 
                
                @if(empty($_GLOBALS['shape_orientation']))
                    NA.
                @else
                    <?php echo $_GLOBALS['shape_orientation']."."; ?>
                @endif    
                
            </li>
            <li><b>Lifespan</b> : 
                
                @if(empty($_GLOBALS['lifespan']))
                    NA.
                @else
                    <?php echo $_GLOBALS['lifespan']."."; ?>
                @endif    
                
            </li>
            <li><b>Growth Rate</b> : 
                
                @if(empty($_GLOBALS['growth_rate']))
                    NA.
                @else
                    <?php echo $_GLOBALS['growth_rate']."."; ?>
                @endif    
                
            </li>
            <li><b>Growth Period</b> : 
                
                @if(empty($_GLOBALS['growth_period']))
                    NA.
                @else
                    <?php echo $_GLOBALS['growth_period']."."; ?>
                @endif    
                
            </li>
            <li><b>Growth Habit</b> : 
                
                @if(empty($_GLOBALS['growth_habit']))
                    NA.
                @else
                    <?php echo $_GLOBALS['growth_habit']."."; ?>
                @endif    
                
            </li>
            <li><b>Growth Form</b> : 
                
                @if(empty($_GLOBALS['growth_form']))
                    NA.
                @else
                    <?php echo $_GLOBALS['growth_form']."."; ?>
                @endif    
                
            </li>
        </ul>
    </div>

</div>
