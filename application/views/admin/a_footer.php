      <div class="footer">
        <div class="pull-right">
            10GB of <strong>250GB</strong> Free.
        </div>
        <div>
            <strong>Copyright</strong> Example Company &copy; 2014-2017
        </div>
      </div>

    </div>
  </div>


  <!-- Mainly scripts -->
  <script src="<?=$asset_root;?>js/jquery-3.1.1.min.js"></script>
  <script src="<?=$asset_root;?>js/bootstrap.min.js"></script>
  <script src="<?=$asset_root;?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="<?=$asset_root;?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <!-- page Js  -->
  <?= $page_js; ?>

  <!-- Custom and plugin javascript -->
  <script src="<?=$asset_root;?>js/inspinia.js"></script>
  <script src="<?=$asset_root;?>js/plugins/pace/pace.min.js"></script>

  <script>
    $('#try-logout').click(function(){
      $.ajax({
          crossOrigin : true,
          url:'/admin/logout',
          // url:'./logout.php',
          type : 'post',
          success:function(response){
              alert("로그아웃 되었습니다.");
              location.href = "/admin";
          }
      });
    });
  </script>

</body>

</html>