@extends('master')

@section('title', 'Details')

@section('content')
<div class="container-fluid">
                
                <h1>{{$animal->latin}}</h1>
       
                <h2>{{$animal->species}}</h2>
                <br>
      		</div>
  		</div>
      	
        <!-- Banner -->
        <div class="image-container" style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0 auto">
            <img src="{{asset(path:$animal->image)}}" alt="Centered Image">
        </div>
        <!-- /Banner -->
        
        <!--Content row-->	  
        <div class="row">  
    		<!--Body content-->	
           <div class="col-xs-12 col-sm-8 col-lg-8">               
           
            <div class="tabbable"> <!-- Only required for left/right tabs -->
  			<ul class="nav nav-tabs">
                <!-- Language button -->
               <!-- <li class="language"><button type="button" id="btn-language" class="btn btn-info btn-sm">Español</button></li>-->
  			</ul>
  			<div class="tab-content">
            	<!-- Share tab content -->
    			
                <!-- Download tab content -->
    			<div class="tab-pane" id="download">
                <p>English</p>
      				<p>
                    	<a class="btn btn-info btn-sm" href="/methane-seepsofthe-deepocean/1407_methane_seeps-lg.mp4" download="/methane-seepsofthe-deepocean/1407_methane_seeps-lg.mp4"><i class="icon-arrow-down"></i>1280 x 720 (96 MB)</a>
      					<a class="btn btn-info btn-sm" href="/methane-seepsofthe-deepocean/1407_methane_seeps-sm.mp4" download="/methane-seepsofthe-deepocean/1407_methane_seeps-sm.mp4"><i class="icon-arrow-down"></i>640 x 360 (32 MB)</a>
                    </p>
               <!-- <p>Español</p>
      				<p>
                    	<a class="btn btn-info btn-sm" href="otkn_304_hurricanehunters_lg_es.mp4" download="otkn_304_hurricanehunters_lg_es.mp4" ><i class="icon-arrow-down"></i>1280 x 720 (100.4 MB)</a>
      					<a class="btn btn-info btn-sm" href="otkn_304_hurricanehunters_sm_es.mp4" download="otkn_304_hurricanehunters_sm_es.mp4" ><i class="icon-arrow-down"></i>640 x 360 (26.7 MB)</a>
                    </p> -->
    			</div>
                <!-- Embed tab content -->
               
                <!-- Links tab -->
                    
                        			
                </div>
  			</div><!-- /tab-content -->
		</div><!-- /tabbable -->
        
        <hr>
          
          <div id="transcript" style="margin: 0 auto; width: 80%;">
        	<!-- English transcript -->
            <div id="eng">
            	<h2>{{$animal->latin}}</h2>
                
                <p>{{$animal->content}}</p>

           <br><br>
            </div>
              
            
            

@endsection