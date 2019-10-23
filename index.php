<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Morlan</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">

  <link href="css/core-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>



  <!-- body content wrapper  -->
  <section class="main-wrapper dashboard">

    <div class="container dashboard__wrapper">
      <!-- /*************************************************/ -->
      <div class="col-md-12">

        <!-- color-thumbnail -->
        <div class="color-thumbnail lightgray-background">
          <div class="container">
            <div class="row">

              <div class="col-lg-12">
                <h1>Dashboard</h1>
              </div>

              <!-- col start here  -->
              <div class="col-md-3">
                <!-- counter-bar -->
                <div class="counter-bar cyan-background">
                  <div class="counter-bar__top white-text">
                    <div class="counter-bar__top--left">
                      <h3>1,2300</h3>
                      <p>Total Assests</p>
                    </div>
                    <div class="counter-bar__top--right">
                      <i class="fa fa-barcode" aria-hidden="true"></i>
                    </div>
                  </div>

                  <div class="counter-bar__bottom text-center">
                    <a href="#">more info <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a>
                  </div>
                </div>
                <!-- end counter-bar -->
              </div>


              <div class="col-md-3">
                <!-- counter-bar -->
                <div class="counter-bar red-background">
                  <div class="counter-bar__top white-text">
                    <div class="counter-bar__top--left">
                      <h3>50</h3>
                      <p>Total Lisense</p>
                    </div>
                    <div class="counter-bar__top--right">
                      <i class="fa fa-floppy-o" aria-hidden="true"></i>
                    </div>
                  </div>

                  <div class="counter-bar__bottom text-center">
                    <a href="#">more info <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a>
                  </div>
                </div>
                <!-- end counter-bar -->
              </div>


              <div class="col-md-3">
                <!-- counter-bar -->
                <div class="counter-bar orange-background">
                  <div class="counter-bar__top white-text">
                    <div class="counter-bar__top--left">
                      <h3>4</h3>
                      <p>Total Accessories</p>
                    </div>
                    <div class="counter-bar__top--right">
                      <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                    </div>
                  </div>

                  <div class="counter-bar__bottom text-center">
                    <a href="#">more info <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a>
                  </div>
                </div>
                <!-- end counter-bar -->
              </div>


              <div class="col-md-3">
                <!-- counter-bar -->
                <div class="counter-bar violet-background">
                  <div class="counter-bar__top white-text">
                    <div class="counter-bar__top--left">
                      <h3>1</h3>
                      <p>Total Cosumables</p>
                    </div>
                    <div class="counter-bar__top--right">
                      <i class="fa fa-tint" aria-hidden="true"></i>
                    </div>
                  </div>

                  <div class="counter-bar__bottom text-center">
                    <a href="#">more info <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a>
                  </div>
                </div>
                <!-- end counter-bar -->
              </div>

              <!-- col start here  -->
            </div>
          </div>
        </div>
        <!-- color-thumbnail -->
      </div>


      <div class="col-lg-12">

        <div class="table-list table-responsive">
          <table>
            <thead>
              <tr>
                <th><input type="checkbox" id="checkall"></th> 
                <!-- <th>Device image</th> -->
                <th>Asset Tag</th>
                <th>Serial </th>
                <th>Model </th>
                <th>Category </th>
                <th>Status </th>
                <th>Checked out to </th>
                <th>Checkin/Checkout </th>
                <th>Action </th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_">  </td>
                <td> <img src="images/red.jpg"> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td> <div class="status status__deploy">deployed</div> </td>
                <td><div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
 joany jonh</div></td>
                <td><div class="check-status check-status__checkout"> Checkin</div></td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_">  </td>
                <td> <img src="images/red.jpg"> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td> <div class="status status__ready">ready</div> </td>
                <td><div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
 joany jonh</div></td>
                <td><div class="check-status check-status__checkin"> Checkin</div></td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr> 


              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_">  </td>
                <td> <img src="images/red.jpg"> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td> <div class="status status__pending">pending</div> </td>
                <td><div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
 joany jonh</div></td>
                <td><div class="check-status check-status__checkin"> Checkin</div></td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr> 

            </tbody>
          </table>


        </div>

      </div>

      <!-- /*************************************************/ -->
    </div>


    
    <div class="sidebar-content">
        <a href="#" class="close--box"><i class="fa fa-times" aria-hidden="true"></i></a>
         <div class="sidebar-content__item">
            <table>
              <thead>
                  <tr>
                    <th>Asset Tag</th>
                    <th>Asset Name</th>
                    <th>Description</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                    <td>IT 1212</td>
                    <td>Morlan Test</td>
                    <td>RS - 999</td>
                </tr>
                <tr>
                    <td>IT 1212</td>
                    <td>Morlan Test</td>
                    <td>RS - 999</td>
                </tr>
                <tr>
                    <td>IT 1212</td>
                    <td>Morlan Test</td>
                    <td>RS - 999</td>
                </tr>
                <tr>
                    <td>IT 1212</td>
                    <td>Morlan Test</td>
                    <td>RS - 999</td>
                </tr>
              </tbody>
            </table>
         </div>
    </div>

  </section>
  <!--end of  body content wrapper-->




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <!-- all scripts load here -->
  <script src="js/all-scripts.js"></script>


  <!-- enable all checkbox -->
  <script>
    $("#checkall").click(function(){
        $("input:checkbox").prop( 'checked',$(this).is(":checked") );
    })
  </script>


<!-- add and delete -->
  <script>
    $(function(){
      $(".btn--duplicate").on('click', function(){
        var ele = $(this).closest('.table-list__item').clone(true);
        $(this).closest('.table-list__item').after(ele);40
      })
    })
  </script>

  <script>
    $(function(){
      $(".btn--edit").on('click', function(){
       $('.sidebar-content').addClass('sidebar-content--toogle');
       
      })
    })
  </script>

<!-- open sidebar -->
<script>
    $(function(){
      $(".close--box").on('click', function(){
       $('.sidebar-content').removeClass('sidebar-content--toogle');
       
      })
    })
  </script>


<!-- remove icon -->
  <script>
  $('.btn--delete').click(function(){
    $(this).closest(".table-list__item").remove();
  });
  </script>



</body>

</html>