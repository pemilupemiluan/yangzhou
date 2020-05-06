<?php 
  session_start();
  include 'koneksi.php';
  ?>
  
<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <address>
            <p>Panitia Pemilu PPIT, Cabang Nanjing</p>
            <p class="mb-4">P.R. Tiongkok</p>
            <div class="d-flex align-items-center">
              <a href="mailto:permit.nanjing@yahoo.com" class="footer-link">permit.nanjing@yahoo.com</a>
            </div>
            <p></p>
                        <div class="d-flex align-items-center">
              <a href="http://nanjing.ppitiongkok.org/" class="footer-link">http://nanjing.ppitiongkok.org/</a>
            </div>
          </address>
          <div class="social-icons">
            <h6 class="footer-title font-weight-bold">
              Social Share
            </h6>
            <div class="d-flex">
              <a href="https://facebook.com/ppit.nanjing" target="_blank"><i class="mdi mdi-facebook-box"></i></a>
              <a href="https://www.instagram.com/ppit_nanjing/" target="_blank"><i class="mdi mdi-instagram"></i></a>
             <a href="https://web.wechat.com/ppit_nanjing" target="_blank"><i class="mdi mdi-wechat"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <h6 class="footer-title">Social Share</h6>
              <ul class="list-footer">
                <li><a href="http://test.simpadsar-waykanan.com/" class="footer-link">Home</a></li>
                <?php   
           include 'koneksi.php';
               $data = mysqli_query($koneksi, "SELECT status from `quick_count` WHERE id=1");
              while($d = mysqli_fetch_array($data)){
                  $status =  $d['status'];
                  if($status==1)
                  {
                      ?>
                       <li><a href="quick_count.php" class="footer-link">Quick Count</a></li>
                      <?php
                  }
                  else
                  {
                      echo "";
                  }
              }
          ?>
          

                <li><a href="kandidat.php" class="footer-link">Kandidat</a></li>
                <li><a href="voting.php" class="footer-link">Voting</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <a class="navbar-brand text-white mr-3" href="index.php"><b>e-voting.</b></a>
          <p class="mb-0 text-small pt-1">© 2019-2020. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets_depan/vendors/base/vendor.bundle.base.js"></script>
<script src="assets_depan/vendors/owl.carousel/js/owl.carousel.js"></script>
<script src="assets_depan/vendors/aos/js/aos.js"></script>
<script src="assets_depan/vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
<script src="assets_depan/js/template.js"></script>

<script src="assets/bower_components/chart.js/Chart.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("body").on("click",".pilih-kandidat",function(){
      var id = $(this).attr('id');
      $(".centang-kandidat").removeAttr("checked");
      var pilih = $("#centang_kandidat_"+id).attr("checked","checked");
    });
  });
</script>



<script>
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

  var barChartData = {
    labels : [
    <?php 
    $no=1;
    $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat ORDER BY kandidat_kode ASC");
    while($k = mysqli_fetch_array($kandidat)){
      echo "'(".$k['kandidat_kode'].") ".$k['kandidat_nama']."',";
    }
    ?>
    ],
    datasets : [
    {
      label: 'Suara',
      fillColor : "rgba(51, 240, 113, 0.61)",
      strokeColor : "rgba(11, 246, 88, 0.61)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data : [
      <?php 
      $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat ORDER BY kandidat_kode ASC");
      while($k = mysqli_fetch_array($kandidat)){
        $id_kandidat = $k['kandidat_id'];
        $suara = mysqli_query($koneksi,"SELECT * FROM voting WHERE voting_kandidat='$id_kandidat'");
        $jumlah_suara = mysqli_num_rows($suara);
        echo $jumlah_suara.",";
      }
      ?>
      ]
    },

    ]

  }


  window.onload = function(){
    var ctx = document.getElementById("grafik1").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
     responsive : true,
     animation: true,
     barValueSpacing : 5,
     barDatasetSpacing : 1,
     tooltipFillColor: "rgba(0,0,0,0.8)",
     multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
   });
  }


</script>

</body>
</html>