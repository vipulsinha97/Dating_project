@php
$dashboard="admin";
$sidebarMenu = 'Add Event';
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

  <style>
    :root {
      --heading-font: unset;
      --body-font: unset;
      --text-primary-color: #0f5ba9;
    }

    .form-control {
      font-family: unset;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('assets/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('assets/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('assets/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include("../includes/sidebar");

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add Event</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

          <!-- Horizontal Form -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Add Location</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('newEvent')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="Select" class="col-sm-2 col-form-label">Select Location</label>
                  <div class="col-sm-10">
                    <select name="location" class="form-control">
                      @if(old('location'))
                      <option value="{{old('location')}}">{{old('location')}}</option>
                      @else
                      <option disabled selected>-Choose location-</option>
                      @endif
                      @foreach ($location as $location)
                        <option value="{{$location->id}}">{{$location->location_name}}</option>
                      @endforeach
                    </select>
                    <span style="color: red;">@error('location') {{$message}} @enderror</span>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Select" class="col-sm-2 col-form-label">Select Age Group</label>
                  <div class="col-sm-10">
                    <select name="age_group" class="form-control">
                      @if(old('age_group'))
                      <option value="{{old('age_group')}}">{{old('age_group')}}</option>
                      @else
                      <option disabled selected>-Choose Age-Group-</option>
                      @endif
                      @foreach ($ageGroup as $ag)
                        <option value="{{$ag->id}}">{{$ag->starting_age}}-{{$ag->ending_age}}</option>
                      @endforeach
                      <>
                    </select>
                    <span style="color: red;">@error('age_group') {{$message}} @enderror</span>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="CustomFile" class="col-sm-2 col-form-label">Featured Image</label>
                  <div class="col-sm-10">
                    <!-- File input field -->
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="customFile" onchange="previewImage()">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <!-- Image preview and remove button -->
                    <div id="imagePreview" style="margin-top: 10px; display: none;">
                      <img id="previewImg" src="" alt="Image Preview" style="max-width: 100px; max-height: 100px; border: 1px solid #ddd; padding: 5px;">
                      <button type="button" class="btn btn-danger btn-sm" onclick="removeImage()" style="margin-left: 10px;">Remove</button>
                    </div>
                    <span style="color: red;">@error('image') {{$message}} @enderror</span>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputtitle" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="{{old('title')}}" id="inputtitle" placeholder="Event title">
                    <span style="color: red;">@error('title') {{$message}} @enderror</span>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="eventdescription" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="description" placeholder="Event description...">{{old('description')}}</textarea>
                    <span style="color: red;">@error('description') {{$message}} @enderror</span>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="eventdescription" class="col-sm-2 col-form-label">Event Date</label>
                  <div class="col-sm-10">
                    <input type="date" name="event_date" value="{{old('event_date')}}" class="form-control">
                    <span style="color: red;">@error('event_date') {{$message}} @enderror</span>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="eventtimestart" class="col-sm-2 col-form-label">Event Start Time</label>
                  <div class="col-sm-4">
                    <input type="time" name="event_start_time" value="{{old('event_start_time')}}" class="form-control" id="eventtimestartid">
                    <span style="color: red;">@error('event_start_time') {{$message}} @enderror</span>
                  </div>

                  <label for="eventtimeend" class="col-sm-2 col-form-label">Event Duration[In Minutes]</label>
                  <div class="col-sm-4">
                    <input type="number" name="event_duration" value="{{old('event_duration')}}" class="form-control" id="eventtimeendid">
                    <span style="color: red;">@error('event_duration') {{$message}} @enderror</span>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="ticket" class="col-sm-2 col-form-label">Ticket Price</label>
                  <div class="col-sm-10">
                    <input type="text" name="ticket_price" value="{{old('ticket_price')}}" class="form-control" id="ticketid" placeholder="Ticket Price">
                    <span style="color: red;">@error('ticket_price') {{$message}} @enderror</span>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="ticket" class="col-sm-2 col-form-label">GST [In Percentage]</label>
                  <div class="col-sm-10">
                    <input type="text" name="gst_percentage" value="{{old('gst_percentage')}}" class="form-control" id="gst" placeholder="GST">
                    <span style="color: red;">@error('gst_percentage') {{$message}} @enderror</span>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">ADD EVENT</button>
                <button type="submit" class="btn btn-default float-right">Back</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- content -->
    </div>




    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        <!-- Anything you want -->
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2024 <a href="#">NSJ</a>.</strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
  <script>
    // Preview image when file is selected
    function previewImage() {
      const file = document.getElementById('customFile').files[0];
      const previewImg = document.getElementById('previewImg');
      const imagePreview = document.getElementById('imagePreview');

      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          previewImg.src = e.target.result;
          imagePreview.style.display = 'block'; // Show the image preview and remove button
        };
        reader.readAsDataURL(file);
      }
    }

    // Remove the image preview and reset the input
    function removeImage() {
      document.getElementById('customFile').value = ''; // Clear the file input
      const imagePreview = document.getElementById('imagePreview');
      imagePreview.style.display = 'none'; // Hide the preview and remove button
    }
  </script>
</body>

</html>