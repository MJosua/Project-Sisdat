<html>
	<head>
		<title> Info Restoran GG</title>
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<?php
	require_once('config.php');

session_start();
if(isset($_SESSION["username"])){
	
}else{
echo header("location:index.php");
 
}

?>
    

<script>
    function submitForm(action)
    {
        document.getElementByClass('login').action = action;
        document.getElementByClass('login').submit();
    }
</script>
	</head>
	
<body style="margin:0;">
	<div class="sidebar">
   		 		
   		 	</div>
		<header id="top-header" >
			<div class="header">
				<h1> <a href="../" class="NamaToko"  > Info Restoran GG </a> </h1>
			</div>
			
			<hr class="line">
		</header>

		  <div id="hot-deal" class="section">		
						
		</div> 	
		
		<div class="button-up">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		</div>
		<aside>
		<div class="menu"><div class="sticky">
			<div class="login">
				<form method="post" action="../DataRM.php">	
				 <h3> User Name : <?php echo " " .$_SESSION['username'] . ""; ?> </h3>
				<button style="margin-left:15;  width:145; margin-bottom:10px;" type="submit" value="Login">Posting <i class='fa fa-pen-square'></i></button>
				</form>
				<form method="post" action="../log_out.php">	
				<a href="../DataRM.php"><button style="margin-left:15; width:145;" >Logout <i class='fa fa-pen-square'></i></button></a>
				</form>
			</div>
			
			<hr class="line">
			<a href="#"><h3>FAQ</h3></a>
			<hr class="line">
			<h2 style="padding-left:15; color: White;"><i style="color: red;" class="fas fa-map-marker-alt"></i> UAS SISDAT</h2>
<h3><p ><font size="4">Yosua Gultom 140810170038<br>Husein Irfan 1408101700</p></font>
			<hr class="lineShading">
			</div>
		</div>
		</aside>
		<hr class="lineShading">
	<div class="container">
	 <h2 class="title"><span>Best Seller</span></h2>
    <div class="row">
        <div class="col-md-8">
            <div class="slider"></div>
            <!--divided column into 6/6-->
            <div class="col-md-6">
                <div class="col-md-4">
						<div class="shop">
							<div class="shop-img">
								<img src="images/107657.jpg" alt="">
							</div>
							
							<div class="product-label">
													<span class="sale">00.00 - 23.59</span>
													<span class="new">WhatsApp</span>
												</div>

							
							<div class="shop-box">
								<h3><strong>Marga Hurip<br><font color="black">085295315974</h3></strong>
								<a href="#Hurip" class="primary-btn cta-btn">Menu <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
                </div>
				
				<div id="Hurip" class="modalBox"><a href="#close">
  <div  >
    <p><img style="margin-left:10%;" src="images/MH.jpg" alt=""></p>
  </div>
</div></a>


                <div class="col-md-4">
                    <div class="shop">
							<div class="shop-img">
								<img src="images/107658.jpg" alt="">
							</div>
							
							<div class="product-label">
													<span class="sale">07.00 - 21.00</span>
													<span class="new">WhatsApp</span>
												</div>

							
							<div class="shop-box">
								<h3><strong>Warung Ceria<br><font color="black"> 081312082672</h3></strong>
								<a href="#Ceria" class="primary-btn cta-btn">Menu <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
                </div>
				
				<div id="Ceria" class="modalBox"><a href="#close">
  <div  >
    <p><img style="margin-left:25%;" src="images/107658.jpg" alt=""></p>
  </div>
</div></a>

				
               <div class="col-md-4">
                    <div class="shop">
							<div class="shop-img">
								<img src="images/107658.jpg" alt="">
							</div>
							
							<div class="product-label">
													<span class="sale">07.00 - 15.00</span>
													<span class="new">WhatsApp</span>
												</div>

							
							<div class="shop-box">
								<h3><strong>Bubur Pak Amir<br><font color="black"> 081312082672</h3></strong>
								<a href="#Amir" class="primary-btn cta-btn">Menu <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
                </div>
				
				<div id="Amir" class="modalBox"><a href="#close">
  <div  >
    <p><img style="margin-left:25%;" src="images/107658.jpg" alt=""></p>
  </div>
</div></a>       
            </div>
            <div class="col-md-6">
               <br>
            </div>
        </div>
        <div class="col-md-4">
           <br>
        </div> <br>
</div><p><br>..................</p>
		<div  class="container">
 <h2 style="paddi1ng-top:15;" class="title"><span>Makanan lain</span></h2>
		
		<?php
        $sql = "SELECT * FROM tb_barang";
        $query = mysqli_query($db, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<div class='shop'>";
			echo "<div class='shop-img'>";
			echo "<img src='../images/".$data['gambar']."'>";
			echo "</div>";
			
			echo "<div class='product-label'>";
			echo "<span class='sale'>".$data['jambuka']."</span>";
			echo "<span class='new'>WhatsApp</span>";
			echo "</div>";
			
			echo "<div class='shop-box'>";
			echo "<h3><strong>".$data['namarm']."<br><font color='black'>".$data['nomorhp']."</h3></strong>";
			echo "<a href='#".$data['idrm']."' class='primary-btn cta-btn'>Menu <i class='fa fa-arrow-circle-right'></i></a>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "<div id='".$data['idrm']."' class='modalBox'><a href='#close'>"	;
			echo "<div>";
			echo "<p><img style='width: 100%; position: center; repeat: no-repeat; object-fit: cover;' src='../images/".$data['gambar']."'></p>";
			echo "</div>";
			echo "</div></a>";
        }
        ?>
		
						
				</div>
			
			</div>
</body>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html>

