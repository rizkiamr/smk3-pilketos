 
    
    <link rel="stylesheet" href="<?= base_url('assets/css/home/index.css');  ?>">
    </head>
        <body style=" color:#fff;">
    

            <div class="top-bar justify-content-left fixed-top text-white" style="display:flex; width: 100% ; height: 70px;  background: #081B33;">
                <div class="atas"><div class="image" ></div>    <h3 class="ml-2" style="line-height:70px;"> Smea-pilketos</h3> </div>
            </div>
            <div class="container  " style="margin-bottom: 50px;">
                <div class="row" >
                    <div class="content text-center" style="margin: auto; position:relative;">
                        
                            <span class="title" style="font-size: 32px; font-weight:bold;">Selamat Datang, di aplikasi Pilketos SMK N 3 Jepara</span>
                            <br>
                            <br>
                            <span class="second" style="font-size: 24px; font-weight:300;"> Silahkan login terlebih dahulu untuk memulai pemilihan</span>

                            <br>
                            <br>
                            <a href=" <?= base_url(); ?>/admin/login" class="btn " style="background: #1955bd; color: #fff;">login admin</a>
                            <a href=" <?= base_url(); ?>/user/login" class="btn user bg-success" style=" color: #fff;">login user</a>
                        
                    </div>

                  

                </div>

            </div>
            
            <footer class=" justify-content-center text-center bg-white" style="padding: 20px; width:100%; ">
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
                    background-image: url('<?= base_url()?>assets/resources/home/bg-image.jpg');
                    background-position: center center;
                    background-size: cover;
                    overflow: scroll ;

                   
                }
                
                .row{
                    margin-top: 250px;
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



                .container{
                    padding: 30px;
                    margin-bottom: 70px;
                    margin-top: 20px;
                }
                .atas{
                  margin-right:auto;
                  margin-left: auto;
                  display: flex;
                }

                footer{
                    position: fixed;
                    bottom: 0;
                }

                .btn{
                   padding: 8px 50px;
                    left: 50%;
                    border-radius: 0;
                    
                }

                .user{
                    margin-left: 20px;
                }

                @media ( max-width: 768px){
                    .content{
                        
                        padding-left: 50px;
                        padding-right: 50px;
                        padding-top: 10px;
                        margin: 30px 50px;
                    }

                    .row{
                        margin-top: 120px;
                    }

                    footer{
                     
                        position: relative !important;
                        margin-top: 100px;
                    }

                    .btn{
                        padding: 8px 60px;
                        width: 250px;
                        margin-top: 20px;
                    }

                    .container{
                        margin-top: 0px;
                    }

                    .user{
                        margin-left: 0;
                    }
             
                }


            </style>
        </body>   





    