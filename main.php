<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CareerHUB - Main Page</title>
  <style>
    /* General Styles */
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }
    
    .container-scroller {
      min-height: 100vh;
    }
    
    /* Navbar Styles */
    .navbar {
      padding: 15px 0;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-brand h1 {
      font-weight: 700;
      font-size: 1.75rem;
    }
    
    .text-primary {
      color: #2C4E80 !important;
    }
    
    /* Main Content Styles */
    .page-body-wrapper {
      display: flex;
      flex-direction: column;
      min-height: calc(100vh - 72px);
    }
    
    .content-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #2C4E80;
      background: linear-gradient(135deg, #2C4E80 0%, #1E3A8A 100%);
      flex-grow: 1;
    }
    
    .auth {
      padding: 2rem 0;
    }
    
    .auth-form-light {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
      padding: 2.5rem !important;
    }
    
    .auth-form-light h3 {
      font-size: 1.75rem;
      font-weight: 600;
      color: #2C4E80;
      margin-bottom: 1.5rem;
    }
    
    .auth-form-light h4 {
      font-size: 1.1rem;
      font-weight: 400;
      color: #6c757d;
      margin-bottom: 2rem;
    }
    
    .btn-block {
      display: block;
      width: 100%;
    }
    
    .btn-primary {
      background-color: #2C4E80;
      border-color: #2C4E80;
      padding: 12px;
      font-size: 1rem;
      transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
      background-color: #1E3A8A;
      border-color: #1E3A8A;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    
    .btn-lg {
      border-radius: 5px;
    }
    
    .mt-3 {
      margin-top: 1.5rem !important;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .auth-form-light {
        padding: 1.5rem !important;
      }
      
      .auth-form-light h3 {
        font-size: 1.5rem;
      }
      
      .navbar-brand h1 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <div class="container">
        <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
          <h1 class="m-0 text-primary">CareerHUB</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    
    <!-- Main Content -->
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h3>Welcome To CareerHUB</h3>
              <h4 class="font-weight-light">Who you are?</h4>
              
              <div class="mt-3">
                <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="login.php">ADMIN</a>
              </div>
              <div class="mt-3">
                <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="index.php">USER</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Simple script to handle button hover effects
    document.addEventListener('DOMContentLoaded', function() {
      const buttons = document.querySelectorAll('.btn-primary');
      
      buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-2px)';
          this.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
        });
        
        button.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0)';
          this.style.boxShadow = 'none';
        });
      });
    });
  </script>
</body>

</html>