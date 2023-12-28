  <!-- JS Files-->
  {{-- <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script> --}}
  <script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  {{-- <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script> --}}
  <script type="module" src="{{asset('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  {{-- <script src="{{asset('backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script> --}}
  <script src="{{asset('backend/assets/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/chartjs/chart.min.js')}}"></script>
  {{-- <script src="{{asset('backend/assets/js/index.js')}}"></script> --}}
  <!-- Main JS-->
  <script src="{{asset('backend/assets/js/main.js')}}"></script>
  <script src="{{ asset('http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js') }}"></script>
  {!! Toastr::message() !!}

</body>

</html>