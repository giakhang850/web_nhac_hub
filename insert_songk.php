<?php 
  include('../includes/connect.php');
  
  if(isset($_POST['insert_song_input'])) {
    $name_song = $_POST['name_song'];
    $artists_names = $_POST['artists_names'];
    $performer = $_POST['performer'];
    $url_song = $_POST['url_song'];
    $anh1 = $_FILES['anh1']['name'];
    $anh1_tmp = $_FILES['anh1']['tmp_name'];
    if(!($name_song == "" && $artists_names == "" && $url_song == "" && $performer == "" && $anh1 == "")) {
      move_uploaded_file($anh1_tmp,"./upload/$anh1");
      // insert query
      $insert_song = "insert into `song` (name_song, artists_names, performer, url_song,image1,date) values ('$name_song','$artists_names','$performer','$url_song','$anh1',NOW())";
      $result_query = mysqli_query($conn,$insert_song );
      if($result_query) {
        echo "<script>alert('them bai hat thanh cong')</script>";
      }
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="khang.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../assets/css/style-prefix.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>insert product</title>
  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <!-- css bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="header-main">

<div class="container1">
  
    <!--<a href="#" class="header-logo">
      <img src="../assets/images/logo/logo.svg" alt="Anon's logo" width="120" height="36">
    </a>-->

    <!-- <div class="header-search-container">

      <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

      <button class="search-btn">
        <ion-icon name="search-outline"></ion-icon>
      </button>

    </div> -->
    

    
    <ul class="navbar-nav1"> 
      <li class="nav-item">
        <a href="#" class="nav-link1">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
      </li>
      <li class="nav-item-hello">
        <a href="#" class="nav-link">
          <span class="text-split">Xin chào, admin!</span>
          <!-- <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon> 
        </button> -->
        </a>
      </li>
    
      
      

      <!-- <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>
        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>
        <span class="count">0</span>
      </button> -->
</div>
<div class="header-search-container">
    <form action="timkiem.php" method="post" >
      <input type="search" name ="search-song" style="width:70%">
      <input type="submit"name="search" value="Tìm kiếm">

    </form>
  </div>
<ul class="right-nav">
    <li class="nav-item">
      <a target="blank" href="http://localhost/zingmp3-with-php/" class="li-a"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
    </li>
    <li class="nav-item">
      <a href="#" target="_blank" rel="noopener noreferrer" class="li-a">
        <i class="fa fa-cogs" aria-hidden="true"></i>
      </a>
    </li>
    <li class="nav-item">
      
        <a class="log-out1"><i class="fa fa-sign-out"    aria-hidden="true"></i>
        
       
    </li>
</ul>
  
</div>




<!-- <div class="mobile-bottom-navigation">

<button class="action-btn" data-mobile-menu-open-btn>
  <ion-icon name="menu-outline"></ion-icon>
</button>

<button class="action-btn">
  <ion-icon name="bag-handle-outline"></ion-icon>

  <span class="count">0</span>
</button>

<button class="action-btn">
  <ion-icon name="home-outline"></ion-icon>
</button>

<button class="action-btn">
  <ion-icon name="heart-outline"></ion-icon>

  <span class="count">0</span>
</button>

<button class="action-btn" data-mobile-menu-open-btn>
  <ion-icon name="grid-outline"></ion-icon>
</button>

</div>

<nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

<div class="menu-top">
  <h2 class="menu-title">Menu</h2>

  <button class="menu-close-btn" data-mobile-menu-close-btn>
    <ion-icon name="close-outline"></ion-icon>
  </button>
</div>

<ul class="mobile-menu-category-list">

  <li class="menu-category">
    <a href="#" class="menu-title">Home</a>
  </li>

  <li class="menu-category">

    <button class="accordion-menu" data-accordion-btn>
      <p class="menu-title">Men's</p>

      <div>
        <ion-icon name="add-outline" class="add-icon"></ion-icon>
        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
      </div>
    </button>

    <ul class="submenu-category-list" data-accordion>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Shirt</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Shorts & Jeans</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Safety Shoes</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Wallet</a>
      </li>

    </ul>

  </li>

  <li class="menu-category">

    <button class="accordion-menu" data-accordion-btn>
      <p class="menu-title">Women's</p>

      <div>
        <ion-icon name="add-outline" class="add-icon"></ion-icon>
        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
      </div>
    </button>

    <ul class="submenu-category-list" data-accordion>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Dress & Frock</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Earrings</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Necklace</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Makeup Kit</a>
      </li>

    </ul>

  </li>

  <li class="menu-category">

    <button class="accordion-menu" data-accordion-btn>
      <p class="menu-title">Jewelry</p>

      <div>
        <ion-icon name="add-outline" class="add-icon"></ion-icon>
        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
      </div>
    </button>

    <ul class="submenu-category-list" data-accordion>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Earrings</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Couple Rings</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Necklace</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Bracelets</a>
      </li>

    </ul>

  </li>

  <li class="menu-category">

    <button class="accordion-menu" data-accordion-btn>
      <p class="menu-title">Perfume</p>

      <div>
        <ion-icon name="add-outline" class="add-icon"></ion-icon>
        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
      </div>
    </button>

    <ul class="submenu-category-list" data-accordion>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Clothes Perfume</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Deodorant</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Flower Fragrance</a>
      </li>

      <li class="submenu-category">
        <a href="#" class="submenu-title">Air Freshener</a>
      </li>

    </ul>

  </li>

  <li class="menu-category">
    <a href="#" class="menu-title">Blog</a>
  </li>

  <li class="menu-category">
    <a href="#" class="menu-title">Hot Offers</a>
  </li>

</ul>

<div class="menu-bottom">

  <ul class="menu-category-list">

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Language</p>

        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title">English</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Espa&ntilde;ol</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Fren&ccedil;h</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">
      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Currency</p>
        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
      </button>

      <ul class="submenu-category-list" data-accordion>
        <li class="submenu-category">
          <a href="#" class="submenu-title">USD &dollar;</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">EUR &euro;</a>
        </li>
      </ul>
    </li>

  </ul>

  <ul class="menu-social-container">

    <li>
      <a href="#" class="social-link">
        <ion-icon name="logo-facebook"></ion-icon>
      </a>
    </li>

    <li>
      <a href="#" class="social-link">
        <ion-icon name="logo-twitter"></ion-icon>
      </a>
    </li>

    <li>
      <a href="#" class="social-link">
        <ion-icon name="logo-instagram"></ion-icon>
      </a>
    </li>

    <li>
      <a href="#" class="social-link">
        <ion-icon name="logo-linkedin"></ion-icon>
      </a>
    </li>

  </ul>

</div>

</nav> -->

</header>
<!-- end header -->


<aside class="main-sidebar">

<a  class="brand-link" href="#">
  <img src="../assets/images/newsletter.png" alt="" width="100" height="100">
</a>
<div class="sidebar">
  <nav class="sidebar-content">
    <ul class="pills-nav-sidebar">
      <li class="active">
        <a href="insert_song.php" class="active-a">Thêm bài hát</a>
      </li>
      <li class="active">
        <a href="show_list_song.php" class="active-a">Xem danh sách bài hát</a>
      </li>
      
    </ul>
    
    <!-- <button class="btn"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Thêm loại hàng</a></button>
    <button class="btn"><a href="#" class="nav-link text-light bg-info my-1">Xem loại hàng</a></button>
    <button class="btn"><a hresf="index.php?insert_brand" class="nav-link text-light bg-info my-1">Thêm thương hiệu</a></button>
    <button class="btn"><a href="#" class="nav-link text-light bg-info my-1">Xem thương hiệu</a></button>
    <button class="btn"><a href="#" class="nav-link text-light bg-info my-1">Tất cả orders</a></button>
    <button class="btn"><a href="#" class="nav-link text-light bg-info my-1">Tất cả thanh toán</a></button>
    <button class="btn"><a href="#" class="nav-link text-light bg-info my-1">Danh sách người dùng</a></button>
    <button class="btn"><a href="#" class="nav-link text-light bg-info my-1">Đăng xuất</a></button> -->
  </nav>
</div>
</aside>

<div class="container">
<?php 
if(isset($_GET['insert_category'])) {
  include('insert_category.php');
}
 if(isset($_GET['insert_brand'])) {
  include('insert_brand.php');
}
?>
</div>
<div class="content-wrapper" > 
<!-- <section class="content-mb">
<div class="container-fluid">
  <h5>Dashboard</h5>
  <div class="dashboard-main-content">
    <div class="dashboard-child">
      <a href="#" class="info" title="Cấu hình website">
        <span class="info-pic" style="background-color:#007bff">
          <i class="fa fa-cogs" style="font-size:30px" aria-hidden="true"></i>

        </span>
        <div class="info-box-content">
          <span class="info-box-text">
            Cấu hình website
          </span>
          <span class="info-box-number">
            View more
          </span>
         </div>
      </a>
    </div>
    <div class="dashboard-child">
      <a href="#" class="info" title="Cấu hình website">
        <span class="info-pic" style="background-color:red">
        <i class="fa fa-user" style="font-size:40px" aria-hidden="true"></i>
        

        </span>
        <div class="info-box-content">
          <span class="info-box-text">
            Tài khoản
          </span>
          <span class="info-box-number">
            View more
          </span>
         </div>
      </a>
    </div><div class="dashboard-child">
      <a href="#" class="info" title="Cấu hình website">
        <span class="info-pic" style="background-color:green">
        <i class="fa fa-key" style="font-size:40px" aria-hidden="true"></i>


        </span>
        <div class="info-box-content">
          <span class="info-box-text">
            Đổi mật khẩu
          </span>
          <span class="info-box-number">
            View more
          </span>
         </div>
      </a>
    </div><div class="dashboard-child">
      <a href="#" class="info" title="Cấu hình website">
        <span class="info-pic" style="background-color:teal">
        <i class="fa fa-envelope" aria-hidden="true" style="font-size:40px"></i>


        </span>
        <div class="info-box-content">
          <span class="info-box-text">
            Thư liên hệ
          </span>
          <span class="info-box-number">
            View more
          </span>
         </div>
      </a>
    </div>
  </div>
</div>
</section> -->
</div> 








<div class="container-insert">
    <h1>Thêm bài hát</h1>
    <form action="insert_song.php" method="post" enctype="multipart/form-data">
     <div class="insert-content">
       <label for="">Tên bài hát</label>
       <input type="text" name="name_song" id="" class="form-control" placeholder="" aria-describedby="helpId" style="width:50%;">

        <label for="">Tên nhạc sĩ</label>
       <input type="text" name="artists_names" id="" class="form-control" placeholder="" aria-describedby="helpId" style="width:50%;">

       <label for="">Trình bày</label>
       <input type="text" name="performer" id="" class="form-control" placeholder="" aria-describedby="helpId" style="width:50%;">

       

       <label for="">Link nhạc</label>
       <textarea type="text" name="url_song" id="" class="form-control" placeholder="" aria-describedby="helpId" style="width:50%;"></textarea>
       <input type="submit" value="Xác nhận" class="submit">
       


       <!-- <div class="form-group">
         <label for="">Loại hàng</label>
         
         <select class="form-control" name="product_categories" id="">
          
           <option value="">select a category</option>
            <?php 
         $select_query = "select * from `categories`";
          $result_query = mysqli_query($conn, $select_query);
        while($row_data = mysqli_fetch_assoc($result_query)) {
                $cate_title = $row_data['cate_name'];
                $cate_id = $row_data['id'];
                echo "<option value='$cate_id'>$cate_title</option>";
                
              }
         ?> 
           
         </select>
       </div> -->
        <!-- <div class="form-group">
         <label for="">Chọn thương hiệu</label>
         <select class="form-control" name="product_brand" id="">
           <option value="">select a brand</option>
            <?php 
         $select_query = "select * from `brand`";
          $result_query = mysqli_query($conn, $select_query);
        while($row_data = mysqli_fetch_assoc($result_query)) {
                $cate_title = $row_data['title_brand'];
                $cate_id = $row_data['id'];
                echo "<option value='$cate_id'>$cate_title</option>";
                
              }
         ?>
           
         </select>
       </div> -->

       <!-- ảnh  -->

       <div class="form-group">
         <label for="">Ảnh 1</label>
         <input type="file" class="form-control-file" name="anh1" id="" placeholder="" aria-describedby="fileHelpId">
       </div>
        <!-- <div class="form-group">
         <label for="">Ảnh 2 sản phẩm</label>
         <input type="file" class="form-control-file" name="anh2" id="" placeholder="" aria-describedby="fileHelpId">
         <small id="fileHelpId" class="form-text text-muted">Help text</small>
       </div>
        <div class="form-group">
         <label for="">Ảnh 3 sản phẩm</label>
         <input type="file" class="form-control-file" name="anh3" id="" placeholder="" aria-describedby="fileHelpId">
         <small id="fileHelpId" class="form-text text-muted">Help text</small>
       </div> -->
     </div>
     <!-- <input type="submit" value="gửi"> -->
     <input name="insert_song_input" id="" class="btn btn-primary" type="submit" value="gửi lên">
    </form>
  </div>
  <!-- js bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
