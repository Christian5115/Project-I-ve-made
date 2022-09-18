<!DOCTYPE html>
<html>

<?php
    $this->load->view('admin/top/'.$top);
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    <?php
        $this->load->view('admin/header/'.$header);
        $this->load->view('admin/menu/'.$menu);
        $this->load->view('admin/content/'.$content);
        $this->load->view('admin/footer/'.$footer);
    
    ?>

        <div class="control-sidebar-bg"></div>
    </div>

    <?php
        $this->load->view('admin/bottom/'.$bottom);
    ?>

</body>
</html>