<?php 
include("db_config/connect.php");
session_start();


if(isset($_POST["submit"])){
    $productname = $_POST["name"];
    $price = $_POST["price"];
  
  
    //For uploads photos
    $upload_dir = "uploads/"; //this is where the uploaded photo stored
    $product_image = $upload_dir.$_FILES["imageUpload"]["name"];
    $upload_dir.$_FILES["imageUpload"]["name"];
    $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
    $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
    $check = $_FILES["imageUpload"]["size"]; // to detect the size of the image
    $upload_ok = 0;
  
    if(file_exists($upload_file)){
        echo "<script>alert('The file already exist')</script>";
        $upload_ok = 0;
    }else{
        $upload_ok = 1;
        if($check !== false){
          $upload_ok = 1;
          if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
              $upload_ok = 1;
          }else{
              echo '<script>alert("please change the image format")</script>';
          }
        }else{
            echo '<script>alert("The photo size is 0 please change the photo ")</script>';
            $upload_ok = 0;
        }
    }
  
    if($upload_ok == 0){
       echo '<script>alert("sorry your file is doesn\'t uploaded. Please try again")</script>';
    }else{
        if($productname != "" && $price !=""){
            move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);
  
            $sql = "INSERT INTO products(name,price,image)
            VALUES('$productname',$price,'$product_image')";
  
            if($con->query($sql) === TRUE){
                echo "<script>alert('your product uploaded successfully')</script>";
            }
        }
    }
  
  
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add to shop</title>
    <link rel="stylesheet" href="upload.css">
    <link href=
'https://fonts.googleapis.com/css?family=Sofia' 
          rel='stylesheet' />
<link rel="stylesheet" type="text/css" href="./css/about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php require "adminheader.php";?>
<section id="upload_container">
        <form action="upload.php" method="POST" enctype="multipart/form-data" >
            <input type="text" name="name" id="productname" placeholder="Product Name" required>
            <input type="number" name="price" id="price" placeholder="Product Price" required>
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">Choose Image</button>
            <input type="submit" value="Upload" name="submit">
        </form>
    </section>

    <script>
        var productname = document.getElementById("name");
        var price = document.getElementById("price");
        var choose = document.getElementById("choose");
        var uploadImage = document.getElementById("imageUpload");

        function upload(){
            uploadImage.click();
        }

        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            if(productname.value == ""){
                productname.value = file.name;
            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
</div>
   
    <posts>
					<?php 
						$query = "SELECT * from products";

						$result = mysqli_query($con,$query);
					?>

					<?php if(mysqli_num_rows($result) > 0):?>
                        <div style="background-color:white;display: flex;flex-wrap:wrap;">
						<?php while ($row = mysqli_fetch_assoc($result)):?>
							<div style="background-color:white;display: flex;border-radius: 10px;margin: 10px;">
								<div style="background-color:white;display: flex;border:solid 3px #583672;border-radius:20px;padding:5px;">
									<img src="<?=$row['image']?>" style="border-radius:5%;margin:30px;width:160px;height:280px;object-fit: cover;">
									<br>
                                    <div style="margin-top:90px;color:#583672;text-transform: capitalize;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
									<?=$row['name']?><br>
                                    <?=$row['price']?><br>
                            
									<a href="editdelete.php?action=editpost&id=<?= $row['id']?>" style="text-decoration: none;">
											<button class="submit" >Edit</button>
									</a>

									<a href="editdelete.php?action=deletepost&id=<?= $row['id']?>"  style="text-decoration: none;">
											<button class="submit" >Delete</button>
									</a>
										<br>
                                </div> 
                                </div> 
								</div>
								
							
						<?php endwhile;?>
					<?php endif;?>
				</posts>   
 



</body>
</html>