<?php
if (isset($_POST['submit'])) {
    extract($_POST);
    $filename = $_FILES['file']['name'];
    $tmpname = $_FILES['file']['tmp_name'];

    $sql = "INSERT INTO `add_event`(`name`, `descriptions`, `date`, `time`, `location`, `manage_by`, `file`) VALUES ('$name','$descriptions','$date','$time','$location','$manage','$filename')";
    $ms = $crud->insert($sql);
    if (isset($ms)) {
        move_uploaded_file($tmpname,"upload/".$filename);
        echo $ms;
    }
}
?>


<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add Event</h4>
                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and
                        more</p>
                </div>
                <div class="tab-inn">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="name" value="" class="validate" required>
                                <label class="">Event name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="descriptions"></textarea>
                                <label class="">Event Descriptions</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="date" name="date" value="" class="validate" required>
                                <label class=""></label>
                            </div>
                            <div class="input-field col s6">
                                <input type="time" name="time" class="validate" value="" required>
                                <label class=""></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" name="location" value="" class="validate">
                                <label class="">Location</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" name="manage" value="" class="validate">
                                <label class="">Manage by</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>File</span>
                                    <input type="file" name="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Event image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" name="submit" class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>