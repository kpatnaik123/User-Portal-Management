<!DOCTYPE html>
<html>
  <head>
    <title>Project</title>
    <link href="project.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<body class="projectbg">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navposition">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img  id="portimg" src="https://tumo.org/wp-content/uploads/2017/06/portfolio-text-5.png"></a>
          <div class="navmov">
            <ul class="navbar-nav">
              <li class="nav-item">
                <div class="navpad">
                  <a class="nav-link active" style="color:black;" aria-current="page" href="home.php" >Home</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="navpad">
                <a class="nav-link"  style="color:black;" href="education.php">Education</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="navpad">
                <a class="nav-link"  style="color:black;" href="#">Projects</a>
                </div>
              </li>
              <li>
                <div class="navpad">
                <a class="nav-link"  style="color:black;" href="contact.php">Contact</a>
                </div>
              </li>
              <li>
                <div class="navpad">
                <a class="nav-link"  style="color:black;" href="certificates.php">Certifications</a>
                </div>
              </li>
       
            </ul>
          </div>
        </div>
      </nav>
    </div>  
    <div class="container projectmov">
      <h3>Projects</h3>
      <ul>
        <li><div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Project 1
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Resume Built using HTML,CSS</div>
            </div>
          </div></li>
          <li><div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Project 2
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Portfolio website using HTML,CSS,Bootstrap</div>
            </div>
          </div></li>
          <li><div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Project 3
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Basic ATM frame using Java Swings</div>
            </div>
          </div>
        </div></li>
      
      </ul>
    </div> 
    <div class="container">
      <h3 style="margin-top:100px;">Skills</h3>
      <ul>
        <li>Java<br>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45%</div>
          </div></li>
        <li>
          Python<br>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
          </div>
        </li>  
        <li>
          HTML<br>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
          </div>
        </li>
        <li>
          CSS<br>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
          </div>
        </li>
      </ul>

    </div>
</body>  
</html>