<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="http://localhost:8000/public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="http://localhost:8000/public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="http://localhost:8000/public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                   <form action = "/save" method = "post" enctype="multipart/form-data">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                      
                       <?php foreach($products as $product){?>
                        <input type = "hidden" name = "editid" value = "{{$product->id}}">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Product Id</label>
                                    <input class="input--style-4" type="text" name="pid" value="{{$product->productid}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Product Name</label>
                                    <input class="input--style-4" type="text" name="pname" value="{{$product->name}}">
                                </div>
                            </div>
                        </div>
                       <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> Current File</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 " type="hidden" name="file">
                                       <img src= "{{ asset("/storage/images/$product->file")}}" style="width:504px;height:228px" /> 
                                    </div>
                                </div>
                            </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> File</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 " type="file" name="image">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Status</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Good
                                            <input type="radio" name="status" value="good"  <?php echo ($product->status=='good')?'checked':'' ?>>
                                            <span class="checkmark"></span>
                                            
                                        </label>
                                        <label class="radio-container">Damage
                                            <input type="radio" name="status" value="damage"<?php echo ($product->status=='damage')?'checked':'' ?>>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>-->
                        <div class="input-group">
                            <label class="label">Model</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="model">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="Model 1">Model 1</option>
                                    <option value="Model 1" <?php if($product->model == 'Model 1'){echo 'selected="selected"';}?>>Model 1</option>
                                    <option value="Model 2" <?php if($product->model == 'Model 2'){echo 'selected="selected"';}?>>Model 2</option>
                                    <option value="Model 1" <?php if($product->model == 'Model 3'){echo 'selected="selected"';}?>>Model 3</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" value="submit" type="submit">Submit</button>
                        </div>
                           <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="http://localhost:8000/public/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="http://localhost:8000/public/vendor/select2/select2.min.js"></script>
    <script src="http://localhost:8000/public/vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="http://localhost:8000/public/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->