
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

</form>
                <div class="panel-body">
                   <script type="text/javascript">
                       /* alert('Hello World');
                        document.write('Hello World');
                        var x = 'Hello Bangladesh';
                        var y = 8 ;
                        document.write(x + y + " </br> ")

                        function popup(){
                            alert('Hello World'); } 
                            document.write(z);


                            var x = 12;
                            var y = 10;
                            if (x < y) {
                                alert('These two operand values are equal');
                            } else {
                                alert('These two operand values are not  equal');
                            }
                            

                     function validateForm()
                          {
                          
                             if( document.myForm.fname.value == "" )
                             {
                                alert( "Please provide your name!" );
                                document.myForm.fname.focus() ;
                                return false;
                             }*/

                       /* var x =10;
                        var y =20;
                        if (x >= y){
                            alert('True');
                        } else {
                            alert('False');
                        }*/
                        /*var i = 5;
                        if (i < 3) {
                            document.write('Hi "i" small than 5');
                        } else if (i == 5) {
                            document.write('Hi "i" equal than 5');
                        } else if (i && 4) {
                            document.write('Hi "i" Not equal than 5');
                        } else {
                            document.write('Worng');
                        } 
                        vir i = 0;

                        while( i < 50){

                        if(i % 2 != 0){

                        document.write(i + '<br/>');

                        }

                        i++;

                        }
                        console.log('This here then');
                        var varable = 'hello',
                        number = 10,*/
                   </script>
                   <?php
                        $vararibleNumber1 = True;
                        $vararibleNumber2 = False;
                        if ($vararibleNumber1 === $vararibleNumber2) {
                           echo 'Step Number 1';
                        } else if (!$vararibleNumber1 === $vararibleNumber2) {
                            echo 'Sept Number 2';
                        } else if (!$vararibleNumber1 === !$vararibleNumber2) {
                            echo 'Sept Number 3';
                        } else {
                            echo "Nonting";
                        }
                        echo "</br>";

                        $a = 50 ;
                        if ($a == 50) {
                            echo "1";
                        } else if ($a == 20) {
                            echo "2";
                        } else {
                            echo "Nonting";
                        }

                    ?> 
                    <?php $vararibleNumber = 2 ?>
                    <?php if ($vararibleNumber == 1): ?>
                    <img src="public/img/profile_picture/586df2bea52d5.png">
                    <?php else: ?>
                    <h1>Alomgir</h1>
                <?php endif ?>
               <?php 
                    $testVaribale = 1;
                    $testVaribaleName = (3 == $testVaribale) ? 'Yes' : 'No';
                    $testVaribaleName = (1 == $testVaribale) ? 'Yes' : 'No';
                    echo (1 == $testVaribale ) ? 'Yes' : ('No'); 
                ?>

                <?php 
                $myInformation = "name= alomgir hossen,'<br>' E-mail = alombd.bd@gmail.com";
                $myInformationStatus = 1;
                if ($myInformationStatus == 1) {
                    echo $myInformation;
                } else {
                    echo "No Information";
                }
                ?>
                <?php echo "</br>" ?>

                <?php
                    $varSwitchCase = "red";
                    switch($varSwitchCase) {
                        case "blue":
                         echo "Your Fribatet Color Blue!";
                       
                        case "red":
                        echo "Your Fribatet Color Red";
                       
                        default:
                        echo "Nothing ";
                        default:
                        echo "string";
                    }

                ?>
                <?="<br> <br>" ?>

                <?php 
                    $result = 50;
                    if ( $result >= 100) {
                        echo "This marks Invalite";
                    }
                    else if ($result >= 80) {
                        echo "this subject marks Number A+";
                    } else if ($result >= 70) {
                        echo "This subject marks Number A";
                    } else if ($result >= 60) {
                        echo "This subject marks Number B";
                    } else if ($result >= 50) {
                        echo "This subject marks Number C";
                    } else if ( $result >= 40) {
                        echo "This subject marks Number D";
                    } else if ($result <=33) {
                        echo "Fail";
                    }

                ?>
                <?= "</br>.</br>" ?>
                <?php 
                    
                ?>

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