

<!DOCTYPE html>
<html>
  <head>
    <title>FACE LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/face.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap"
      rel="stylesheet"
    />
     <!-- Boostrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
      integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
      crossorigin="anonymous"
    />
  </head>
  <!-- Our Css -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
  <body class="body1 vh-100 vw-100 object-cover">
       <!-- start of admin modal -->
     <div class="modal fade " id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content modalcl">
          <div class="modal-header">
            <h5 class="modal-title modaltext" id="adminLoginModalCenterTitle">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" id="adminLoginForm">
              <div class="form-group lb1">
                <i class="fas fa-envelope lb1"></i><label for="adminLogEmail" class="pl-2 font-weight-bold lb1">Email</label><input type="email"
                    class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
                </div>
                <div class="form-group lb1">
                  <i class="fas fa-key lb1"></i><label for="adminLogPass" class="pl-2 font-weight-bold lb1">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <small id="statusAdminLogMsg"></small>
            <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div> 
<!-- End of admin modal -->
<div class="bd2" style="text-align: center; text-align: center; color: white;" >
    <div style="text-align: center; text-align: center;
  font-size: 3rem;
  line-height: 1.5;">WELCOME TO FACE RECOGNITION LOGIN</div>
    <button type="button" class="button1" style="text-align:center; align-items: center;" onclick="init()">Login</button>
    <div id="webcam-container" class="webcam"></div>
    <div id="label-container" class="label"><a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter" style="text-decoration: none; color: white;"></a></div>
    <div id="label-container" class="label label1"></div>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js"></script>
    <script type="text/javascript">
      // More API functions here:
      // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

      // the link to your model provided by Teachable Machine export panel
      const URL = "https://teachablemachine.withgoogle.com/models/amEw2g_uT/";

      let model, webcam, labelContainer, maxPredictions;

      // Load the image model and setup the webcam
      async function init() {
        const modelURL = URL + "model.json";
        const metadataURL = URL + "metadata.json";

        // load the model and metadata
        // Refer to tmImage.loadFromFiles() in the API to support files from a file picker
        // or files from your local hard drive
        // Note: the pose library adds "tmImage" object to your window (window.tmImage)
        model = await tmImage.load(modelURL, metadataURL);
        maxPredictions = model.getTotalClasses();

        // Convenience function to setup a webcam
        const flip = true; // whether to flip the webcam
        webcam = new tmImage.Webcam(400, 400, flip); // width, height, flip
        await webcam.setup(); // request access to the webcam
        await webcam.play();
        window.requestAnimationFrame(loop);

        // append elements to the DOM
        document.getElementById("webcam-container").appendChild(webcam.canvas);
        labelContainer = document.getElementById("label-container");
        for (let i = 0; i < maxPredictions; i++) {
          // and class labels
          labelContainer.appendChild(document.createElement("div"));
        }
      }

      async function loop() {
        webcam.update(); // update the webcam frame
        await predict();
        window.requestAnimationFrame(loop);
      }

      // run the webcam image through the image model
      async function predict() {
        // predict can take in an image, video or canvas html element
        const prediction = await model.predict(webcam.canvas);
        for (let i = 0; i < maxPredictions; i++) {
          const classPrediction =
            prediction[i].className +
            ": " +
            prediction[i].probability.toFixed(2);
          labelContainer.childNodes[i].innerHTML = classPrediction;
        }
      }
    </script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>

     <!-- Student Ajax Call JavaScript -->
      <script type="text/javascript" src="js/ajaxrequest.js"></script>

      <!-- Admin Ajax Call JavaScript -->
      <script type="text/javascript" src="js/adminajaxrequest.js"></script>
      </div>
  </body>
</html>