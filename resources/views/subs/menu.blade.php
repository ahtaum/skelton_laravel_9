<nav class="navbar navbar-expand-lg fixed-top" id="menu-header">
    <div class="container mt-1">

      <a class="navbar-brand fs-5" href="#"><i class="bi bi-moon-stars"></i></a>

      <button class="navbar-toggler fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="#">Articles</a>
          </li>
          <li class="nav-item d-lg-none d-block d-md-block">
            <a class="nav-link fs-5 login" href="#">Login</a>
          </li>
        </ul>
        <ul class="navbar-nav d-none d-md-none d-lg-block">
            <li class="nav-item login">
              <a class="nav-link active fs-5" href="#">Login</a>
            </li>
        </ul>
      </div>

    </div>
</nav>

<style>

    .nav-item {
      margin-right: 15px;
    }
    .login {
      margin-right: 0px;
    }
    .login .nav-link:hover {
      font-weight: bolder;
      transition: all ease 0.3s;
      color: rgb(102, 99, 99);
    }

    .nav-link, i {
        color: white;
        background: none;
        font-weight: lighter;
    }
    .nav-link:hover {
      color: black;
      background: white;
    }

    .scrolled {
      background: rgba(0, 0, 0, 0.697);
      transition: background-color 200ms linear;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .bi.bi-list {
      color: white;
    }

    .navbar-collapse {
      background: rgba(82, 81, 81, 0.5);
    }
    .navbar-collapse .nav-item {
      margin-left: 10px;
    }

    @media (max-width: 576px) {}

    @media (min-width: 720px) {}

    @media (min-width: 992px) {
      .navbar-collapse {
        background: none;
      }
      .navbar-collapse .nav-item {
        margin-left: 0px;
      }
    }

    @media (min-width: 1200px) {}

    @media (min-width: 1400px) {}

</style>

<script>
  $('.navbar-toggler-icon').addClass('bi bi-list');

  $(function () {
    $(document).scroll(function () {
      var $nav = $("#menu-header");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });
</script>