<!-status pop up alert--->
@if (session('status'))
<div class="alert alert-success" role="alert"><i class="fa fa-bell"></i>
    {{ session('status') }}
</div>
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 1000);
</script>
@endif
    </div>
</div>