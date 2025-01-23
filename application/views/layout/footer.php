<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<?php
    # untuk load script yang di deklarasikan di controller
    if (!empty($script)) :
      foreach ($script as $key => $value) :
?>
        <script src="<?=base_url('assets/script/'.$value."?v=".time())?>"></script>
<?php
      endforeach;
    endif;
?>

</body>
</html>