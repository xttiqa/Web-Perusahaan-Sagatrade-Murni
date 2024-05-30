<?php
session_start();
if(isset($_SESSION["fullname"])) header("location:list_contact.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon-2.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <main class=" pt-5  mdb-docs-layout position-relative" style="background: linear-gradient(rgb(255, 243, 196), rgb(255, 220, 80), rgb(224, 180, 0)) !important; height: 100vh !important">
        <div class="container px-lg-5">
            <!--Section: Demo-->
            <section class="pb-4 d-flex justify-content-center">
                <div class="border rounded-5 bg-white w-75 tabel-area " style="box-shadow: 0px 0px 30px gray !important">
                    <section class="w-100 p-4 d-flex justify-content-center pb-4">
                        <form method="post" action="login.php" style="width: 22rem;" id="frm-login">
                            <!-- Email input -->
                            <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                                <div class="kotak-profile" style="text-align: center">
                                    <img src="../assets/images/Logo STM OK.png" alt="" class="img-logo-login"><br>
                                </div>
                                <div class="judul-login">Login</div>
                                <label class="form-label" for="username" style="margin-left: 0px;">Username</label>
                                <input required type="text" id="username" name="username" value="<?=isset($_COOKIE["username"])?$_COOKIE["username"]:""?>" class="form-control">
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 88.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                                <label class="form-label" for="password" style="margin-left: 0px;">Password</label>
                                <input required type="password" id="password" name="password" class="form-control"  value="<?=isset($_COOKIE["password"])?$_COOKIE["password"]:""?>">
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 64.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check" style="">
                                        <input class="form-check-input" type="checkbox" id="remember" name="remember" <?=isset($_COOKIE["username"])?"checked":""?> value="<?=isset($_COOKIE["password"])?"yes":"no"?>">
                                        <label class="form-check-label" for="remember"> Remember me </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" id="btn-sign" data-mdb-button-init="" data-mdb-ripple-init=""
                                class="btn btn-primary btn-block mb-2" data-mdb-button-initialized="true" >Sign
                                in</button>
                            <button type="button" id="btn-home" data-mdb-button-init="" data-mdb-ripple-init="" 
                                class="btn btn-block mb-2" data-mdb-button-initialized="true">
                                <i class="fa fa-home icon-c" style="color: black; font-size: 19.8px"></i>
                            </button>
                        </form>
                    </section>
                </div>
            </section>
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("body").fadeIn("slow");
        // $("#btn-test").click(function(){
        //     alert("ini tombol test");
        // });
        // $(".btn").click(function(){
        //     alert("ini tombol");
        // });
        $("#remember").change(function () {
            if($(this).prop("checked")){
            $(this).val("yes");
            } else {
               $(this).val("no");
            }
        });
        $("#frm-login").submit(function(p){
            let data = $(this).serialize();
            p.preventDefault();
            $.ajax({
                url: "login.php",
                type: "POST",
                data: data,
                beforeSend: function(){
                    console.log(data);
                },
                success: function(response){
                    if(response=='login sukses')
                    {
                        window.location='list_contact.php';
                    }else{
                        alert(response);
                    }
                },
                error: function(xhr){
                    alert('Error ' + xhr.status + '! ' + xhr.statusText);
                }
            })
        })

        $("#btn-home").click(function(){
            window.location='../';
        })
    });
    
</script>

</html>