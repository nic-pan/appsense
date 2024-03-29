<?php
include_once "../../app/bootstrap.php";

use entity\Company;
use Util\Template;

$pageName = "Dashboard | Edit company details";
$templateDir = "public/dashboard"; 

if (!isset($_GET['id'])) {
    returnToPage("companies.php");
} 

$company = new Company($_GET['id']);
if ($company->getOwner()->get('id') != $currentUser->get('id')) {
    returnToPage("../forbidden.php");
}

init_dashboard($currentUser, Template::header($pageName, $templateDir));

?>

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-user icon-gradient bg-sunny-morning">
                        </i>
                    </div>
                    <div>Edit details
                        <div class="page-title-subheading">Update details about your company.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Edit details</h5>
                        <?php 
                            if (isset($_GET['updatedDetails'])) {
                                $updatedDetails = $_GET['updatedDetails'];
                                if ($updatedDetails == 'success') {
                                 echo '<div class="alert alert-success fade show" role="alert">Successfully updated details about your company.</div>';
                                } else if ($updatedDetails == 'fail'){
                                    echo '<div class="alert alert-danger fade show" role="alert">Could not update company details due to empty entries.</div>'; 
                                } else {
                                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>There was no data to be updated.</div>';
                                }
                            } 
                            if (isset($_GET['upload'])) {
                                $upload = $_GET['upload'];
                                if ($upload == 'success') {
                                    echo '<div class="alert alert-success fade show" role="alert">Successfully updated your company logo.</div>';
                                } else {
                                    echo '<div class="alert alert-danger fade show" role="alert">Could not update company logo.</div>'; 
                                }
                            }
                            if (isset($_GET['removed'])) {
                                $removed = $_GET['removed'];
                                if ($removed == 'success') {
                                    echo '<div class="alert alert-success fade show" role="alert">Successfully removed your company logo.</div>';
                                } else {
                                    echo '<div class="alert alert-danger fade show" role="alert">Could not remove company logo.</div>'; 
                                }
                            }
                        ?>
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="widget-content-left">
                                        <img width="100" class="rounded-circle" src="<?php echo $company->get('logo') ? $company->get('logo') : 'https://i-love-png.com/images/not-available_7305.png' ?>"
                                            alt="">
                                    </div>
                                </div>
                                <div class="widget-content-left flex2">
                                    <div class="widget-heading">
                                        <?php
                                            echo $company->get('name');
                                        ?>
                                    </div>
                                    <div class="widget-subheading opacity-7">
                                        <?php 
                                            echo $company->getBusinessType();
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <form action="logic/upload-pic.php" method="POST" enctype="multipart/form-data">
                                <div class="mt-2 btn-group">
                                    <button class="btn btn-dark">Change Logo</button>
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-dark">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(52px, 33px, 0px);">
                                        <button type="button" tabindex="0" class="dropdown-item"id="updatePic" onclick="$('#picInput').click();">Update logo</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button onclick="location.href=`logic/remove-pic.php?company-id=<?php echo $_GET['id']; ?>`" type="button" tabindex="0" class="dropdown-item" >Remove current logo</button>
                                    </div>
                                </div>
                                        
                                <input style="height:0px;display:none;overflow:hidden" type="file" id="picInput" name="company-logo" accept="image/*"/>
                                <input type="hidden" name="company-id" value="<?php echo $_GET['id'] ?>" />

                                <button class="mt-2 btn btn-info" id="update-pic">Update</button>
                            </form>
                        </div>
                        <div class="divider"></div>

                        <div class="card-body">
                            <h5 class="card-title">Company Details</h5>
                            <div>
                                <form class="" action="./logic/update-company-details.php?id=<?php echo $_GET['id'];?>" method="POST">
                                    <div class="position-relative row form-group">
                                        <label for="companyName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input name="companyName" id="name" type="text" class="form-control" value="<?php echo $company->get('name');?>">
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="businessTypes" class="col-sm-2 col-form-label">Business Type</label>
                                        <div class="col-sm-10">
                                            <select name="business_type_id" id="businessTypes" class="form-control">
                                                <?php
                                                    $businessTypeTemplate = "<option value='{business_type_id}'>{business_type_name}</option>";
                                                    $placeholders = array(
                                                        "id" => "{business_type_id}",
                                                        "name" => "{business_type_name}"
                                                    );

                                                    $bts = $db->listAll("business_types");                                            
                                                    foreach ($bts as $record) {
                                                        $data = array(
                                                            "id" => $db->getField($record, "id"),
                                                            "name" => $db->getField($record, "name")
                                                        );
                                                        if ($data['name'] != $company->getBusinessType()) {
                                                            $template = fillTemplateWithData($businessTypeTemplate, $placeholders, $data);
                                                        } else {
                                                            $currentBusinessType = "<option value='{business_type_id}' selected>{business_type_name}</option>";
                                                            $template = fillTemplateWithData($currentBusinessType, $placeholders, $data);
                                                        }
                                                        echo $template;
                                                    }
                                                    
                                                ?>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="position-relative row form-group">
                                        <label for="companyAddress" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input name="companyAddress" id="name" type="text" class="form-control" value="<?php echo $company->get('address');?>">
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="position-relative row form-group">
                                        <label for="companyStatus" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select name="companyStatus" class="form-control">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                            <small>Setting your company as inactive will disable login for your employees.</small>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-check">
                                        <div class="col-sm-10 offset-sm-5">
                                            <button class="btn btn-secondary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
echo Template::footer($templateDir);