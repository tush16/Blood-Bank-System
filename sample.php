 <?php include 'partials/_dbconnect.php'; ?>
 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Bootstrap Icons  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

     <title>Add Sample Details </title>
     <style>
     section {
         padding: 60px 0;
     }
     </style>
 </head>

 <body>

     <!-- navbar  -->

     <?php include 'partials/_navbar.php'; ?>

     <!-- contact form -->
     <!-- form-control, form-label, form-select, input-group, input-group-text -->
     <section id="contact">
         <div class="container-lg">

             <div class="text-center">
                 <h2 class="display-3">Add Blood Samples</h2>
                 <p class="lead">You Can add a Sample Blood Availabe With the Blood Type</p>
             </div>
             <div class="row justify-content-center my-5">
                 <div class="col-lg-6">

                     <form>
                         <label for="bloodType" class="form-label">Blood Type:</label>
                         <div class="input-group mb-4">
                             <span class="input-group-text">
                                 <i class="bi bi-droplet-fill text-danger"></i>
                             </span>
                             <input type="text" id="bloodType" name="bloodType" class="form-control"
                                 placeholder="e.g. B+" />
                         </div>
                         <label for="name" class="form-label">Hospital Name:</label>
                         <div class="mb-4 input-group">
                             <span class="input-group-text">
                                 <i class="bi bi-hospital-fill text-warning"></i>
                             </span>
                             <input type="text" id="name" name="name" class="form-control"
                                 placeholder="e.g. Apollo Hospitals" />
                         </div>
                         <label for="location" class="form-label">Location:</label>
                         <div class="mb-4 input-group">
                             <span class="input-group-text">
                                 <i class="bi bi-geo-alt-fill text-warning"></i>
                             </span>
                             <input type="text" id="location" name="location" class="form-control"
                                 placeholder="e.g. Bangalore" />
                         </div>
                         <div class="mb-4 text-center">
                             <button type="submit" class="btn btn-warning">Submit</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </section>

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
     </script>

 </body>

 </html>