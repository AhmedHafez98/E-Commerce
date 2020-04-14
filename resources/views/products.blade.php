<!DOCTYPE html>
<html>
<head>
	<title>pro</title>
	<style>
		
       body{
    margin: 0;
    font-family: arial, helvetica, sans-serif;
    font-size: 17px;
    line-height: 17px;
    width: auto;
}
   img {
                border-radius: 5px 5px 5px 5px;
                width: 250px;
                height: 300px;
                }
.center-box{
    margin-bottom: 0 ;
    padding-top: 15px ;
    margin-left: 100px;
}
.center-box .back{
    width: 300px;
	
    float: left;
}


.back-container{
    text-align: center;
}



.center-box .mid{
    width: 300px;
    float: left;
}

.back-container{
    text-align: center;
}
.center-box .mid2{
    width: 300px;
    float: left;
}

.back-container{
    text-align: center;
}

.back-container .desc{
    color: blue;
    font-size: 19px;
    height: 25px;
    margin: 0;
    max-width: 225px;
    padding: 0 0 3px;
}


.center-box .last{
    width: 242px;
    float: left;
}

.back-container{
    text-align: center;
}

.back-container .desc{
    color: #666;
    font-size: 11px;
    height: 25px;
    margin: 0;
    max-width: 225px;
    padding: 0 0 3px;
}
.back-container input[type="button"]{
    width: 150px!important;
    background: #9cd14b!important;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-left: 5px!important;
    padding-right: 5px!important;
}
.last-container1{
    width: 320px;
    height: 545px;
    float: left;
	 padding-top: 15px;
    padding-right: 20px;
    margin-left: 100px;
    margin-top: 10px;
}
.image-text{
    text-align: center;
}
.norm{
    color: #ad59b9;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 16px;
    margin: 0px;
    margin-top: 7px;
    padding: 0px;
    font-weight: bold;
}


.last-container2{
    width: 320px;
    height: 545px;
    float: left;
	 padding-top: 15px;
    padding-right: 20px;
    margin-left: 70px;
    margin-top: 10px;
}
.image-text{
    text-align: center;
}
.norm{
    color: #ad59b9;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 16px;
    margin: 0px;
    margin-top: 7px;
    padding: 0px;
    font-weight: bold;
}


.last-container3{
    width: 320px;
    height: 545px;
    float: left;
	 padding-top: 15px;
    padding-right: 13px;
    margin-left: 80px;
    margin-top: 10px;
}
.image-text{
    text-align: center;
}
.norm{
    color: #ad59b9;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 16px;
    margin: 0px;
    margin-top: 7px;
    padding: 0px;
    font-weight: bold;
}
 input[type="button"]{
    width: 150px!important;
    background: red;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-left: 5px!important;
    padding-right: 5px!important;
}

	</style>
</head>
<body>
 <div class="center-box">
            <div class="back">
               <img src = {{ asset ('pro.jpg')}} >
                   
                
                <div class="back-container">
                    <h6> Product_Name</h6>
                    
                    <div class="desc">the Mount of product: 13 pieces</div>
                    <p class="norm"> <span style="color:blue;font-size:16px; font-weight:normal"> the prise : </span> $26 </p>
                    <br>
                    <input type="button" value="Order Now">
                   <br>
                    
                </div>
            </div>
            
            <div class="mid">
               <img src = {{ asset ('pro2.jpg')}} >
                    
               
                
                <div class="back-container">
                   <h6> Product_Name</h6>
                   
                    <div class="desc">the Mount of product: 13 pieces</div>
                    <p class="norm"> <span style="color:blue;font-size:16px; font-weight:normal"> the prise : </span> $26 </p>
                     <br>
                    <input type="button" value="Order Now">
                    <br>
                    
                </div>
            </div>
            <div class="mid2">
                <img src = {{ asset ('pro.jpg')}} >
                    
                
                
                <div class="back-container">
                    <h6> Product_Name</h6>
                   
                    <div class="desc">the Mount of product: 13 pieces</div>
                    <p class="norm"> <span style="color:blue;font-size:16px; font-weight:normal"> the prise :  </span> $26 </p>
                     <br>
					<input type="button" value="Order Now">
                    <br>
                    
                </div>
            </div>
            
            <div class="last">
                <img src = {{ asset ('pro.jpg')}} > 
                    
                </a>
                
                <div class="back-container">
                   <h6> Product_Name</h6>
                   
                    <div class="desc">the Mount of product: 13 pieces</div>
					 <br>
                    <p class="norm"> <span style="color:blue;font-size:16px; font-weight:normal"> the prise : </span> $26 </p>
                     
					<input type="button" value="Order Now">
                     <br>
                </div>
            </div>
        </div>
		<br>
        
        <div class="last-container1">
            <img src = {{ asset ('pro2.jpg')}} >
            <div class="image-text">
                
                <br>
                <h6> Product_Name</h6>
                    <br>
                    <div class="desc">the Mount of product: 13 pieces</div>
                    <p class="norm"> <span style="color:#B3B1B1;font-size:16px; font-weight:normal"> the prise :  </span> $26 </p>
                <br>
                <input type="button" value="Order Now">
            </div>
        </div>
        
        <div class="last-container2">
            <img src = {{ asset ('pro.jpg')}} >
            <div class="image-text">
                
                <br>
                <h6> Product_Name</h6>
                    <br>
                    <div class="desc">the Mount of product: 13 pieces</div>
                    <p class="norm"> <span style="color:#B3B1B1;font-size:16px; font-weight:normal"> the prise : </span> $26 </p>
                <br>
                <input type="button" value="Order Now">
            </div>
        </div>
        
        <div class="last-container3">
            <img src = {{ asset ('pro.jpg')}} >
            <div class="image-text">
                
                <br>
                <h6> Product_Name</h6>
                   
                    <div class="desc">the Mount of product: 13 pieces</div>
					<br>
                    <p class="norm"> <span style="color:#B3B1B1;font-size:16px; font-weight:normal"> the prise : </span> $26 </p>
                <br>
                <input type="button" value="Order Now">
            </div>
        </div>

</body>
</html>