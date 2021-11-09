		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021 Batik. All right reserved.</p>
		</footer>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?= base_url()?>assets/admin/js/ckeditor.js"></script>
	<script src="<?= base_url()?>assets/admin/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?= base_url()?>assets/admin/js/jquery.min.js"></script>
	<script src="<?= base_url()?>assets/admin/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?= base_url()?>assets/admin/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?= base_url()?>assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="<?= base_url()?>assets/admin/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!-- 	<script src="<?= base_url()?>assets/admin/js/index3.js"></script>
 -->	<script>
		new PerfectScrollbar('.best-selling-products');
		new PerfectScrollbar('.recent-reviews');
		new PerfectScrollbar('.support-list');
	</script>
	<!--app JS-->
	<script src="<?= base_url()?>assets/admin/js/app.js"></script>
	<script src="<?= base_url()?>assets/admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url()?>assets/admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>

<script>
	function openTab(tabName) {
  var i;
  var x = document.getElementsByClassName("menutab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>
<!-- 	<script>
	$(function () {
	"use strict";
	
	// chart1
	var options = {
		series: [{
			name: 'Revenue',
			data: [4,1, ]
		}],
		chart: {
			foreColor: '#9a9797',
			type: 'area',
			height: 380,
			zoom: {
				enabled: false
			},
			toolbar: {
				show: false
			},
			dropShadow: {
				enabled: false,
				top: 3,
				left: 14,
				blur: 4,
				opacity: 0.10,
			}
		},
		stroke: {
			width: 4,
			curve: 'smooth'
		},
		xaxis: {
			categories: [
				<?php foreach($kategori as $k){ ?>
				'<?= $k->nama?>',
				<?php }?>
				],
		},
		dataLabels: {
			enabled: false
		},
		fill: {
			type: 'gradient',
			gradient: {
				shade: 'light',
				gradientToColors: ['#8833ff'],
				shadeIntensity: 1,
				type: 'vertical',
				opacityFrom: 0.8,
				opacityTo: 0.3,
				//stops: [0, 100, 100, 100]
			},
		},
		colors: ["#8833ff"],
		yaxis: {
		  labels: {
			formatter: function (value) {
			  return value + "";
			}
		  },
		},
		markers: {
			size: 4,
			colors: ["#8833ff"],
			strokeColors: "#fff",
			strokeWidth: 2,
			hover: {
				size: 7,
			}
		},
		grid: {
		   show: true,
		   borderColor: '#ededed',
		   strokeDashArray: 4,
		}
	};
	var chart = new ApexCharts(document.querySelector("#chart1"), options);
	chart.render();

	
});
	</script>
 -->
	<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>

</html>
