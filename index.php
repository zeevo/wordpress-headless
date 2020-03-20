<?php 

$site_location = 'http://localhost:8000'

?>

<meta content="0; URL='<?php site_location ?>''" http-equiv"refresh">

<!-- just in case the meta tag is not read properly, here is plan B: a JS redirect -->
<script type="text/javascript">
  window.location = '<?php site_location ?>';
</script>