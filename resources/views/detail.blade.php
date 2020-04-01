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
                    <a href='/logout'> <button id="session"> Logout </button> </a>
                @else
                    <a href='/signup'> <button id="session"> Login/Signup </button> </a>
                @endif
        </li>
        @if( Session::get('email') )
            <a href="/profile/view">
                <li id="hamburger">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.5094 0H3.49057C1.56278 0 0 1.56278 0 3.49057V33.5094C0 35.4372 1.56278 37 3.49057 37H33.5094C35.4372 37 37 35.4372 37 33.5094V3.49057C37 1.56278 35.4372 0 33.5094 0Z" fill="#80BEA0"/>
                        <path d="M31.4151 30.0189V28.6429C31.4151 28.2568 31.1869 27.9113 30.8421 27.7744C26.7961 26.1653 22.3046 24.1673 21.9271 22.9226V21.6164C22.7664 20.7326 23.4284 19.5004 23.8203 18.0574C24.7615 17.3774 24.9956 15.9756 24.2164 14.9892V12.0655C24.2164 9.04756 22.5833 6.98114 18.8495 6.98114C15.2121 6.98114 13.4806 9.04756 13.4806 12.0655V14.9899C12.7032 15.9749 12.9367 17.376 13.8768 18.0567C14.2685 19.5004 14.931 20.7326 15.7709 21.6164V22.9219C15.3944 24.1659 10.9019 26.1639 6.85603 27.7737C6.51123 27.912 6.28302 28.2568 6.28302 28.6429V30.0189" stroke="white" stroke-width="2"/>
                    </svg>
                </li>
            </a>
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
