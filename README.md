# Headless Wordpress

This is a useful them for use in Jamstack applications

# Setup

```php
<meta content="0; URL='/wp-admin''" http-equiv"refresh">

<!-- just in case the meta tag is not read properly, here is plan B: a JS redirect -->
<script type="text/javascript">
  window.location = '/wp-admin';
</script>
```
