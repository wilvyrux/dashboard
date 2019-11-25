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

      <header class="header-top">
        <div class="col-md-12">

          <!-- color-thumbnail -->
          <div class="color-thumbnail lightgray-background">
            <a href="#" class="btn btn--switch">On / Off</a>
            <div class="container">
              <div class="row switch-on-off">

                <div class="col-lg-12">
                  <h1>Dashboard
                  </h1>
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
          <div class="top-navigation">
            <div class="container">
              <div class="row">
                <div class="col-lg-9 col-md-9 text-left">
                  <div class="btn-group control-butons-edit">
                    <a href="#"> <i class="fa fa-plus" aria-hidden="true"></i>New Quick </a>
                    <a href="#"> <i class="fa fa-pencil" aria-hidden="true"></i> Edit </a>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 text-right">
                  <div class="searchbar">
                    <input type="text" placeholder="search now">
                    <button> <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>


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
                <th>Name </th>
                <th>Checkin/Checkout </th>
                <th>Action </th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__deploy">deployed</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkout"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate dropdown-toggle" id="dropdownMenuButton"
                      data-toggle="dropdown"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__ready">ready</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>


              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn--duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#" class="btn btn--delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

                  </div>
                </td>
              </tr>

              <tr class="table-list__item">
                <td> <input type="checkbox" class="check_"> </td>
                <td> <a href="#" class="asset--view"> 112232344</a> </td>
                <td>8b79282323-10010232fas0asdsd-sdsdsd-2323</td>
                <td> 12121244 </td>
                <td>Macbook Pro</td>
                <td>Laptops</td>
                <td>
                  <div class="status status__pending">pending</div>
                </td>
                <td>
                  <div class="person"> <i class="fa fa-user" aria-hidden="true"></i>
                    joany jonh</div>
                </td>
                <td>
                  <div class="check-status check-status__checkin"> Checkin</div>
                </td>
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



      <!-- view container for view section -->
      <div class="sidebar-content__item sidebar-content__view">

        <div class="btn-group">
          <button class="btn btn--write"><i class="fa fa-floppy-o" aria-hidden="true"></i>
            Edit</button>
          <button class="btn btn--cancel"><i class="fa fa-ban" aria-hidden="true"></i>
            Cancel</button>
        </div>


          <!-- custom-tab-wrapper -->
        <div class="custom-tab-wrapper">
              <nav class="custom-tab-wrapper__tab">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="true">account</a>

                  <a class="nav-item nav-link" id="nav-devices-tab" data-toggle="tab" href="#nav-devices" role="tab" aria-controls="nav-devices" aria-selected="false">devices</a>

                  <a class="nav-item nav-link" id="nav-liscenses-apps-tab" data-toggle="tab" href="#nav-liscenses-apps" role="tab" aria-controls="nav-liscenses-apps" aria-selected="false">liscenses and apps</a>

                  <a class="nav-item nav-link" id="nav-mail-tab" data-toggle="tab" href="#nav-mail" role="tab" aria-controls="nav-mail" aria-selected="false">Mail</a>

                  <a class="nav-item nav-link" id="nav-onedrive-tab" data-toggle="tab" href="#nav-onedrive" role="tab" aria-controls="nav-onedrive" aria-selected="false">one drive</a>
                </div>
            </nav>
            <div class="tab-content custom-tab-wrapper__content" id="nav-tabContent">
                <div class="tab-pane fade in active" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">

                  <!-- tab 1 content -->
                  <h3> account </h3>
                  <ul>
                      <li>
                          <h4>IT 1212</h4>
                      </li>
                      <li>
                          <div class="form-group">
                              <label>Description</label>
                              <input type="text" value="" placeholder="enter value here" disabled="">
                          </div>
                      </li>
                      <li>
                          <div class="form-group">
                              <label>Phone</label>
                              <input type="text" value="" placeholder="enter value here" disabled="">
                          </div>
                      </li>
                      <li>
                          <div class="form-group">
                              <label>Asset Type</label>
                              <select disabled="">
                                  <option value="">Select 1</option>
                                  <option value="">Select 2</option>
                                  <option value="">Select 1</option>
                              </select>
                          </div>
                      </li>
                      <li>
                          <div class="form-group">
                              <label>Assign to</label>
                              <select disabled="">
                                  <option value="">Select 1</option>
                                  <option value="">Select 2</option>
                                  <option value="">Select 1</option>
                              </select>
                          </div>
                      </li>
                      <li>
                          <div class="form-group">
                              <label>Department</label>
                              <input type="text" value="" placeholder="enter value here" disabled="">
                          </div>
                      </li>
                      <li>
                          <div class="btn-group">
                              <button class="btn btn--write"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                                  Edit</button>
                              <button class="btn btn--cancel"><i class="fa fa-ban" aria-hidden="true"></i>
                                  Cancel</button>
                          </div>
                      </li>
                  </ul>
                   <!-- tab 1 content -->

                
                </div>


                <div class="tab-pane fade" id="nav-devices" role="tabpanel" aria-labelledby="nav-devices-tab">

                      <!-- tab 2 content -->
                      <h3> devices </h3>
                      <!-- tab 2 content -->
                </div>


                <div class="tab-pane fade" id="nav-liscenses-apps" role="tabpanel" aria-labelledby="nav-liscenses-apps-tab">
                  
                       <!-- tab 3 content -->
                       <h3> liscenses </h3>
                      <!-- tab 3 content -->

                </div>
                <div class="tab-pane fade" id="nav-mail" role="tabpanel" aria-labelledby="nav-mail-tab">
                  
                       <!-- tab 3 content -->
                       <h3> Mail </h3>
                      <!-- tab 3 content -->

                </div>
                <div class="tab-pane fade" id="nav-onedrive" role="tabpanel" aria-labelledby="nav-onedrive-tab">
                  
                          <!-- tab 3 content -->
                          <h3> onedrive </h3>
                      <!-- tab 3 content -->

                </div>
            </div>
        </div>
      <!-- custom-tab-wrapper -->

      </div>


      <!-- view container for edit section -->
      <div class="sidebar-content__edit">
            <div class="btn-group">
              <button class="btn btn--write"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                save</button>
              <button class="btn btn--cancel"><i class="fa fa-ban" aria-hidden="true"></i>
                Cancel</button>
            </div>


                <!-- custom-tab-wrapper -->
        <div class="custom-tab-wrapper">
              <nav class="custom-tab-wrapper__tab">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-account2-tab" data-toggle="tab" href="#nav-account2" role="tab" aria-controls="nav-account" aria-selected="true">account</a>

                  <a class="nav-item nav-link" id="nav-devices2-tab" data-toggle="tab" href="#nav-devices2" role="tab" aria-controls="nav-devices" aria-selected="false">devices</a>

                </div>
            </nav>
            <div class="tab-content custom-tab-wrapper__content" id="nav-tabContent">
                <div class="tab-pane fade in active" id="nav-account2" role="tabpanel" aria-labelledby="nav-account2-tab">

                  <!-- tab 1 content -->
                  <h3> account </h3>
                  <ul>
                <li>
                  <h4>IT 1212</h4>
                </li>
                <li>
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" value="" placeholder="enter value here">
                  </div>
                </li>
                <li>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" value="" placeholder="enter value here">
                  </div>
                </li>
                <li>
                  <div class="form-group">
                    <label>Asset Type</label>
                    <select>
                      <option value="">Select 1</option>
                      <option value="">Select 2</option>
                      <option value="">Select 1</option>
                    </select>
                  </div>
                </li>
                <li>
                  <div class="form-group">
                    <label>Assign to</label>
                    <select>
                      <option value="">Select 1</option>
                      <option value="">Select 2</option>
                      <option value="">Select 1</option>
                    </select>
                  </div>
                </li>
                <li>
                  <div class="form-group">
                    <label>Department</label>
                    <input type="text" value="" placeholder="enter value here">
                  </div>
                </li>
            </ul>
                   <!-- tab 1 content -->

                
                </div>


                <div class="tab-pane fade" id="nav-devices2" role="tabpanel" aria-labelledby="nav-devices2-tab">

                      <!-- tab 2 content -->
                      <h3> devices2 </h3>
                      <!-- tab 2 content -->
                </div>

            </div>
        </div>
      <!-- custom-tab-wrapper -->


           

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
    $("#checkall").click(function () {
      $("input:checkbox").prop('checked', $(this).is(":checked"));
    })
  </script>


  <!-- add and delete -->
  <script>
    $(function () {
      $(".btn--duplicate").on('click', function () {
        var ele = $(this).closest('.table-list__item').clone(true);
        $(this).closest('.table-list__item').after(ele);
        40
      })
    })
  </script>

  <!-- open sidebar and go to edit -->
  <script>
    $(function () {
      $(".btn--edit").on('click', function () {
        $('.sidebar-content').addClass('sidebar-content--toogle');
        $('.sidebar-content--toogle').addClass('sidebar-content--toogle-edit');
        $('.sidebar-content').removeClass('sidebar-content--toogle-view')
      })
    })
  </script>


  <!-- open sidebar and display edit  -->
  <script>
    $(function () {
      $(".asset--edit").on('click', function () {
        $('.sidebar-content').addClass('sidebar-content--toogle');
        $('.sidebar-content--toogle').addClass('sidebar-content--toogle-edit');
        $('.sidebar-content').removeClass('sidebar-content--toogle-view')
      })
    })
  </script>

  <!-- open sidebar and display view -->
  <script>
    $(function () {
      $(".asset--view").on('click', function () {
        $('.sidebar-content').addClass('sidebar-content--toogle');
        $('.sidebar-content--toogle').addClass('sidebar-content--toogle-view');
      })
    })
  </script>

  <!-- close sidebar -->
  <script>
    $(function () {
      $(".btn--cancel").on('click', function () {
        $('.sidebar-content--toogle').removeClass('sidebar-content--toogle');
      })
    })
  </script>


  <!-- close sidebar -->
  <script>
    $(function () {
      $(".close--box").on('click', function () {
        $('.sidebar-content').removeClass('sidebar-content--toogle');

      })
    })
  </script>


  <!-- remove icon -->
  <script>
    $('.btn--delete').click(function () {
      $(this).closest(".table-list__item").remove();
    });
  </script>

  <!-- hide dashboard wrapp -->
  <script>
    $(".btn--switch").on('click', function () {
      $('.switch-on-off').toggleClass('switch-on-off--hidden');
    })
  </script>


  <script>
    jQuery(window).scroll(function () {
      var scroll = jQuery(window).scrollTop();

      if (scroll >= 100) {
        jQuery(".header-top").addClass("header-top--scroll");
      } else {
        jQuery(".header-top").removeClass("header-top--scroll");
      }
    });
  </script>



</body>

</html>