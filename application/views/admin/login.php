<div class="top-bar justify-content-left fixed-top text-white" style="display:flex; width: 100% ; height: 70px;  background: #081B33;">
                <div class="atas"><div class="image" ></div>    <h3 class="ml-2" style="line-height:70px;"> SMEA-PILKETOS</h3> </div>
            </div>

 
 <div class="container ">
    <form class="justify-content-center" method="POST" action="">
        <h2 class="mb-5 text-center">Login Admin</h2>
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
  </div>
  <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
  </div>
  <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>


    <button class="btn btn-primary mx-auto" type="submit" name="submit" id="submit">Login</button>
    </form>

    
 </div>

<!-- bottom -->

<footer class=" justify-content-center text-center " style="padding: 20px; width:100%; background: #f0f8ff;">
    <div class="footer-container" >
        <div class="social-media">
        <h6 class="text-body mt-4" ><i class="far fa-copyright"></i> Komunitas <span style="color: #2ab7ca ;"> Teknik Informatika </span> </h6>
            <a href="http://facebook.com"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
            <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
        </div>
    </div>
</footer>

 <style>
     body{
         background: #f0f8ff;
     }
     
     input{
         width: 80%;
     }

     form{
         
         margin-top: 200px;
         margin-left: auto;
         margin-right: auto;
         background: #fff;
         width: 600px;
         padding: 40px;
         padding-top: 40px;
         padding-bottom: 50px;
     }

     button{
         
         width: 100%;
         margin-top: 30px;
         padding-top: 30px;
         height: 45px;
     }
     /* navbar */
    .atas{
        margin-right:auto;
        margin-left: auto;
        display: flex;
        }

    .image{
        height: 30px;
        width: 30px;
        background-image: url('<?= base_url(); ?>assets/resources/home/smk.png');
        background-position: center center;
        background-size: cover;
        margin-top: auto;
        margin-bottom: auto;
    
                
            }

        /* bottom */
    footer{
        position: fixed;
        bottom: 0;
            }

     @media only screen and ( max-width : 768px){
         form{
             width: 80%;
         }
         button{
             position: static;
             transform: translate(0,0);
         }

         footer{
             position: static;
             margin-top: 40px;
         }
     }
     
 </style>