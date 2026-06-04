 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <style>
     body {
       font-family: "Poppins", sans-serif;
       background: linear-gradient(135deg, #71b7e6, #9b59b6);
       min-height: 100vh;
       display: flex;
       align-items: center;
       justify-content: center;
     }

     .form-card {
       max-width: 700px;
       width: 100%;
       background: #fff;
       border-radius: 8px;
       box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
     }

     .title-line {
       height: 3px;
       width: 30px;
       background-color: red;
       margin-top: 4px;
     }

     .btn-gradient {
       background: linear-gradient(135deg, #71b7e6, #9b59b6);
       color: #fff;
       border: none;
       transition: opacity 0.2s ease;
     }

     .btn-gradient:hover {
       opacity: 0.9;
       color: #fff;
     }

     /* Style custom radio button */
     .form-check-input:checked {
       background-color: #9b59b6;
       border: #9b59b6;
     }

     .registration-card {
       border: none;
       border-radius: 12px;
       box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
     }
   </style>
 </head>