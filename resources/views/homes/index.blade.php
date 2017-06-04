<title>Home</title>
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12 col-md-offset-.5">
            <div class="panel panel-default">
                <div class="panel-heading"> Homes </div>
                 <div class="panel-body">
         			<meta name="viewport" content="width=device-width, initial-scale=1">
                
                    <div class="w3-content w3-section" style="max-width:1000px">

                      <img class="mySlides w3-animate-fading" src="{{URL::asset('public/img/images/slide.jpg')}}" width="100%">

                      <img class="mySlides w3-animate-fading" src="{{URL::asset('public/img/images/slide1.jpg')}}" width="100%">

                      <img class="mySlides w3-animate-fading" src="{{URL::asset('public/img/images/slide2.jpg')}}" width="100%">
                    </div>

                    <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                           x[i].style.display = "none";  
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}    
                        x[myIndex-1].style.display = "block";  
                        setTimeout(carousel, 5000);    
                    }
                    </script>
        		</div> 
   				</div>
            </div>
        </div>
    </div>
</div>         
@endsection

@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF  