<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pro dental</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link
      rel="stylesheet"
      media="screen and (max-width:768px)"
      href="./css/mobile.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/contact.css" />
    <link
      rel="stylesheet"
      media="screen and (min-width: 1100px)"
      href="./css/widescreen.css"
    />
  </head>
  <body id="home">
    <!-- main nav -->
    <nav style="justify-content: space-evenly; width: 100%" id="navbar">
      <h1 class="logo">
        <span class="text-primary"><i class="fas fa-tooth"></i> Pro </span>
        Dental
      </h1>
      <ul style="padding:0; margin:0;">
        <li><a href="./index.php">Эхлэл</a></li>
      </ul>
    </nav>

    <!-- form  -->
    <section id="contact">
      <div class="contact-form bg p-2 ">
        <h2 class="m-heading text-primary text-center">Цаг авах</h2>
          <form id="form" action="#">
          <div class="form-group">
            <label style="font-size: 1.1rem; color:blue"for="name">Регистерийн дугаар</label>
            <input type="text" name="rd" id="rd" placeholder="Регистерийн дугаараа оруулна уу">
          </div>
  
       
          <div class="form-group">
            <label style="font-size: 1.1rem; color:blue" for="msg">Нэрээ оруулна уу</label>
            <input type="text" name="name" id="name" placeholder="Нэрээ дугаараа оруулна уу">
          </div>
           <div class="form-group">
            <label style="font-size: 1.1rem; color:blue" for="msg">Утасны дугаараа оруулна уу</label>
            <input type="number" name="phone" id="phone" placeholder="Утасны дугаараа оруулна уу">
          </div>
          <div class="form-group">
            <label style="font-size: 1.1rem; color:blue" for="uilchilgee">Үйлчилгээ сонгох</label>
            <select name="serve" id="serve" class="form-select form-select-lg mb-3" style="background:#616161; color:#f2f2f2; border-radius:10px;">
            <?php 
            include "./php/config.php";

                $sql =mysqli_query($conn,"SELECT * FROM uilchilgee");
                if(mysqli_num_rows($sql) > 0){
                  while($row = mysqli_fetch_assoc($sql)){
                   echo '<option value="'.$row['Id'].'">'.$row['emchilgee'].'</option>';
                  }
              
               }else{
                 echo "Энэ өдрийн цагууд дүүрсэн байна";
               }
            ?>

          </select> 
          </div>
          <div class="form-group">
            <div
              class=""
            >
            <label style="font-size: 1.1rem; color:blue" for="msg">Цагаа сонгоно уу</label>
              <input
                type="text"
                id="dp1"
                class="datepicker"
                placeholder="Цаг авах өдрөө сонгоно уу"
                name="date"
                readonly
                onchange="tsag()"
              /><span class="fa fa-calendar"></span>
            </div>
          </div>
          <div class="container-fluid px-0 px-sm-0 mx-auto">
            <div class="row justify-content-center mx-0">
              <div class="col-lg-10">
                <div class="card border-0">
      
          <div  id="td1" class="card-body p-3 p-sm-3">
<!-- tsagiin medeelliig ugugdliin sangaas oruulj ireed html bolgon huvirgaad end nemne -->
          </div>
        </div>
      </div>
    </div>
  <!-- button -->
    <div id="error" style="color:blue;"class="form-group text-center"></div>
          <div class="form-group">
            <input id="sub" type="submit" value="Цаг авах" class="btn btn-dark"/>
            </div>  

               
        </form>
    </section>

    <footer id="main-footer" class="bg-dark text-c py-1">
      <div class="container">
        <p>&copy 2021, Pro Dental Бүх эрх хуулиар хамгаалагдав</p>
      </div>
    </footer>
  </body>
  <script src="./js/app.js"></script>
  <script src="./js/date.js"></script>
  <script>

function cl(){
    $(".cell").click(function () {
    $(".cell").removeClass("select");
    $(this).addClass("select");
    });
}</script>
</html>
