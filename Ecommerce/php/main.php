<?php

 include 'db_conn.php';
 ob_start();


 if(isset($_POST['info'])){

 $query="SELECT * FROM product WHERE item LIKE '%".$_POST['info']."%' ";

 $result=mysqli_query($con,$query);
 $row=mysqli_num_rows($result);

 if($row>0){

 $store="";

    while($data=mysqli_fetch_array($result)){

 
    $store.="
         
             	<div class='col-lg-4 col-md-6  p-5 wow fadeIn'>
             		<div class='card rounded '>
             			 <div class='view  hovereffect'>
             			 	 <img  src='".$data['image']."' class='img-fluid card-img-top '>
             			 	 <div class='overlay'>
                <h2>Udan e-commerce</h2>
                <p>
                    <a href='#' class=' red-text'>
                        <i class='fas fa-heart'></i>
                    </a>
                    <a href='#' class=' blue-text '>
                       <i class='fas fa-share'></i>
                    </a>
                    <a href='#' class='shopping-cart'>
                        <i class='fas fa-cart-arrow-down'></i>
                    </a>
                   
                 </p>
            </div>
             			 	
             			 </div>
             			 <div class='card-body'>
             			 	  <p class='card-title'>".$data['item']."</p>

             			 	  <div class='row middle-content'>

             			 	  	<div class='col-6'>
             			 	  <p class='card-text card-left-text'>".$data['country']."</p> 
             			       	</div>

             			 	  <div class='col-6'>
             			 	  <p class='card-text card-right-text'>".$data['date']."</p>
             			    	</div>

             			 </div>
             		</div>

             		 <div class='card-footer'>
             		 	<div class='row footer-content'>
             		 		 <div class='col-10 footer-data'>
             		 		 	<p>".$data['shop']."</p>
             		 		 </div>
             		 		  <div class='col-2 text-right'>
             		 		 	<p class='badge badge-warning text-white'>HM</p>
             		 		 </div>
             		 	</div>
             		 </div>
             	</div>
             	
             </div>

    ";
}

  echo $store;


    }

}

 ob_end_flush();

?>