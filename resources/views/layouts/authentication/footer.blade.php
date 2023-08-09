<script>
   const base_path = '{{ url('/') }}\/';
</script>
<script src="{{asset('backend/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/dore.script.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/dore.script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script src="{{asset('backend/js/vendor/bootstrap-notify.min.js')}}"></script>
<script>
   function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
         return false;
      return true;
   }
</script>
</body>
</html>