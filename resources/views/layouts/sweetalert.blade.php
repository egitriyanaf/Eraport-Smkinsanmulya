<!-status pop up alert--->
@if (session('text'))
<script>
  Swal.fire({
    icon: "{{ session('icon') }}",
    title: "{{ session('title') }}",
    text: "{{ session('text') }}",
    timer: 5000
  })
</script>
@endif