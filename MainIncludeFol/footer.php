<!-- Start Footer -->
    <footer class="container-fluid bg-dark text-center p-2">
      <small class="text-white">Copyright &copy; 2023 || Designed By IN LEARN || <a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login </a> || <a href="face.php">Face Recognization</a> </small>
    </footer>
    <!-- End Footer -->
    

      <!-- Start Admin Login Modal -->
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
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="adminLogEmail" class="pl-2 font-weight-bold">Email</label><input type="email"
                    class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="adminLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
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
    <!-- End Admin Login Modal -->

 

    <!-- J query and Boostrap and Javascript  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>

    <!-- Student Testimonal Own slider Js -->
    <script type="text/javascript" src="js/owl.min.js"></script>
    <script type="text/javascript" src="js/testyslider.js"></script>

        <!-- Student Ajax Call JavaScript -->
      <script type="text/javascript" src="js/ajaxrequest.js"></script>

        <!-- Admin Ajax Call JavaScript -->
      <script type="text/javascript" src="js/adminajaxrequest.js"></script>

    </body>
</html>