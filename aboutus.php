<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

		 <style>
			*{
    top :30%;
    padding: 0%;
    margin: 0%;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    box-sizing: border-box;

}
#about{
    top:30%
    width: 50%;
    height: 100vh;
    padding: 30px;
    margin: 25px;
}
.info{
    top:40%;
    font-weight: bold;
    text-align: center;

}
.info h1{
    font-weight: bold;
    font-size: 60px;
    text-align: center;
    
}
.info p{
    padding: 15px;
    padding-top:20px;
    font-size: 50px;
    color: rgb(240,138,92);

}
.about-row{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
.left-col{
    flex-basis: 50%;
}
.left-col img{
    width: 100%;
    padding: 20px; ;
}
.right-col{
    flex-basis: 50%;

}
.right-col p{
    padding: 20px;
    font-size: 20px;
    text-align: justify;

}
.right-col span{
    color: rgb(240,138,92);
}



.containers{
    text-align: center;
    background: #f5f5f5;
}

.header{
    padding-top: 60px;
    color: #444;
    font-size: 20px;
    margin: auto;
    line-height: 50px;
}
.sub-container{
    max-width: 1200px;
    margin: auto;
    padding: 48px 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;

}

.services{
    margin: 10px;
    padding: 22px;
    max-width: 30%;
    cursor: pointer;
    transition: 0.4s;
    box-sizing: border-box;
}

.team{
    margin: 10px;
    padding: 22px;
    max-width: 30%;
    cursor: pointer;
    transition: 0.4s;
    box-sizing: border-box;

}
.info h3{
    font-weight:bold;
    font-size: 50px;
    text-align: center;
    left:50%;
    

}
/*teams:hover{
    background: #ddd;

}*/

.teams img{
    width: 50px;
    height: 100px;
}
.name{
    padding: 12px;
    font-weight: bold;
    font-size: 16px;
    text-transform: uppercase;

}





/* For devices with a maximum width of 768px */
@media only screen and (max-width: 768px) {
    /* Adjust the font size of the heading */
    h1 {
      font-size: 24px;
    }
  
    /* Adjust the size of the image */
    img {
      width: 100%;
    }
  
    /* Make the about and services sections stack vertically */
    .about-row {
      display: flex;
      flex-direction: column;
    }
  
    /* Adjust the font size of the team member names */
    .name {
      font-size: 18px;
    }
  }
  
  /* CSS for screens larger than 768px */
  @media only screen and (min-width: 769px) {
    /* Set a max-width for the main container */
    .containers{
      max-width: 1200px;
      margin: 0 auto;
    }
  
    /* Adjust the padding of the main container */
    .containers {
      padding: 50px;
    }
  
    /* Adjust the font size of the heading */
    h1 {
      font-size: 36px;
    }
  
    /* Adjust the size of the image */
    img {
      width: 50%;
      float: left;
      margin-right: 20px;
    }
  
    /* Make the about and services sections side by side */
    .about-row {
      display: flex;
    }
  
    /* Adjust the font size of the team member names */
    .name {
      font-size: 24px;
    }
  }
			</style>

    <div class = container>
        <container id="about">
            <div class="info"> 
                <h1>About Us</h1>
                <p>Huddersfax Pantry</p>
            </div>
            <div class ="about-row">
                <div class="left_col">
                    <img src="misc/img/market1.jpg"style="width: 300px;">
                </div>
                <div class="right-col">
                    <h1><br>Lorem<span>Lorem</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum natus harum corrupti iste dolorem iure eligendi similique quidem, dolorum debitis obcaecati eius eaque, deleniti omnis praesentium illum consectetur nesciunt culpa!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque, necessitatibus aliquid! Rerum, enim, sapiente quia omnis quod a voluptatem architecto, non iste voluptatibus tenetur? Harum, dicta id! Nobis, atque sint?
                    </p>
                </div>
            </div>    
        </container>
        <div class="containers">
            <div class="header">
            <h2>Our Services</h2> </div>
            <div class="sub-container">
                <div class="services"><br>
                    <img src="misc/img/digital.jpg"style="width: 230px;" alt="">
                    <div class="name">Digital Services</div>
                    <div class="about">As digital services one of the most important thing for a website market</div>
                </div>
            
            
            <div class="services">
              <img src="misc/img/onlineservices.jpg"style="width: 200px;" alt ="">
              <div class="name">Online Services</div>
              <div class="about">As Online services is also one of the most important thing for a website market</div>
            </div>

            <div class="services">
                <img src="misc/img/24hrs_services.jpg"style="width: 200px;" alt ="">
                <div class="name"> 24hrs Services</div>
                <div class="about">As 24 hrs Services is also one of the most important thing for a website market</div>
        </div>  </div>
        </div>

        <div class="containers">
            <div class="header">
             <h2>Our Team</h2></div>
             <div class="sub-container">
             <div class ="team"><br>
                <img src="misc/img/coordinator.jpg"style="width: 250px;"alt ="">
            <div class="name">Mandy Crawford</div>
            <div class="desig">coordinator</div>
            <div class="about">Has been contracting commercial construction projects since 1985</div>
            
             </div>
             <div class ="team">
                <img src="misc/img/Implementer.jpg"style="width: 250px;"alt ="">
            <div class="name">Keith Long</div>
            <div class="desig">Implementer</div>
            <div class="about">Has been contracting commercial construction projects since 1985</div>
            
            
             </div>
             <div class ="team">
                <img src="misc/img/teamworker.jpg"style="width: 250px;"alt ="">
            <div class="name">James Peluso</div>
            <div class="desig">Team Worker</div>
            <div class="about">Has been contracting commercial construction projects since 1985</div>
            
             </div>
             <div class ="team">
                <img src="misc/img/plant.jpg"alt =""style="width: 250px;">
            <div class="name">Shawn Carignan</div>
            <div class="desig">plant</div>
            <div class="about">Has been contracting commercial construction projects since 1985</div>
            
             </div>
             
             <div class ="team">
                <img src="misc/img/specialist.jpg"style="width: 250px;"alt ="">
            <div class="name">Dennis Atkinson</div>
            <div class="desig">specialist</div>
            <div class="about">Has been contracting commercial construction projects  since 1985</div>
            
           
             </div>
             <div class ="team">
                <img src="misc/img/Complete Finisher.jpg"style="width: 280px;" alt ="">
            <div class="name"><br> Peluso</div>
            <div class="desig">Complete Finisher</div>
            <div class="about">Has been contracting commercial construction projects since 1985</div>
            
           
             </div>
        </div>
    </div>
        
   


<?php include 'includes/footer.php'; ?>